<?php
if (file_exists('../admin/includes/systemconfig.php')) {
    include_once('../admin/includes/systemconfig.php');
}

// Simple helper to safely echo
function e($v)
{
    return htmlspecialchars((string)$v, ENT_QUOTES, 'UTF-8');
}

if (!isset($_GET['authorid'])) {
    http_response_code(400);
    die('Author not specified.');
}

$authorId = (int)($_GET['authorid'] ?? 0);

// --- Fetch Author Info ---
$author = null;
if ($stmt = mysqli_prepare($db_connection, "SELECT authorid, author_name, details, picture_url FROM tblauthors WHERE authorid = ? LIMIT 1")) {
    mysqli_stmt_bind_param($stmt, 'i', $authorId);
    mysqli_stmt_execute($stmt);
    $res = mysqli_stmt_get_result($stmt);
    $author = mysqli_fetch_assoc($res);
    mysqli_stmt_close($stmt);
}

if (!$author) {
    http_response_code(404);
    die('Author not found.');
}

// --- Count books ---
$totalBooks = 0;
if ($stmt = mysqli_prepare($db_connection, "SELECT COUNT(*) AS total FROM tblbooks WHERE authorid = ?")) {
    mysqli_stmt_bind_param($stmt, 'i', $authorId);
    mysqli_stmt_execute($stmt);
    $res = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($res);
    $totalBooks = (int)($row['total'] ?? 0);
    mysqli_stmt_close($stmt);
}

// --- Fetch Books ---
$books = [];
if ($stmt = mysqli_prepare(
    $db_connection,
    "SELECT 
        c.id,
        c.title,
        c.description,
        c.published_date,
        c.pages,
        c.isbn,
        c.publisher,
        c.language,
        c.picture_url,
        c.rating,
        c.review_count,
        c.link,
        g.name  AS genre_name,
        cat.name AS category_name
     FROM tblbooks c
     LEFT JOIN tblgenres g    ON c.genreid = g.genreid
     LEFT JOIN tblcategories cat ON g.category_id = cat.catid
     WHERE c.authorid = ?
     ORDER BY c.created_at DESC"
)) {
    mysqli_stmt_bind_param($stmt, 'i', $authorId);
    mysqli_stmt_execute($stmt);
    $res = mysqli_stmt_get_result($stmt);
    while ($row = mysqli_fetch_assoc($res)) {
        $books[] = $row;
    }
    mysqli_stmt_close($stmt);
}

// Utility: short text
function excerpt($text, $limit = 160)
{
    $text = trim((string)$text);
    $text = strip_tags($text);
    if (function_exists('mb_strimwidth')) {
        return mb_strimwidth($text, 0, $limit, '…', 'UTF-8');
    }
    return (strlen($text) > $limit) ? substr($text, 0, $limit - 2) . '…' : $text;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Author Info — <?= e($author['author_name']) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .avatar {
            width: 120px;
            height: 120px;
            object-fit: cover;
        }

        .book-cover {
            height: 200px;
            object-fit: cover;
        }

        .badge-soft {
            background: #eef2ff;
            color: #3730a3;
        }
    </style>
</head>

<body class="bg-light">

    <div class="container py-4">


        <!-- Author Header -->
        <div class="card shadow-sm mb-4">
            <div class="card-body">
                <div class="d-flex align-items-start gap-3">
                    <img src="../admin/pages/picture_author/<?= e($author['picture_url'] ?: 'default-avatar.png') ?>" alt="Author" class="rounded avatar border">
                    <div class="flex-grow-1">
                        <div class="d-flex justify-content-between">
                            <h2 class="h4 mb-1"><?= e($author['author_name']) ?></h2>
                            <div class="d-flex align-items-center gap-2">
                                <span class="text-muted small me-2"><?= $totalBooks ?> books</span>
                                </div>
                        </div>
                        <?php if (!empty($author['details'])): ?>
                            <p class="text-muted mb-0 mt-2"><?= nl2br(e($author['details'])) ?></p>
                        <?php else: ?>
                            <p class="text-muted mb-0 mt-2 fst-italic">No details provided.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>



        <?php
        // Optional in-page search (client-side would also work, but here's server-side quick filter)
        $q = trim($_GET['q'] ?? '');
        $filtered = $books;
        if ($q !== '') {
            $filtered = array_values(array_filter($books, function ($b) use ($q) {
                return stripos($b['title'] ?? '', $q) !== false || stripos($b['description'] ?? '', $q) !== false;
            }));
        }
        ?>

        <?php if (empty($filtered)): ?>
            <div class="alert alert-light border d-flex align-items-center" role="alert">
                <div>No books found<?= $q ? ' for "' . e($q) . '"' : '' ?>.</div>
            </div>
        <?php else: ?>
            <div class="row">
                <?php foreach ($filtered as $book): ?>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm">
                            <img src="../admin/pages/picture_book/<?= e($book['picture_url'] ?: 'default-book.png') ?>" class="card-img-top book-cover" alt="Book cover">
                            <div class="card-body">
                                <h5 class="card-title mb-1"><?= e($book['title']) ?></h5>
                                <div class="mb-2">
                                    <?php if (!empty($book['genre_name'])): ?>
                                        <span class="badge badge-soft me-1"><?= e($book['genre_name']) ?></span>
                                    <?php endif; ?>
                                    <?php if (!empty($book['category_name'])): ?>
                                        <span class="badge bg-light text-secondary border"><?= e($book['category_name']) ?></span>
                                    <?php endif; ?>
                                </div>
                                <p class="card-text text-muted small mb-2"><?= e(excerpt($book['description'] ?? '')) ?></p>
                                <ul class="list-unstyled small text-muted mb-0">
                                    <?php if (!empty($book['published_date'])): ?>
                                        <li>Published: <?= e($book['published_date']) ?></li>
                                    <?php endif; ?>
                                    <?php if (!empty($book['publisher'])): ?>
                                        <li>Publisher: <?= e($book['publisher']) ?></li>
                                    <?php endif; ?>
                                    <?php if (!empty($book['language'])): ?>
                                        <li>Language: <?= e($book['language']) ?></li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                            <div class="card-footer d-flex justify-content-between align-items-center">
                                <small class="text-muted">Rating: <?= e($book['rating']) ?> (<?= (int)$book['review_count'] ?>)</small>
                                <?php if (!empty($book['link'])): ?>
                                    <!-- <a href="<?= e($book['link']) ?>" target="_blank" class="btn btn-sm btn-outline-primary">Read More</a> -->
                                <?php else: ?>
                                    <a href="book.php?id=<?= (int)$book['id'] ?>" class="btn btn-sm btn-outline-secondary">Details</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php
if (file_exists('../admin/includes/systemconfig.php')) {
    include_once('../admin/includes/systemconfig.php');
}

function e($v)
{
    return htmlspecialchars((string)$v, ENT_QUOTES, 'UTF-8');
}

if (!isset($_GET['bookid'])) {
    http_response_code(400);
    die('Book not specified.');
}

$bookId = (int)($_GET['bookid'] ?? 0);

// Fetch book info
$book = null;
if ($stmt = mysqli_prepare($db_connection, "
    SELECT 
        b.id,
        b.title,
        b.description,
        b.published_date,
        b.pages,
        b.isbn,
        b.publisher,
        b.language,
        b.picture_url,
        b.rating,
        b.review_count,
        b.link,
        b.reviewer,
        b.review,
        g.name AS genre_name,
        c.name AS category_name,
        a.author_name
    FROM tblbooks b
    LEFT JOIN tblgenres g ON b.genreid = g.genreid
    LEFT JOIN tblcategories c ON g.category_id = c.catid
    LEFT JOIN tblauthors a ON b.authorid = a.authorid
    WHERE b.id = ?
    LIMIT 1
")) {
    mysqli_stmt_bind_param($stmt, 'i', $bookId);
    mysqli_stmt_execute($stmt);
    $res = mysqli_stmt_get_result($stmt);
    $book = mysqli_fetch_assoc($res);
    mysqli_stmt_close($stmt);
}

if (!$book) {
    http_response_code(404);
    die('Book not found.');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= e($book['title']) ?> - Book Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background-color: #f9f9fb;
        }

        .book-hero {
            position: relative;
            height: 350px;
            background: url('../admin/pages/picture_book/<?= e($book['picture_url'] ?: "default-book.png") ?>') center/cover no-repeat;
            border-radius: 10px;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.45);
            border-radius: 10px;
        }

        .hero-text {
            position: absolute;
            bottom: 20px;
            left: 20px;
            color: #fff;
        }

        .hero-text h1 {
            font-size: 2rem;
            font-weight: bold;
        }

        .book-details {
            margin-top: -80px;
            /* pull up card */
        }

        .book-cover {
            max-width: 220px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .rating {
            color: #f4c150;
        }
    </style>
</head>

<body>
    <div class="container py-4">

        <!-- Back -->
        <a href="book-catalog" class="btn btn-sm btn-outline-secondary mb-3">
            <i class="bi bi-arrow-left"></i> Back to Catalog
        </a>

        <!-- Hero -->
        <div class="book-hero mb-4">
            <div class="overlay"></div>
            <div class="hero-text">
                <h1><?= e($book['title']) ?></h1>
                <p class="mb-0">By <?= e($book['author_name']) ?></p>
            </div>
        </div>

        <!-- Book Info Section -->
        <div class="card shadow-sm book-details p-4">
            <div class="row">
                <!-- Cover -->
                <div class="col-md-4 text-center">
                    <img src="../admin/pages/picture_book/<?= e($book['picture_url'] ?: 'default-book.png') ?>"
                        alt="Cover" class="book-cover img-fluid">
                </div>

                <!-- Details -->
                <div class="col-md-8">
                    <h2 class="mb-3"><?= e($book['title']) ?></h2>
                    <p><em>by <?= e($book['author_name']) ?></em></p>

                    <p><?= nl2br(e($book['description'])) ?></p>

                    <ul class="list-unstyled">
                        <?php if ($book['genre_name']): ?><li><strong>Genre:</strong> <?= e($book['genre_name']) ?></li><?php endif; ?>
                        <?php if ($book['category_name']): ?><li><strong>Category:</strong> <?= e($book['category_name']) ?></li><?php endif; ?>
                        <?php if ($book['published_date']): ?><li><strong>Published:</strong> <?= e($book['published_date']) ?></li><?php endif; ?>
                        <?php if ($book['pages']): ?><li><strong>Pages:</strong> <?= (int)$book['pages'] ?></li><?php endif; ?>
                        <?php if ($book['isbn']): ?><li><strong>ISBN:</strong> <?= e($book['isbn']) ?></li><?php endif; ?>
                        <?php if ($book['publisher']): ?><li><strong>Publisher:</strong> <?= e($book['publisher']) ?></li><?php endif; ?>
                        <li><strong>Language:</strong> <?= e($book['language']) ?></li>
                        <li><strong>Rating:</strong>
                            <span class="rating">★</span> <?= e($book['rating']) ?> (<?= (int)$book['review_count'] ?> reviews)
                        </li>
                    </ul>

                    <!-- Action Buttons -->
                    <div class="mt-3 d-flex gap-2">
                        <a href="<?= e($book['link'] ?: '#') ?>" target="_blank" class="btn btn-primary">
                            <i class="bi bi-cart"></i> Buy Now
                        </a>
                        <a href="book-catalog" class="btn btn-outline-secondary">Back</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Reviews -->
        <div class="card shadow-sm mt-4">
            <div class="card-header bg-white">
                <h5 class="mb-0">Reviews</h5>
            </div>
            <div class="card-body">
                <?php if (!empty($book['review'])): ?>
                    <blockquote class="blockquote">
                        <p><?= nl2br(e($book['review'])) ?></p>
                        <footer class="blockquote-footer"><?= e($book['reviewer'] ?: 'Anonymous') ?></footer>
                    </blockquote>
                <?php else: ?>
                    <p class="text-muted fst-italic">No reviews available.</p>
                <?php endif; ?>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
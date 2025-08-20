<?php
if (session_id() == '') {
    session_start();
}
if (isset($_SESSION['adminid'])) {
    if (file_exists('systemconfig.php')) include_once('systemconfig.php');
    if (file_exists('includes/systemconfig.php')) include_once('includes/systemconfig.php');
    if (file_exists('../includes/systemconfig.php')) include_once('../includes/systemconfig.php');
} else {
    header('location: ./');
    exit(0);
}

$bookId = isset($_GET['bbbb']) ? (int)$_GET['bbbb'] : 0;
if ($bookId <= 0) {
    echo '<div style="padding:16px; color:#b91c1c; font-family:Arial;">Invalid or missing book ID.</div>';
    exit;
}

/*
  JOIN map:
  - a = tblgenres         (a.category_id -> b.catid)
  - b = tblcategories
  - c = tblbooks          (c.genreid -> a.genreid, c.authorid -> d.authorid)
  - d = tblauthors
*/
$sql = "
  SELECT 
    c.id            AS book_id,
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
    a.genreid,
    a.name          AS genre_name,
    b.name          AS catname,
    d.authorid,
    d.author_name,
    c.created_at,
    c.link
  FROM tblbooks c
  JOIN tblgenres a      ON c.genreid = a.genreid
  JOIN tblcategories b  ON a.category_id = b.catid
  LEFT JOIN tblauthors d ON d.authorid = c.authorid
  WHERE c.id = $bookId
  LIMIT 1
";

$res = mysqli_query($db_connection, $sql);
if (!$res || mysqli_num_rows($res) === 0) {
    echo '<div style="padding:16px; color:#b91c1c; font-family:Arial;">Book not found.</div>';
    exit;
}
$book = mysqli_fetch_assoc($res);

// helpers for safe output
function h($v)
{
    return htmlspecialchars((string)$v ?? '', ENT_QUOTES, 'UTF-8');
}
function valOrNA($v)
{
    $v = trim((string)$v);
    return $v === '' ? 'N/A' : h($v);
}
?>
<div style="display:flex; gap:16px; align-items:flex-start; font-family:Arial, sans-serif; padding:16px; max-width:980px;">
    <div style="flex:0 0 220px;">
        <?php if (!empty($book['picture_url'])): ?>
            <img src="./picture_book/<?php echo h($book['picture_url']); ?>" alt="Cover"
                style="width:220px; height:auto; border-radius:6px; box-shadow:0 2px 8px rgba(0,0,0,.15); object-fit:cover;">
        <?php else: ?>
            <div style="width:220px; aspect-ratio:3/4; background:#f3f4f6; border:1px dashed #cbd5e1; border-radius:6px; display:flex; align-items:center; justify-content:center; color:#64748b;">
                No Cover
            </div>
        <?php endif; ?>
    </div>

    <div style="flex:1 1 auto;">
        <h2 style="margin:0 0 6px 0; color:#111827; font-size:22px;"><?php echo h($book['title']); ?></h2>
        <div style="color:#1f2937; font-size:13px; margin-bottom:12px;">
            <strong>Author:</strong> <?php echo valOrNA($book['author_name']); ?> &nbsp;•&nbsp;
            <strong>Genre:</strong> <?php echo h($book['genre_name']); ?> &nbsp;•&nbsp;
            <strong>Category:</strong> <?php echo h($book['catname']); ?>
        </div>

        <table style="width:100%; border-collapse:collapse; font-size:12px; background:#fff;">
            <tbody>
                <tr>
                    <td style="padding:6px 8px; color:#4b5563; width:160px;">Published Date</td>
                    <td style="padding:6px 8px;"><?php echo valOrNA($book['published_date']); ?></td>
                </tr>
                <tr>
                    <td style="padding:6px 8px; color:#4b5563;">Pages</td>
                    <td style="padding:6px 8px;"><?php echo $book['pages'] !== null ? h($book['pages']) : 'N/A'; ?></td>
                </tr>
                <tr>
                    <td style="padding:6px 8px; color:#4b5563;">ISBN</td>
                    <td style="padding:6px 8px;"><?php echo valOrNA($book['isbn']); ?></td>
                </tr>
                <tr>
                    <td style="padding:6px 8px; color:#4b5563;">Publisher</td>
                    <td style="padding:6px 8px;"><?php echo valOrNA($book['publisher']); ?></td>
                </tr>
                <tr>
                    <td style="padding:6px 8px; color:#4b5563;">Language</td>
                    <td style="padding:6px 8px;"><?php echo valOrNA($book['language']); ?></td>
                </tr>
                <tr>
                    <td style="padding:6px 8px; color:#4b5563;">Rating</td>
                    <td style="padding:6px 8px;"><?php echo $book['rating'] !== null ? h($book['rating']) : 'N/A'; ?></td>
                </tr>
                <tr>
                    <td style="padding:6px 8px; color:#4b5563;">Review Count</td>
                    <td style="padding:6px 8px;"><?php echo $book['review_count'] !== null ? h($book['review_count']) : 'N/A'; ?></td>
                </tr>
                <tr>
                    <td style="padding:6px 8px; color:#4b5563;">Link</td>
                    <td style="padding:6px 8px;"><?php echo $book['link'] !== null ? h($book['link']) : 'N/A'; ?></td>
                </tr>
            </tbody>
        </table>

        <div style="margin-top:14px;">
            <div style="font-weight:bold; font-size:13px; color:#111827; margin-bottom:6px;">Description</div>
            <div style="font-size:13px; color:#374151; line-height:1.5;">
                <?php echo nl2br(h($book['description'] ?? '')); ?>
            </div>
        </div>
    </div>
</div>
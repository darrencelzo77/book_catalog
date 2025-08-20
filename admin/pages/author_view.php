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

$authorId = isset($_GET['bbbb']) ? (int)$_GET['bbbb'] : 0;
if ($authorId <= 0) {
    echo '<div style="padding:16px; color:#b91c1c; font-family:Arial;">Invalid or missing author ID.</div>';
    exit;
}

$sql = "
  SELECT 
    authorid, author_name, details, picture_url 
  FROM tblauthors
  WHERE authorid = $authorId
  LIMIT 1
";

$res = mysqli_query($db_connection, $sql);
if (!$res || mysqli_num_rows($res) === 0) {
    echo '<div style="padding:16px; color:#b91c1c; font-family:Arial;">Author not found.</div>';
    exit;
}
$author = mysqli_fetch_assoc($res);

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

<div style="display:flex; gap:16px; align-items:flex-start; font-family:Arial, sans-serif; padding:16px; max-width:780px;">
    <div style="flex:0 0 180px;">
        <?php if (!empty($author['picture_url'])): ?>
            <img src="picture_author/<?php echo h($author['picture_url']); ?>" alt="Author"
                style="width:180px; height:auto; border-radius:6px; box-shadow:0 2px 8px rgba(0,0,0,.15); object-fit:cover;">
        <?php else: ?>
            <div style="width:180px; aspect-ratio:3/4; background:#f3f4f6; border:1px dashed #cbd5e1; border-radius:6px; display:flex; align-items:center; justify-content:center; color:#64748b;">
                No Photo
            </div>
        <?php endif; ?>
    </div>

    <div style="flex:1 1 auto;">
        <h2 style="margin:0 0 6px 0; color:#111827; font-size:22px;"><?php echo h($author['author_name']); ?></h2>

        <div style="margin-top:12px;">
            <div style="font-weight:bold; font-size:13px; color:#111827; margin-bottom:6px;">Details</div>
            <div style="font-size:13px; color:#374151; line-height:1.5;">
                <?php echo nl2br(valOrNA($author['details'])); ?>
            </div>
        </div>
    </div>
</div>
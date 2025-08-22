<?php
if (session_id() == '') {
  session_start();
}
if (isset($_SESSION['adminid'])) {
  if (file_exists('systemconfig.php')) {
    include_once('systemconfig.php');
  }
  if (file_exists('includes/systemconfig.php')) {
    include_once('includes/systemconfig.php');
  }
  if (file_exists('../includes/systemconfig.php')) {
    include_once('../includes/systemconfig.php');
  }
} else {
  header('location: ./');
  exit(0);
}

// SELECT from tblmanuscripts
$result = mysqli_query($db_connection, "
  SELECT 
    id, first_name, last_name, email_address, phone_number, 
    book_title, word_count, genre, synopsis, publications, platform, submitted_at 
  FROM tblmanuscripts
");
function e($v)
{
  return htmlspecialchars((string)$v, ENT_QUOTES, 'UTF-8');
}
?>
<h1 style="color:#1e40ae; font-family:Arial, sans-serif; font-size:22px; margin:0;">Submissions</h1>
   
<br>
<div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:15px; flex-wrap:wrap; gap:10px;">

  <!-- Left: Title + Search -->
  <div style="display:flex; align-items:center; gap:10px; flex-wrap:wrap;">
     <input
      type="text"
      id="searchInput"
      placeholder="Search submissions..."
      onkeyup="searchTable()"
      style="padding:6px 10px; font-size:12px; border:1px solid #ccc; border-radius:4px; width:220px;">
  </div>

</div>


<table id="dataTable" style="font-size:11px; width:100%; border-collapse:collapse; margin-top:10px; background:#fff; box-shadow:0 2px 8px rgba(0,0,0,.05); font-family:Arial, sans-serif;">
  <thead style="background:#1e40ae; color:#fff;">
    <tr>
      <th style="padding:8px 10px; text-align:left;">ID</th>
      <th style="padding:8px 10px; text-align:left;">Author</th>
      <th style="padding:8px 10px; text-align:left;">Email</th>
      <th style="padding:8px 10px; text-align:left;">Phone</th>
      <th style="padding:8px 10px; text-align:left;">Book Title</th>
      <th style="padding:8px 10px; text-align:left;">Word Count</th>
      <th style="padding:8px 10px; text-align:left;">Genre</th>
      <th style="padding:8px 10px; text-align:left;">Synopsis & Platform</th>
      <th style="padding:8px 10px; text-align:left;">Submitted</th>
    </tr>
  </thead>
  <tbody>
    <?php if ($result && mysqli_num_rows($result) > 0): ?>
      <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <tr style="border-bottom:1px solid #ddd;">
          <td style="padding:8px 10px;"><?php echo $row['id']; ?></td>
          <td style="padding:8px 10px;"><?php echo e($row['first_name'] . ' ' . $row['last_name']); ?></td>
          <td style="padding:8px 10px;"><?php echo e($row['email_address']); ?></td>
          <td style="padding:8px 10px;"><?php echo e($row['phone_number']); ?></td>
          <td style="padding:8px 10px;"><?php echo e($row['book_title']); ?></td>
          <td style="padding:8px 10px;"><?php echo number_format((int)$row['word_count']); ?></td>
          <td style="padding:8px 10px;"><?php echo e($row['genre']); ?></td>
          <td style="padding:8px 10px;">
            <?php
            $syn = e($row['synopsis']);
            $plat = e($row['platform']);
            $combo = trim($syn . ($plat ? ' — ' . $plat : ''));
            $limit = 80;
            $short = mb_substr($combo, 0, $limit) . (mb_strlen($combo) > $limit ? '...' : '');
            ?>
            <a href="javascript:void(0);"
              onclick="openCustom('pages/submissions-info.php?id=<?php echo (int)$row['id']; ?>', 700, 560);"
              title="View full submission">
              <?php echo $short; ?> <em style="color:#1e40ae;">(view)</em>
            </a>
          </td>
          <td style="padding:8px 10px;"><?php echo e($row['submitted_at']); ?></td>
        </tr>
      <?php endwhile; ?>
    <?php else: ?>
      <tr>
        <td colspan="9" style="text-align:center; padding:12px; color:#555;">No manuscripts found.</td>
      </tr>
    <?php endif; ?>
  </tbody>
</table>

<script>
  // 🔍 Client-side search function
</script>
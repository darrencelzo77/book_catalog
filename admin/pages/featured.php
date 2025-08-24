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

// Update
if (isset($_POST['update_author']) && isset($_POST['authorid']) && isset($_POST['status'])) {
  $authorid = mysqli_real_escape_string($db_connection, $_POST['authorid']);
  $status   = ($_POST['status'] == 1) ? 1 : 0;

  mysqli_query($db_connection, "UPDATE tblauthors SET is_featured='$status' WHERE authorid='$authorid'");
}



$result = mysqli_query($db_connection, "SELECT authorid, author_name, details, is_featured FROM tblauthors");
?>

<h1 style="color:#1e40ae; font-family:Arial, sans-serif; font-size:22px; margin:0;">
  Featured Book Authors
</h1>
<br>

<table style="font-size:11px; width:100%; border-collapse:collapse; margin-top:10px; background:#fff; box-shadow:0 2px 8px rgba(0,0,0,.05); font-family:Arial, sans-serif;">
  <thead style="background:#1e40ae; color:#fff;">
    <tr>
      <th style="padding:8px 10px; text-align:left;">ID</th>
      <th style="padding:8px 10px; text-align:left;">Author Name</th>
      <th style="padding:8px 10px; text-align:left;">Details</th>
      <th style="padding:8px 10px; text-align:left;">Status</th>
      <th style="padding:8px 10px; text-align:left;">Action</th>
    </tr>
  </thead>

  <tbody>
    <?php if ($result && mysqli_num_rows($result) > 0): ?>
      <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <tr style="border-bottom:1px solid #ddd;">
          <td style="padding:8px 10px;"><?php echo $row['authorid']; ?></td>
          <td style="padding:8px 10px;"><?php echo $row['author_name']; ?></td>
          <td style="padding:8px 10px;"><?php echo $row['details']; ?></td>

          <!-- Status column -->
          <td style="padding:8px 10px;">
            <?php if ($row['is_featured'] == 1): ?>
              <span style="color:green; font-weight:bold;">
                <i class="fas fa-check-circle"></i> Featured
              </span>
            <?php else: ?>
              <span style="color:red; font-weight:bold;">
                <i class="fas fa-times-circle"></i> Inactive
              </span>
            <?php endif; ?>
          </td>

          <!-- Actions -->
          <td style="padding:8px 10px;">
            <a onclick="modify_status(<?php echo $row['authorid']; ?>, 1);" href="javascript:void(0)" style="margin-right:12px; color:#1e40af;">
              <i class="fas fa-star"></i> Set as Featured
            </a>

            <a onclick="modify_status(<?php echo $row['authorid']; ?>, 0);" href="javascript:void(0)" style="color:#dc2626;">
              <i class="fas fa-ban"></i> Set as Inactive
            </a>
          </td>
        </tr>
      <?php endwhile; ?>
    <?php else: ?>
      <tr>
        <td colspan="5" style="text-align:center; padding:12px; color:#555;">No authors found.</td>
      </tr>
    <?php endif; ?>
  </tbody>

</table>
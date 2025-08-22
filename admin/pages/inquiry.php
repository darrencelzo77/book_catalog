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

// ✅ Select inquiries
$result = mysqli_query($db_connection, "SELECT id, inquiry_type, fullname, emailaddress, phonenumber, subject, message, created FROM tblinquiry");
?>

<div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:15px; flex-wrap:wrap; gap:10px;">
  <h1 style="color:#1e40ae; font-family:Arial, sans-serif; font-size:22px; margin:0;">Inquiry</h1>

  <!-- Search box -->
  <input type="text" id="searchManuscript" placeholder="Search inquiry..."
    onkeyup="searchManuscript()" 
    style="padding:6px 10px; font-size:12px; border:1px solid #ccc; border-radius:4px; width:220px;">
</div>

<table style="font-size:11px; width:100%; border-collapse:collapse; margin-top:10px; background:#fff; box-shadow:0 2px 8px rgba(0,0,0,.05); font-family:Arial, sans-serif;">
  <thead style="background:#1e40ae; color:#fff;">
    <tr>
      <th style="padding:8px 10px; text-align:left;">ID</th>
      <th style="padding:8px 10px; text-align:left;">Type</th>
      <th style="padding:8px 10px; text-align:left;">Full Name</th>
      <th style="padding:8px 10px; text-align:left;">Email</th>
      <th style="padding:8px 10px; text-align:left;">Phone</th>
      <th style="padding:8px 10px; text-align:left;">Subject</th>
      <th style="padding:8px 10px; text-align:left;">Message</th>
      <th style="padding:8px 10px; text-align:left;">Timestamp</th>
    </tr>
  </thead>
  <tbody>
    <?php if ($result && mysqli_num_rows($result) > 0): ?>
      <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <tr style="border-bottom:1px solid #ddd;">
          <td style="padding:8px 10px;"><?php echo $row['id']; ?></td>
          <td style="padding:8px 10px;"><?php echo htmlspecialchars($row['inquiry_type']); ?></td>
          <td style="padding:8px 10px;"><?php echo htmlspecialchars($row['fullname']); ?></td>
          <td style="padding:8px 10px;"><?php echo htmlspecialchars($row['emailaddress']); ?></td>
          <td style="padding:8px 10px;"><?php echo htmlspecialchars($row['phonenumber']); ?></td>
          <td style="padding:8px 10px;"><?php echo htmlspecialchars($row['subject']); ?></td>
          <td style="padding:8px 10px;">
            <a href="javascript:void();" onclick="openCustom('pages/inquiry-info?id=<?php echo $row['id']; ?>',500,500);">
              <?php
              $msg = htmlspecialchars($row['message']);
              echo nl2br(substr($msg, 0, 50)) . (strlen($msg) > 50 ? '...' : '');
              ?>
              <em style="color:#1e40ae;">(view)</em>
            </a>
          </td>
          <td style="padding:8px 10px;"><?php echo htmlspecialchars($row['created']); ?></td>

        </tr>
      <?php endwhile; ?>
    <?php else: ?>
      <tr>
        <td colspan="7" style="text-align:center; padding:12px; color:#555;">No inquiries found.</td>
      </tr>
    <?php endif; ?>
  </tbody>
</table>
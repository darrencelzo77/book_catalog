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

/* ADD (kept minimal—no escaping, like your authors example) */
if (isset($_POST['add_cat'])) {
  $name = isset($_POST['name']) ? $_POST['name'] : '';
  mysqli_query($db_connection, "INSERT INTO tblcategories (name) VALUES ('$name')");
}

/* DELETE */
if (isset($_POST['delete_cat'])) {
  $catid = isset($_POST['catid']) ? $_POST['catid'] : '';
  mysqli_query($db_connection, "DELETE FROM tblcategories WHERE catid='$catid'");
}

/* UPDATE */
if (isset($_POST['update_cat'])) {
  $catid = isset($_POST['catid']) ? $_POST['catid'] : '';
  $name  = isset($_POST['name']) ? $_POST['name'] : '';
  mysqli_query($db_connection, "UPDATE tblcategories SET name='$name' WHERE catid='$catid'");
}



$result = mysqli_query($db_connection, "SELECT catid, name FROM tblcategories");
?>

<div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:15px; flex-wrap:wrap; gap:10px;">
  <h1 style="color:#1e40ae; font-family:Arial, sans-serif; font-size:22px; margin:0;">Categories</h1>

  <!-- Inline add (no page reload) -->
  <form onsubmit="return false;" style="display:flex; align-items:center; gap:6px; flex-wrap:wrap;">
    <label style="font-size:12px; font-family:Arial;">Category:</label>
    <input type="text" id="category_name" required
      style="padding:4px 6px; font-size:12px; border:1px solid #ccc; border-radius:4px;">

    <a onclick="add_category();"
      style="background:#1e40ae; color:#fff; padding:6px 12px; border-radius:4px; border:none; cursor:pointer; font-size:12px; font-weight:bold;">
      + Add
    </a>
  </form>
</div>

<table style="font-size:11px; width:100%; border-collapse:collapse; margin-top:10px; background:#fff; box-shadow:0 2px 8px rgba(0,0,0,.05); font-family:Arial, sans-serif;">
  <thead style="background:#1e40ae; color:#fff;">
    <tr>
      <th style="padding:8px 10px; text-align:left;">ID</th>
      <th style="padding:8px 10px; text-align:left;">Name</th>
      <th style="padding:8px 10px; text-align:left;">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php if ($result && mysqli_num_rows($result) > 0): ?>
      <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <tr style="border-bottom:1px solid #ddd;">
          <td style="padding:8px 10px;"><?php echo $row['catid']; ?></td>
          <td style="padding:8px 10px;"><?php echo $row['name']; ?></td>
          <td style="padding:8px 10px;">
            <!-- Inline edit/delete via JS -->
            <a href="javascript:void(0)"
              onclick="update_category(<?php echo $row['catid']; ?>);"
              style="background:#1e40ae; color:#fff; padding:6px 10px; border-radius:4px; text-decoration:none; font-size:14px; margin-right:6px; display:inline-block;">
              <i class="fas fa-edit"></i>
            </a>

            <a href="javascript:void(0)"
              onclick="delete_category(<?php echo $row['catid']; ?>);"
              style="background:#dc2626; color:#fff; padding:6px 10px; border-radius:4px; text-decoration:none; font-size:14px; display:inline-block;">
              <i class="fas fa-trash"></i>
            </a>

          </td>
        </tr>
      <?php endwhile; ?>
    <?php else: ?>
      <tr>
        <td colspan="3" style="text-align:center; padding:12px; color:#555;">No categories found.</td>
      </tr>
    <?php endif; ?>
  </tbody>
</table>
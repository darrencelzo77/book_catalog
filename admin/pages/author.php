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

// Delete
if (isset($_POST['delete'])) {
  $authorid = isset($_POST['authorid']) ? $_POST['authorid'] : '';
  mysqli_query($db_connection, "DELETE FROM tblauthors WHERE authorid='$authorid'");
}

// Update
if (isset($_POST['update'])) {
  $authorid    = isset($_POST['authorid']) ? $_POST['authorid'] : '';
  $author_name = isset($_POST['author_name']) ? $_POST['author_name'] : '';
  $details     = isset($_POST['details']) ? $_POST['details'] : '';
  mysqli_query($db_connection, "UPDATE tblauthors SET author_name='$author_name', details='$details' WHERE authorid='$authorid'");
}


// Insert (kept simple, per your request: mysqli procedural, no extra security layers)
if (isset($_POST['add'])) {
  $author_name = isset($_POST['author_name']) ? $_POST['author_name'] : '';
  $details     = isset($_POST['details']) ? $_POST['details'] : '';
  // bare insert (no escaping, as requested)
  mysqli_query($db_connection, "INSERT INTO tblauthors (author_name, details) VALUES ('$author_name', '$details')");
}

$result = mysqli_query($db_connection, "SELECT authorid, author_name, details FROM tblauthors");
?>

<div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:15px; flex-wrap:wrap; gap:10px;">
  <h1 style="color:#1e40ae; font-family:Arial, sans-serif; font-size:22px; margin:0;">Book Authors</h1>

  <!-- Inline add form -->
  <form style="display:flex; align-items:center; gap:6px; flex-wrap:wrap;">
    <label style="font-size:12px; font-family:Arial;">Author Name:</label>
    <input type="text" id="author_name" required
      style="padding:4px 6px; font-size:12px; border:1px solid #ccc; border-radius:4px;">

    <label style="font-size:12px; font-family:Arial;">Details:</label>
    <input type="text" id="details"
      style="padding:4px 6px; font-size:12px; border:1px solid #ccc; border-radius:4px; width:180px;">

    <a onclick="add_author();"
      style="background:#1e40ae; color:#fff; padding:6px 12px; border-radius:4px; border:none; cursor:pointer; font-size:12px; font-weight:bold;">
      + Add
    </a>
</div>

<table style="font-size:11px; width:100%; border-collapse:collapse; margin-top:10px; background:#fff; box-shadow:0 2px 8px rgba(0,0,0,.05); font-family:Arial, sans-serif;">
  <thead style="background:#1e40ae; color:#fff;">
    <tr>
      <th style="padding:8px 10px; text-align:left;">ID</th>
      <th style="padding:8px 10px; text-align:left;">Author Name</th>
      <th style="padding:8px 10px; text-align:left;">Details</th>
      <th style="padding:8px 10px; text-align:left;">Upload</th>
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
          <td style="padding:8px 10px;">
            <form method="POST" enctype="multipart/form-data">
              <input type="hidden" name="authorId" value="<?php echo $row['authorid']; ?>" />
              <input type="file"
                name="authorFile"
                data-authorid="<?php echo $row['authorid']; ?>"
                onchange="uploadBookImageAuthor(this)" />

            </form>

            <!-- <form method="POST" enctype="multipart/form-data">
              <input type="hidden" name="book_id" value="<?php echo $row['book_id']; ?>" />
              <input type="file"
                name="picture_url"
                id="picture_url_<?php echo $row['book_id']; ?>"
                onchange="uploadBookImage(this)" />
            </form> -->
          </td>
          <td style="padding:8px 10px;">
            <a href="javascript:void(0)"
              onclick="openCustom('pages/author_view.php?bbbb=<?php echo $row['authorid']; ?>',700,400);"
              style="background:#2563eb; color:#fff; padding:6px 10px; border-radius:4px; text-decoration:none; font-size:14px; margin-right:6px; display:inline-block;">
              <i class="fas fa-eye"></i>
            </a>

            <a href="javascript:void(0);"
              onclick="update_author(<?php echo $row['authorid']; ?>);"
              style="background:#1e40ae; color:#fff; padding:6px 10px; border-radius:4px; text-decoration:none; font-size:14px; margin-right:6px; display:inline-block;">
              <i class="fas fa-edit"></i>
            </a>

            <a href="javascript:void(0);"
              onclick="delete_author(<?php echo $row['authorid']; ?>);"
              style="background:#dc2626; color:#fff; padding:6px 10px; border-radius:4px; text-decoration:none; font-size:14px; display:inline-block;">
              <i class="fas fa-trash"></i>
            </a>

          </td>
        </tr>
      <?php endwhile; ?>
    <?php else: ?>
      <tr>
        <td colspan="4" style="text-align:center; padding:12px; color:#555;">No authors found.</td>
      </tr>
    <?php endif; ?>
  </tbody>
</table>
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


/* ADD GENRE */
if (isset($_POST['add_genre'])) {
  $name        = isset($_POST['name']) ? $_POST['name'] : '';
  $category_id = isset($_POST['category_id']) ? $_POST['category_id'] : '';
  mysqli_query($db_connection, "INSERT INTO tblgenres (name, category_id) VALUES ('$name', '$category_id')");
}

/* DELETE GENRE */
if (isset($_POST['delete_genre'])) {
  $genreid = isset($_POST['genreid']) ? $_POST['genreid'] : '';
  mysqli_query($db_connection, "DELETE FROM tblgenres WHERE genreid='$genreid'");
}

/* UPDATE GENRE */
if (isset($_POST['update_genre'])) {
  $genreid     = isset($_POST['update_genre']) ? $_POST['update_genre'] : '';
  $name        = isset($_POST['name']) ? $_POST['name'] : '';
  $category_id = isset($_POST['category_id']) ? $_POST['category_id'] : '';
  mysqli_query($db_connection, "UPDATE tblgenres SET name='$name', category_id='$category_id' WHERE genreid='$genreid'");
}
/* LIST (with category join) */
$result = mysqli_query(
  $db_connection,
  "SELECT a.genreid, a.category_id, a.name AS genre_name, b.name AS catname
   FROM tblgenres a
   JOIN tblcategories b ON a.category_id=b.catid
   ORDER BY a.genreid DESC"
);

/* fetch category options for form/selects */
$cats = mysqli_query($db_connection, "SELECT catid, name FROM tblcategories ORDER BY name");

?>

<?php

if (isset($_GET['genreid_get'])) {
  $name_g = GetValue('select name from tblgenres where genreid=' . $_GET['genreid_get']);
  $idx = GetValue('select category_id from tblgenres where genreid=' . $_GET['genreid_get']);
} else {
  $idx = 0;
}
?>

<div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:15px; flex-wrap:wrap; gap:10px;">
  <h1 style="color:#1e40ae; font-family:Arial, sans-serif; font-size:22px; margin:0;">Genres</h1>

  <!-- Inline add form (AJAX) -->
  <form onsubmit="return false;" style="display:flex; align-items:center; gap:6px; flex-wrap:wrap;">
    <label style="font-size:12px; font-family:Arial;">Genre:</label>
    <input type="text" id="genre_name" value="<?php echo $name_g; ?>" required
      style="padding:4px 6px; font-size:12px; border:1px solid #ccc; border-radius:4px;">

    <label style="font-size:12px; font-family:Arial;">Category:</label>
    <select id="catid" style="padding:4px 6px; font-size:12px; border:1px solid #ccc; border-radius:4px;">
      <option value="0" style="color: gray">Select Category</option>
      <?php while ($c = mysqli_fetch_assoc($cats)) {
        $selected = ($idx == $c['catid']) ? 'selected' : '';
      ?>
        <option value="<?php echo $c['catid']; ?>" <?php echo $selected; ?>>
          <?php echo htmlspecialchars($c['name']); ?>
        </option>
      <?php } ?>
    </select>


    <?php if (isset($_GET['genreid_get'])): ?>
      <a onclick="update_genre(<?php echo (int)$_GET['genreid_get']; ?>);"
        style="background:#1e40ae; color:#fff; padding:6px 12px; border-radius:4px; border:none; cursor:pointer; font-size:12px; font-weight:bold;">
        + Update
      </a>
    <?php else: ?>
      <a onclick="add_genre();"
        style="background:#1e40ae; color:#fff; padding:6px 12px; border-radius:4px; border:none; cursor:pointer; font-size:12px; font-weight:bold;">
        + Add
      </a>
    <?php endif; ?>





  </form>
</div>

<div style="width:100%; overflow-x:auto;">
  <table style="font-size:11px; min-width:520px; width:100%; border-collapse:collapse; margin-top:10px; background:#fff; box-shadow:0 2px 8px rgba(0,0,0,.05); font-family:Arial, sans-serif;">
    <thead style="background:#1e40ae; color:#fff;">
      <tr>
        <th style="padding:8px 10px; text-align:left;">ID</th>
        <th style="padding:8px 10px; text-align:left;">Genre</th>
        <th style="padding:8px 10px; text-align:left;">Category</th>
        <th style="padding:8px 10px; text-align:left;">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php if ($result && mysqli_num_rows($result) > 0): ?>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
          <tr id="genre-row-<?php echo $row['genreid']; ?>"
            data-genre-id="<?php echo $row['genreid']; ?>"
            data-genre-name="<?php echo htmlspecialchars($row['genre_name']); ?>"
            data-category-id="<?php echo $row['category_id']; ?>"
            style="border-bottom:1px solid #ddd;">
            <td style="padding:8px 10px;"><?php echo $row['genreid']; ?></td>
            <td class="cell-genre" style="padding:8px 10px;"><?php echo $row['genre_name']; ?></td>
            <td class="cell-catname" style="padding:8px 10px;"><?php echo $row['catname']; ?></td>
            <td style="padding:8px 10px;">
              <a href="javascript:void(0)"
                onclick="ajax_fn('pages/genre.php?genreid_get=<?php echo $row['genreid']; ?>', 'ultimate_content')"
                style="background:#1e40ae; color:#fff; padding:6px 10px; border-radius:4px; text-decoration:none; font-size:14px; margin-right:6px; display:inline-block;">
                <i class="fas fa-edit"></i>
              </a>

              <a href="javascript:void(0)"
                onclick="delete_genre(<?php echo $row['genreid']; ?>);"
                style="background:#dc2626; color:#fff; padding:6px 10px; border-radius:4px; text-decoration:none; font-size:14px; display:inline-block;">
                <i class="fas fa-trash"></i>
              </a>

            </td>
          </tr>
        <?php endwhile; ?>
      <?php else: ?>
        <tr>
          <td colspan="4" style="text-align:center; padding:12px; color:#555;">No genres found.</td>
        </tr>
      <?php endif; ?>
    </tbody>
  </table>
</div>
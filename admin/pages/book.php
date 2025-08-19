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

/*
  JOIN map:
  - a = tblgenres         (a.category_id -> b.catid)
  - b = tblcategories
  - c = tblbooks          (c.genreid -> a.genreid, c.authorid -> d.athorid)
  - d = tblauthors
*/
$result = mysqli_query(
    $db_connection,
    "SELECT 
      a.genreid,
      a.category_id,
      a.name AS genre_name,
      b.name AS catname,
      c.id AS book_id,
      c.title,
      d.author_name,
      c.description,
      c.published_date,
      c.pages,
      c.isbn,
      c.publisher,
      c.language,
      c.picture_url,
      c.rating,
      c.review_count,
      c.created_at
    FROM tblgenres a
    JOIN tblcategories b ON a.category_id = b.catid
    JOIN tblbooks c      ON c.genreid = a.genreid
    JOIN tblauthors d    ON d.authorid = c.authorid
    ORDER BY c.created_at DESC"
);


/* ADD BOOK (minimal: title + genreid required) */
if (isset($_POST['add_book'])) {
    $title   = isset($_POST['title']) ? $_POST['title'] : '';
    $genreid = isset($_POST['genreid']) ? $_POST['genreid'] : '0';
    $authorid = isset($_POST['authorid']) ? $_POST['authorid'] : '0';

    // minimal guard (you said to keep it simple)
    if ($title !== '' && $genreid !== '0') {
        // Adjust table name if yours differs (assumed "tblbooks")
        mysqli_query(
            $db_connection,
            "INSERT INTO tblbooks (title, genreid, authorid) VALUES ('$title', '$genreid', '$authorid')"
        );
    }

    // After insert, you typically re-run your SELECT and render the table below.
    // No redirect needed because your JS replaces #ultimate_content with this page's HTML.
}

?>


<?php

if (isset($_GET['bookid_get'])) {
    // $name_g = GetValue('select name from tblgenres where genreid=' . $_GET['genreid_get']);
    $genreid_ = GetValue('select genreid from tblbooks where id=' . $_GET['bookid_get']);
    $title_ = GetValue('select title from tblbooks where id=' . $_GET['bookid_get']);
    $authorid_ = GetValue('select authorid from tblbooks where id=' . $_GET['bookid_get']);
} else {
    $authorid_ = 0;
    $genreid_ = 0;
    $title_ = '';
}
?>
<div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:10px;">
    <h1 style="color:#1e40ae; font-family:Arial, sans-serif; font-size:25px; margin:0;">Books by Genre &amp; Category</h1>

    <!-- Inline add form (AJAX) -->
    <form onsubmit="return false;" style="display:flex; align-items:center; gap:6px; flex-wrap:wrap;">
        <label style="font-size:12px; font-family:Arial;">Title:</label>
        <input type="text" id="title" value="<?php echo $title_; ?>" required
            style="padding:4px 6px; font-size:12px; border:1px solid #ccc; border-radius:4px;">

        <label style="font-size:12px; font-family:Arial;">Category/Genre:</label>
        <select id="genreid" style="padding:4px 6px; font-size:12px; border:1px solid #ccc; border-radius:4px;">
            <option value="0" style="color: gray">Select Category</option>
            <?php
            $cats = mysqli_query($db_connection, "SELECT a.genreid, a.name, b.name as catname from tblgenres a, tblcategories b where a.category_id=b.catid  ORDER BY name");
            while ($c = mysqli_fetch_assoc($cats)) {
                $selected = ($genreid_ == $c['genreid']) ? 'selected' : '';
            ?>
                <option value="<?php echo $c['genreid']; ?>" <?php echo $selected; ?>>
                    Genre:&nbsp;<?php echo htmlspecialchars($c['name']); ?>&nbsp;&nbsp; (
                    <?php echo htmlspecialchars($c['catname']); ?> )
                </option>
            <?php } ?>
        </select>

        <label style="font-size:12px; font-family:Arial;">Author:</label>
        <select id="authorid" style="padding:4px 6px; font-size:12px; border:1px solid #ccc; border-radius:4px;">
            <option value="0" style="color: gray">Select Author</option>
            <?php
            $catss = mysqli_query($db_connection, "SELECT authorid, author_name from tblauthors ORDER BY author_name");
            while ($cc = mysqli_fetch_assoc($catss)) {
                $selected = ($authorid_ == $cc['authorid']) ? 'selected' : '';
            ?>
                <option value="<?php echo $cc['authorid']; ?>" <?php echo $selected; ?>>
                    <?php echo htmlspecialchars($cc['author_name']); ?>
                </option>
            <?php } ?>
        </select>



        <label style="font-size:12px; font-family:Arial;">Description:</label>
        <input type="text" id="descrpition" value="<?php echo $descrpition_; ?>" required
            style="padding:4px 6px; font-size:12px; border:1px solid #ccc; border-radius:4px;">

        <label style="font-size:12px; font-family:Arial;">Published Date:</label>
        <input type="date" id="published_date" value="<?php echo $published_date_; ?>" required
            style="padding:4px 6px; font-size:12px; border:1px solid #ccc; border-radius:4px;">

        <label style="font-size:12px; font-family:Arial;">Publisher:</label>
        <input type="text" id="publisher" value="<?php echo $publisher_; ?>" required
            style="padding:4px 6px; font-size:12px; border:1px solid #ccc; border-radius:4px;">

        <label style="font-size:12px; font-family:Arial;">Rating:</label>
        <input type="text" id="rating" value="<?php echo $rating_; ?>" required
            style="padding:4px 6px; font-size:12px; border:1px solid #ccc; border-radius:4px;">

        <label style="font-size:12px; font-family:Arial;">Review Count:</label>
        <input type="text" id="review_count" value="<?php echo $review_count_; ?>" required
            style="padding:4px 6px; font-size:12px; border:1px solid #ccc; border-radius:4px;">


        <label style="font-size:12px; font-family:Arial;">Pages:</label>
        <input type="text" id="pages" value="<?php echo $pages_; ?>" required
            style="padding:4px 6px; font-size:12px; border:1px solid #ccc; border-radius:4px;">

        <?php if (isset($_GET['bookid_get'])): ?>
            <a onclick="update_book(<?php echo (int)$_GET['bookid_get']; ?>);"
                style="background:#1e40ae; color:#fff; padding:6px 12px; border-radius:4px; border:none; cursor:pointer; font-size:12px; font-weight:bold;">
                + Update
            </a>
        <?php else: ?>
            <a onclick="add_book();"
                style="background:#1e40ae; color:#fff; padding:6px 12px; border-radius:4px; border:none; cursor:pointer; font-size:12px; font-weight:bold;">
                + Add
            </a>
        <?php endif; ?>
</div>

<div style="width:100%; overflow-x:auto;">
    <table style="font-size:11px; min-width:700px; width:100%; border-collapse:collapse; margin-top:10px; background:#fff; box-shadow:0 2px 8px rgba(0,0,0,.05); font-family:Arial, sans-serif;">
        <thead style="background:#1e40ae; color:#fff;">
            <tr>
                <th style="padding:8px 10px; text-align:left;">ID</th>
                <th style="padding:8px 10px; text-align:left;">Title</th>
                <th style="padding:8px 10px; text-align:left;">Author</th>
                <th style="padding:8px 10px; text-align:left;">Genre</th>
                <th style="padding:8px 10px; text-align:left;">Category</th>
                <th style="padding:8px 10px; text-align:left;">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($result && mysqli_num_rows($result) > 0): ?>
                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                    <tr style="border-bottom:1px solid #ddd;">
                        <td style="padding:8px 10px;"><?php echo $row['book_id']; ?></td>
                        <td style="padding:8px 10px;"><?php echo $row['title']; ?></td>
                        <td style="padding:8px 10px;"><?php echo $row['author_name']; ?></td>
                        <td style="padding:8px 10px;"><?php echo $row['genre_name']; ?></td>
                        <td style="padding:8px 10px;"><?php echo $row['catname']; ?></td>
                        <td style="padding:8px 10px;">
                            <a href="upload_photo.php?id=<?php echo $row['book_id']; ?>"
                                style="background:#1e40ae; color:#fff; padding:6px 12px; border-radius:4px; text-decoration:none; font-size:12px; font-weight:bold; margin-right:6px; display:inline-block;">
                                Upload Photo
                            </a>
                            <a href="view_book.php?id=<?php echo $row['book_id']; ?>"
                                style="background:#1e40ae; color:#fff; padding:6px 12px; border-radius:4px; text-decoration:none; font-size:12px; font-weight:bold; margin-right:6px; display:inline-block;">
                                View
                            </a>
                            <a href="javascript:void(0)" onclick="ajax_fn('pages/book.php?bookid_get=<?php echo $row['book_id']; ?>', 'ultimate_content')"
                                style="background:#1e40ae; color:#fff; padding:6px 12px; border-radius:4px; text-decoration:none; font-size:12px; font-weight:bold; margin-right:6px; display:inline-block;">
                                Edit
                            </a>
                            <a href="delete_book.php?id=<?php echo $row['book_id']; ?>"
                                style="background:#1e40ae; color:#fff; padding:6px 12px; border-radius:4px; text-decoration:none; font-size:12px; font-weight:bold; display:inline-block;">
                                Delete
                            </a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6" style="text-align:center; padding:12px; color:#555;">No records found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
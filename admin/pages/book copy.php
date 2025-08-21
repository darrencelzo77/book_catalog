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

if (isset($_POST['update_book'])) {
    $bookid         = isset($_POST['bookid']) ? $_POST['bookid'] : '';
    $title          = isset($_POST['title']) ? $_POST['title'] : '';
    $genreid        = isset($_POST['genreid']) ? $_POST['genreid'] : '0';
    $authorid       = isset($_POST['authorid']) ? $_POST['authorid'] : '0';
    $description    = isset($_POST['description']) ? $_POST['description'] : '';
    $published_date = isset($_POST['published_date']) ? $_POST['published_date'] : '';
    $publisher      = isset($_POST['publisher']) ? $_POST['publisher'] : '';
    $rating         = isset($_POST['rating']) ? $_POST['rating'] : '';
    $review_count   = isset($_POST['review_count']) ? $_POST['review_count'] : '';
    $pages          = isset($_POST['pages']) ? $_POST['pages'] : '';
    $link_          = isset($_POST['link_']) ? $_POST['link_'] : '';

    if ($bookid !== '' && $title !== '' && $genreid !== '0') {
        $authorid_sql     = ($authorid === '' || $authorid === '0') ? "NULL" : "'" . $authorid . "'";
        $pages_sql        = ($pages === '' ? "NULL" : (string) (int) $pages);
        $review_count_sql = ($review_count === '' ? "NULL" : (string) (int) $review_count);

        if ($rating === '') {
            $rating_sql = "NULL";
        } else {
            $r = (float)$rating;
            if ($r < 0) $r = 0;
            if ($r > 9.9) $r = 9.9;
            $rating_sql = "'" . number_format($r, 1, '.', '') . "'";
        }

        $published_date_sql = ($published_date === '' ? "NULL" : "'" . $published_date . "'");

        $sql = "
      UPDATE tblbooks SET
        genreid = '$genreid',
        title = '$title',
        authorid = $authorid_sql,
        description = '$description',
        published_date = $published_date_sql,
        pages = $pages_sql,
        publisher = '$publisher',
        rating = $rating_sql,
        review_count = $review_count_sql,
        link = '$link_'
      WHERE id = '$bookid'
    ";
        echo $sql;
        mysqli_query($db_connection, $sql);
    }
}

/* DELETE BOOK */
if (isset($_POST['delete_book'])) {
    $bookid = isset($_POST['bookid']) ? $_POST['bookid'] : '';
    if ($bookid !== '') {
        mysqli_query($db_connection, "DELETE FROM tblbooks WHERE id = '$bookid'");
    }
}



if (isset($_POST['add_book'])) {
    $title          = isset($_POST['title']) ? $_POST['title'] : '';
    $genreid        = isset($_POST['genreid']) ? $_POST['genreid'] : '0';
    $authorid       = isset($_POST['authorid']) ? $_POST['authorid'] : '0';
    $description    = isset($_POST['description']) ? $_POST['description'] : '';
    $published_date = isset($_POST['published_date']) ? $_POST['published_date'] : ''; // 'YYYY-MM-DD' or ''
    $publisher      = isset($_POST['publisher']) ? $_POST['publisher'] : '';
    $rating         = isset($_POST['rating']) ? $_POST['rating'] : '';
    $review_count   = isset($_POST['review_count']) ? $_POST['review_count'] : '';
    $pages          = isset($_POST['pages']) ? $_POST['pages'] : '';
    $link_          = isset($_POST['link_']) ? $_POST['link_'] : '';
    $isbn = GenerateRandomString(10);

    if ($title !== '' && $genreid !== '0') {
        // normalize numeric/nullable values
        $authorid_sql     = ($authorid === '' || $authorid === '0') ? "NULL" : "'" . $authorid . "'";
        $pages_sql        = ($pages === '' ? "NULL" : (string) (int) $pages);
        $review_count_sql = ($review_count === '' ? "NULL" : (string) (int) $review_count);

        // rating DECIMAL(2,1) -> allow up to 9.9; if empty => NULL
        if ($rating === '') {
            $rating_sql = "NULL";
        } else {
            $r = (float)$rating;
            if ($r < 0) $r = 0;
            if ($r > 9.9) $r = 9.9;
            // keep one decimal place
            $rating_sql = "'" . number_format($r, 1, '.', '') . "'";
        }

        // date or NULL
        $published_date_sql = ($published_date === '' ? "NULL" : "'" . $published_date . "'");

        // Build INSERT (keeping your minimal style; no escaping)
        $sql = "
      INSERT INTO tblbooks
        (genreid, title, authorid, description, published_date, pages, publisher, rating, review_count, isbn, link)
      VALUES
        ('$genreid', '$title', $authorid_sql, '$description', $published_date_sql, $pages_sql, '$publisher', $rating_sql, $review_count_sql, '$isbn', '$link_')
    ";

        mysqli_query($db_connection, $sql);
    }

    // After insert, fall through to your SELECT and render the refreshed list.
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
      c.created_at,
      c.link
    FROM tblgenres a
    JOIN tblcategories b ON a.category_id = b.catid
    JOIN tblbooks c      ON c.genreid = a.genreid
    JOIN tblauthors d    ON d.authorid = c.authorid
    ORDER BY c.created_at DESC"
);
?>


<?php

if (isset($_GET['bookid_get'])) {
    // $name_g = GetValue('select name from tblgenres where genreid=' . $_GET['genreid_get']);
    $genreid_ = GetValue('select genreid from tblbooks where id=' . $_GET['bookid_get']);
    $title_ = GetValue('select title from tblbooks where id=' . $_GET['bookid_get']);
    $authorid_ = GetValue('select authorid from tblbooks where id=' . $_GET['bookid_get']);

    $descrpition_ = GetValue('select description from tblbooks where id=' . $_GET['bookid_get']);
    $published_date_ = GetValue('select published_date from tblbooks where id=' . $_GET['bookid_get']);
    $publisher_ = GetValue('select publisher from tblbooks where id=' . $_GET['bookid_get']);
    $rating_ = GetValue('select rating from tblbooks where id=' . $_GET['bookid_get']);
    $review_count_ = GetValue('select review_count from tblbooks where id=' . $_GET['bookid_get']);
    $pages_ = GetValue('select pages from tblbooks where id=' . $_GET['bookid_get']);
    $link_ = GetValue('select link from tblbooks where id=' . $_GET['bookid_get']);
} else {
    $authorid_ = 0;
    $genreid_ = 0;
    $title_ = '';
    $link_ = '';
}
?>


<div class="form-header">
    <h1 class="form-title">Books by Genre &amp; Category</h1>
</div>

<form onsubmit="return false;" class="form-grid">
    <div class="form-field">
        <label for="title">Title:</label>
        <input type="text" id="title" value="<?php echo $title_; ?>" required>
    </div>

    <div class="form-field">
        <label for="genreid">Category/Genre:</label>
        <select id="genreid">
            <option value="0" style="color:gray">Select Category</option>
            <?php
            $cats = mysqli_query($db_connection, "SELECT a.genreid, a.name, b.name as catname FROM tblgenres a, tblcategories b WHERE a.category_id=b.catid ORDER BY a.name");
            while ($c = mysqli_fetch_assoc($cats)) {
                $selected = ($genreid_ == $c['genreid']) ? 'selected' : '';
            ?>
                <option value="<?php echo $c['genreid']; ?>" <?php echo $selected; ?>>
                    Genre: <?php echo htmlspecialchars($c['name']); ?> (<?php echo htmlspecialchars($c['catname']); ?>)
                </option>
            <?php } ?>
        </select>
    </div>

    <div class="form-field">
        <label for="authorid">Author:</label>
        <select id="authorid">
            <option value="0" style="color:gray">Select Author</option>
            <?php
            $catss = mysqli_query($db_connection, "SELECT authorid, author_name FROM tblauthors ORDER BY author_name");
            while ($cc = mysqli_fetch_assoc($catss)) {
                $selected = ($authorid_ == $cc['authorid']) ? 'selected' : '';
            ?>
                <option value="<?php echo $cc['authorid']; ?>" <?php echo $selected; ?>>
                    <?php echo htmlspecialchars($cc['author_name']); ?>
                </option>
            <?php } ?>
        </select>
    </div>

    <div class="form-field">
        <label for="published_date">Published Date:</label>
        <input type="date" id="published_date" value="<?php echo $published_date_; ?>">
    </div>

    <div class="form-field" style="grid-column:1/-1">
        <label for="description">Description:</label>
        <!-- renamed to id="description" (your JS already supports this); keep your PHP var -->
        <input type="text" id="description" value="<?php echo $descrpition_; ?>">
    </div>

    <div class="form-field">
        <label for="publisher">Publisher:</label>
        <input type="text" id="publisher" value="<?php echo $publisher_; ?>">
    </div>

    <div class="form-field">
        <label for="rating">Rating:</label>
        <input type="number" id="rating" step="0.1" min="0" max="9.9" value="<?php echo $rating_; ?>">
    </div>

    <div class="form-field">
        <label for="review_count">Review Count:</label>
        <input type="number" id="review_count" min="0" value="<?php echo $review_count_; ?>">
    </div>

    <div class="form-field">
        <label for="pages">Pages:</label>
        <input type="number" id="pages" min="1" value="<?php echo $pages_; ?>">
    </div>


    <div class="form-field">
        <label for="pages">Book Link:</label>
        <input type="text" id="link_" min="1" value="<?php echo $link_; ?>">
    </div>
    <!-- <a onclick="add_author();"
        style="background:#1e40ae; color:#fff; padding:6px 12px; border-radius:4px; border:none; cursor:pointer; font-size:12px; font-weight:bold;">
        + Add
    </a> -->
    <div class="form-actions">
        <?php if (isset($_GET['bookid_get'])): ?>
            <a style="background:#1e40ae; color:#fff; padding:6px 12px; border-radius:4px; border:none; cursor:pointer; font-size:12px; font-weight:bold;" class="btn" onclick="update_book(<?php echo (int)$_GET['bookid_get']; ?>);">+ Update</a>
        <?php else: ?>
            <a style="background:#1e40ae; color:#fff; padding:6px 12px; border-radius:4px; border:none; cursor:pointer; font-size:12px; font-weight:bold;" class="btn" onclick="add_book();">+ Add</a>
        <?php endif; ?>
    </div>
</form>




<div style="width:100%; overflow-x:auto;">
    <table style="font-size:11px; min-width:700px; width:100%; border-collapse:collapse; margin-top:10px; background:#fff; box-shadow:0 2px 8px rgba(0,0,0,.05); font-family:Arial, sans-serif;">
        <thead style="background:#1e40ae; color:#fff;">
            <tr>
                <th style="padding:8px 10px; text-align:left;">ID</th>
                <th style="padding:8px 10px; text-align:left;">Title</th>
                <th style="padding:8px 10px; text-align:left;">Author</th>
                <th style="padding:8px 10px; text-align:left;">Genre</th>
                <th style="padding:8px 10px; text-align:left;">Category</th>
                <th style="padding:8px 10px; text-align:left;">Upload</th>
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
                            <form method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="book_id" value="<?php echo $row['book_id']; ?>" />
                                <input type="file"
                                    name="picture_url"
                                    id="picture_url_<?php echo $row['book_id']; ?>"
                                    onchange="uploadBookImage(this)" />
                            </form>
                        </td>
                        <td style="padding:8px 10px;">
                            <a href="javascript:void(0)"
                                onclick="openCustom('pages/book_view.php?bbbb=<?php echo $row['book_id']; ?>',700,400);"
                                style="background:#2563eb; color:#fff; padding:6px 10px; border-radius:4px; text-decoration:none; font-size:14px; margin-right:6px; display:inline-block;">
                                <i class="fas fa-eye"></i>
                            </a>

                            <a href="javascript:void(0)"
                                onclick="ajax_fn('pages/book.php?bookid_get=<?php echo $row['book_id']; ?>', 'ultimate_content')"
                                style="background:#1e40ae; color:#fff; padding:6px 10px; border-radius:4px; text-decoration:none; font-size:14px; margin-right:6px; display:inline-block;">
                                <i class="fas fa-edit"></i>
                            </a>

                            <a href="javascript:void(0)"
                                onclick="delete_book(<?php echo $row['book_id']; ?>)"
                                style="background:#dc2626; color:#fff; padding:6px 10px; border-radius:4px; text-decoration:none; font-size:14px; display:inline-block;">
                                <i class="fas fa-trash"></i>
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
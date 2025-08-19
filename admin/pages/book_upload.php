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

// Check book_id from POST
if (isset($_POST['book_id'])) {
    $book_id = intval($_POST['book_id']);

    if (isset($_FILES['picture_url']) && $_FILES['picture_url']['error'] === UPLOAD_ERR_OK) {
        $target_dir = "picture_book/";
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0755, true);
        }

        // Get file extension
        $ext = pathinfo($_FILES["picture_url"]["name"], PATHINFO_EXTENSION);

        // New filename = current date + time only
        $filename = date("Ymd_His") . "." . $ext;
        $target_file = $target_dir . $filename;

        if (move_uploaded_file($_FILES["picture_url"]["tmp_name"], $target_file)) {
            // save filename in tblbooks
            mysqli_query(
                $db_connection,
                "UPDATE tblbooks SET picture_url = '" . mysqli_real_escape_string($db_connection, $filename) . "' WHERE id = " . $book_id
            );
            echo "Image uploaded successfully.";
        } else {
            echo "Failed to upload file.";
        }
    } else {
        echo "No file received.";
    }
} else {
    echo "Unauthorized request.";
}

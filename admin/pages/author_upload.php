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

// Check authorId from POST
if (isset($_POST['authorId'])) {
    $authorId = intval($_POST['authorId']);

    if (isset($_FILES['authorFile']) && $_FILES['authorFile']['error'] === UPLOAD_ERR_OK) {
        $target_dir = __DIR__ . "/picture_author/";  // FIX: added slash
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0755, true);
        }

        // Get file extension safely
        $ext = strtolower(pathinfo($_FILES["authorFile"]["name"], PATHINFO_EXTENSION));
        if (!in_array($ext, ["jpg", "jpeg", "png", "gif", "webp"])) {
            echo "Invalid file type.";
            exit;
        }

        // New filename = authorId + timestamp
        $filename = "author_" . $authorId . "_" . date("Ymd_His") . "." . $ext;
        $target_file = $target_dir . $filename;

        if (move_uploaded_file($_FILES["authorFile"]["tmp_name"], $target_file)) {
            // Save filename in tblauthors
            $safeFilename = mysqli_real_escape_string($db_connection, $filename);
            $sql = "UPDATE tblauthors SET picture_url = '$safeFilename' WHERE authorid = $authorId";
            if (mysqli_query($db_connection, $sql)) {
                echo "Image uploaded successfully.";
            } else {
                echo "Database update failed: " . mysqli_error($db_connection);
            }
        } else {
            echo "Failed to upload file.";
        }
    } else {
        echo "No file received.";
    }
} else {
    echo "Unauthorized request.";
}

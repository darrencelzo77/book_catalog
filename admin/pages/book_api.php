<?php
if (session_id() == '') session_start();
if (!isset($_SESSION['adminid'])) {
    http_response_code(403);
    exit;
}

include_once('../includes/systemconfig.php');

$bookid = $_GET['bookid'] ?? '';
if (!$bookid) {
    echo json_encode(null);
    exit;
}

$res = mysqli_query($db_connection, "SELECT * FROM tblbooks WHERE id='$bookid' LIMIT 1");
echo $res && mysqli_num_rows($res) > 0 ? json_encode(mysqli_fetch_assoc($res)) : json_encode(null);

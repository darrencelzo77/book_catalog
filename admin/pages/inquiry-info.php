<?php
if (session_id() == '') {
  session_start();
}
if (!isset($_SESSION['adminid'])) {
  http_response_code(403);
  echo 'Forbidden';
  exit;
}

if (file_exists('../systemconfig.php')) include_once('../systemconfig.php');
if (file_exists('../includes/systemconfig.php')) include_once('../includes/systemconfig.php');

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if (!$id) {
  http_response_code(400);
  echo 'Invalid request';
  exit;
}

mysqli_set_charset($db_connection, 'utf8mb4');

$stmt = mysqli_prepare(
  $db_connection,
  "SELECT id, inquiry_type, fullname, emailaddress, phonenumber, subject, message, created
   FROM tblinquiry WHERE id = ? LIMIT 1"
);
mysqli_stmt_bind_param($stmt, 'i', $id);
mysqli_stmt_execute($stmt);
$res = mysqli_stmt_get_result($stmt);
$row = $res ? mysqli_fetch_assoc($res) : null;

if (!$row) {
  http_response_code(404);
  echo 'Inquiry not found';
  exit;
}

function e($v)
{
  return htmlspecialchars((string)$v, ENT_QUOTES, 'UTF-8');
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Inquiry #<?php echo (int)$row['id']; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f7f7f9;
      margin: 0;
      padding: 16px;
    }

    .card {
      background: #fff;
      border: 1px solid #e5e7eb;
      border-radius: 8px;
      padding: 16px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, .05);
    }

    .h {
      color: #1e40ae;
      margin: 0 0 8px;
      font-size: 18px;
    }

    .row {
      display: flex;
      gap: 12px;
      flex-wrap: wrap;
      margin-bottom: 8px;
    }

    .row div {
      min-width: 220px;
    }

    .label {
      color: #6b7280;
      font-size: 11px;
      text-transform: uppercase;
      letter-spacing: .04em;
    }

    .val {
      font-size: 13px;
      color: #111827;
    }

    .msg {
      margin-top: 12px;
      padding: 12px;
      background: #f9fafb;
      border: 1px solid #e5e7eb;
      border-radius: 6px;
      white-space: pre-wrap;
      word-wrap: break-word;
    }

    .footer {
      text-align: right;
      margin-top: 12px;
    }

    .btn {
      display: inline-block;
      padding: 6px 10px;
      border: 1px solid #1e40ae;
      color: #1e40ae;
      border-radius: 6px;
      text-decoration: none;
      font-size: 12px;
    }

    .btn:hover {
      background: #1e40ae;
      color: #fff;
    }
  </style>
</head>

<body>
  <div class="card">
    <h2 class="h">Inquiry #<?php echo (int)$row['id']; ?></h2>

    <div class="row">
      <div>
        <div class="label">Type</div>
        <div class="val"><?php echo e($row['inquiry_type']); ?></div>
      </div>
      <div>
        <div class="label">Timestamp</div>
        <div class="val"><?php echo e($row['created']); ?></div>
      </div>
    </div>

    <div class="row">
      <div>
        <div class="label">Full Name</div>
        <div class="val"><?php echo e($row['fullname']); ?></div>
      </div>
      <div>
        <div class="label">Email</div>
        <div class="val"><?php echo e($row['emailaddress']); ?></div>
      </div>
      <div>
        <div class="label">Phone</div>
        <div class="val"><?php echo e($row['phonenumber']); ?></div>
      </div>
    </div>

    <div class="row">
      <div style="flex:1;">
        <div class="label">Subject</div>
        <div class="val"><?php echo e($row['subject']); ?></div>
      </div>
    </div>

    <div class="label" style="margin-top:10px;">Message</div>
    <div class="msg"><?php echo nl2br(e($row['message'])); ?></div>

    <div class="footer">
      <a href="#" class="btn" onclick="window.close(); return false;">Close</a>
    </div>
  </div>
</body>

</html>
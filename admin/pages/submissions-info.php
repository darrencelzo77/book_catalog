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

$stmt = mysqli_prepare($db_connection, "
  SELECT 
    id, first_name, last_name, email_address, phone_number, 
    book_title, word_count, genre, synopsis, publications, platform, submitted_at
  FROM tblmanuscripts WHERE id = ? LIMIT 1
");
mysqli_stmt_bind_param($stmt, 'i', $id);
mysqli_stmt_execute($stmt);
$res = mysqli_stmt_get_result($stmt);
$row = $res ? mysqli_fetch_assoc($res) : null;

if (!$row) {
  http_response_code(404);
  echo 'Submission not found';
  exit;
}

function e($v)
{
  return htmlspecialchars((string)$v, ENT_QUOTES, 'UTF-8');
}

// Split platform into chips (comma / semicolon / pipe)
$platforms = array_filter(array_map('trim', preg_split('/[,;|]/', (string)$row['platform'])));
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Submission #<?php echo (int)$row['id']; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    :root {
      --brand: #1e40ae;
      --muted: #6b7280;
      --bg: #f7f7f9;
      --card: #fff;
      --border: #e5e7eb;
    }

    * {
      box-sizing: border-box;
    }

    html,
    body {
      height: 100%;
    }

    body {
      font-family: Arial, sans-serif;
      background: var(--bg);
      margin: 0;
      padding: 16px;
    }

    .card {
      background: var(--card);
      border: 1px solid var(--border);
      border-radius: 8px;
      padding: 16px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, .05);
      max-width: min(960px, 96vw);
      margin: 0 auto;
    }

    .h {
      color: var(--brand);
      margin: 0 0 10px;
      font-size: 18px;
    }

    .row {
      display: flex;
      gap: 12px;
      flex-wrap: wrap;
      margin-bottom: 8px;
    }

    .col {
      min-width: 230px;
    }

    .label {
      color: var(--muted);
      font-size: 11px;
      text-transform: uppercase;
      letter-spacing: .04em;
    }

    .val {
      font-size: 13px;
      color: #111827;
    }

    /* Keep long text from overflowing */
    .nowrap-fix,
    .msg,
    .chips {
      overflow-wrap: anywhere;
      /* modern wrap */
      word-break: break-word;
      /* fallback for very long tokens */
    }

    /* Synopsis block with collapsible clamp */
    .msg {
      margin-top: 10px;
      padding: 12px;
      background: #f9fafb;
      border: 1px solid var(--border);
      border-radius: 6px;
      white-space: pre-wrap;
      /* preserve line breaks */
      max-height: 180px;
      /* collapsed height */
      overflow: hidden;
      position: relative;
    }

    .msg.expanded {
      max-height: none;
    }

    /* Nice fade at bottom when collapsed */
    .msg:not(.expanded)::after {
      content: "";
      position: absolute;
      left: 0;
      right: 0;
      bottom: 0;
      height: 48px;
      background: linear-gradient(to bottom, rgba(249, 250, 251, 0), #f9fafb 70%);
    }

    /* Show more/less button */
    .btn-link {
      border: 0;
      background: transparent;
      color: var(--brand);
      font-size: 12px;
      cursor: pointer;
      padding: 6px 0 0;
      text-decoration: underline;
    }

    /* Platform chips */
    .chips {
      display: flex;
      flex-wrap: wrap;
      gap: 6px;
      margin-top: 4px;
    }

    .chip {
      display: inline-block;
      padding: 4px 8px;
      border: 1px solid var(--border);
      border-radius: 999px;
      background: #f3f4f6;
      font-size: 12px;
      line-height: 1.2;
      color: #111827;
      max-width: 100%;
    }

    .footer {
      text-align: right;
      margin-top: 12px;
    }

    .btn {
      display: inline-block;
      padding: 6px 10px;
      border: 1px solid var(--brand);
      color: var(--brand);
      border-radius: 6px;
      text-decoration: none;
      font-size: 12px;
    }

    .btn:hover {
      background: var(--brand);
      color: #fff;
    }
  </style>
</head>

<body>
  <div class="card">
    <h2 class="h">Submission #<?php echo (int)$row['id']; ?> — <?php echo e($row['book_title']); ?></h2>

    <div class="row">
      <div class="col">
        <div class="label">Author</div>
        <div class="val nowrap-fix"><?php echo e($row['first_name'] . ' ' . $row['last_name']); ?></div>
      </div>
      <div class="col">
        <div class="label">Email</div>
        <div class="val nowrap-fix"><?php echo e($row['email_address']); ?></div>
      </div>
      <div class="col">
        <div class="label">Phone</div>
        <div class="val nowrap-fix"><?php echo e($row['phone_number']); ?></div>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <div class="label">Genre</div>
        <div class="val nowrap-fix"><?php echo e($row['genre']); ?></div>
      </div>
      <div class="col">
        <div class="label">Word Count</div>
        <div class="val nowrap-fix"><?php echo e($row['word_count']); ?></div>
      </div>
      <div class="col">
        <div class="label">Submitted</div>
        <div class="val nowrap-fix"><?php echo e($row['submitted_at']); ?></div>
      </div>
    </div>

    <div class="row">
      <div class="col" style="flex:1;">
        <div class="label">Platform</div>
        <?php if (!empty($platforms)): ?>
          <div class="chips">
            <?php foreach ($platforms as $p): ?>
              <span class="chip" title="<?php echo e($p); ?>"><?php echo e($p); ?></span>
            <?php endforeach; ?>
          </div>
        <?php else: ?>
          <div class="val nowrap-fix"><?php echo e($row['platform']); ?></div>
        <?php endif; ?>
      </div>
      <div class="col" style="flex:1;">
        <div class="label">Publications</div>
        <div class="val nowrap-fix"><?php echo e($row['publications']); ?></div>
      </div>
    </div>

    <div class="label" style="margin-top:10px;">Synopsis</div>
    <div id="synopsisBox" class="msg"><?php echo nl2br(e($row['synopsis'])); ?></div>
    <button class="btn-link" id="toggleSynopsis" aria-expanded="false" aria-controls="synopsisBox">Show more</button>

    <div class="footer">
      <a href="#" class="btn" onclick="window.close(); return false;">Close</a>
    </div>
  </div>

  <script>
    // Toggle for Synopsis clamp
    (function() {
      var box = document.getElementById('synopsisBox');
      var btn = document.getElementById('toggleSynopsis');
      if (!box || !btn) return;

      function updateLabel() {
        var expanded = box.classList.contains('expanded');
        btn.textContent = expanded ? 'Show less' : 'Show more';
        btn.setAttribute('aria-expanded', expanded ? 'true' : 'false');
      }
      btn.addEventListener('click', function() {
        box.classList.toggle('expanded');
        updateLabel();
      });
      // If content is short, hide the button
      window.addEventListener('load', function() {
        if (box.scrollHeight <= 190) { // ~ max-height + fade
          btn.style.display = 'none';
        }
      });
      updateLabel();
    })();
  </script>
</body>

</html>
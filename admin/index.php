<?php
if (session_id() == '') {
    session_start();
}
$err = '';
if (isset($_POST['signin'])) {
    include('includes/systemconfig.php');

    $username = mysqli_real_escape_string($db_connection, $_POST['username']);
    $password = mysqli_real_escape_string($db_connection, $_POST['password']);
    $p = secureData($password);

    $sql = "SELECT * FROM tbladmin 
            WHERE username='$username' 
            AND password='$p' 
            LIMIT 1";

    $rs = mysqli_query($db_connection, $sql);

    if ($rs && mysqli_num_rows($rs) == 1) {
        $rw = mysqli_fetch_assoc($rs);
        $_SESSION['adminid'] = $rw['adminid'];
        include('home.php');
        exit(0);
    } else {
        $err = '<span style="color:red; font-size:16px; font-weight:bold" class="blink">Invalid Username or Password</span>';
    }
}

if (isset($_SESSION['adminid'])) {
    include_once('includes/systemconfig.php');
    include('home.php');
    exit(0);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Log in</title>
    <style>
        :root {
            --brand: #0d6efd;
            --brand-dark: #0b5ed7;
            --bg: #f4f7fb;
            --text: #1f2937;
            --muted: #6b7280;
            --card: #ffffff;
            --border: #e5e7eb;
            --danger: #dc2626;
        }

        * {
            box-sizing: border-box
        }

        html,
        body {
            height: 100%;
        }

        body {
            margin: 0;
            font-family: system-ui, -apple-system, Segoe UI, Roboto, Arial, "Helvetica Neue", sans-serif;
            color: var(--text);
            background:
                radial-gradient(40rem 40rem at -10% -10%, rgba(13, 110, 253, .20), transparent 60%),
                radial-gradient(40rem 40rem at 110% 110%, rgba(13, 110, 253, .18), transparent 60%),
                var(--bg);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px;
        }

        .login-wrapper {
            width: 100%;
            max-width: 420px;
        }

        .login-card {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 16px;
            box-shadow: 0 12px 30px rgba(2, 6, 23, .08);
            overflow: hidden;
        }

        .login-header {
            padding: 28px 28px 0 28px;
            text-align: center;
        }

        .app-badge {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-weight: 700;
            color: var(--brand);
            font-size: 18px;
            letter-spacing: .2px;
        }

        .app-badge .logo-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: var(--brand);
            box-shadow: 0 0 0 6px rgba(13, 110, 253, .15);
            display: inline-block;
        }

        .login-title {
            margin: 14px 0 6px 0;
            font-size: 22px;
            line-height: 1.2;
            font-weight: 700;
            color: var(--text);
        }

        .login-sub {
            margin: 0 0 22px 0;
            color: var(--muted);
            font-size: 14px;
        }

        .login-body {
            padding: 0 28px 28px 28px;
        }

        .field {
            margin-bottom: 14px;
        }

        label {
            display: block;
            font-size: 13px;
            color: var(--muted);
            margin-bottom: 6px;
        }

        .control {
            position: relative;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            height: 46px;
            padding: 0 14px;
            border: 1px solid var(--border);
            border-radius: 10px;
            background: #fff;
            color: var(--text);
            font-size: 15px;
            outline: none;
            transition: border-color .15s ease, box-shadow .15s ease;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: var(--brand);
            box-shadow: 0 0 0 4px rgba(13, 110, 253, .12);
        }

        .toggle-line {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-top: 6px;
            font-size: 13px;
            color: var(--muted);
            user-select: none;
        }

        .btn {
            width: 100%;
            height: 48px;
            border: none;
            border-radius: 10px;
            background: var(--brand);
            color: #fff;
            font-weight: 700;
            font-size: 15px;
            cursor: pointer;
            margin-top: 8px;
            transition: transform .03s ease, background .15s ease, box-shadow .15s ease;
            box-shadow: 0 8px 16px rgba(13, 110, 253, .25);
        }

        .btn:hover {
            background: var(--brand-dark);
        }

        .btn:active {
            transform: translateY(1px);
        }

        .error {
            margin-top: 14px;
            padding: 12px 14px;
            background: #fee2e2;
            border: 1px solid #fecaca;
            color: var(--danger);
            border-radius: 10px;
            font-weight: 600;
            text-align: center;
        }

        .footer {
            text-align: center;
            margin-top: 14px;
            font-size: 12px;
            color: var(--muted);
        }

        /* Reduce motion preference */
        @media (prefers-reduced-motion: reduce) {
            .btn {
                transition: none;
                box-shadow: none;
            }

            input[type="text"]:focus,
            input[type="password"]:focus {
                box-shadow: none;
            }
        }
    </style>

    <script>
        function show_me() {
            var x = document.getElementById("password");
            x.type = (x.type === "password") ? "text" : "password";
        }
    </script>
</head>

<body>
    <div class="login-wrapper">
        <div class="login-card">
            <div class="login-header">
                <div class="app-badge">
                    <span class="logo-dot" aria-hidden="true"></span>
                    <span>Book Management System</span>
                </div>
                <h1 class="login-title">Welcome back</h1>
                <p class="login-sub">Sign in to continue</p>
            </div>

            <div class="login-body">
                <form method="post" novalidate>
                    <div class="field">
                        <label for="username">Username</label>
                        <div class="control">
                            <input type="text" name="username" id="username" placeholder="Enter your username" required />
                        </div>
                    </div>

                    <div class="field">
                        <label for="password">Password</label>
                        <div class="control">
                            <input type="password" name="password" id="password" placeholder="Enter your password" required />
                        </div>
                        <label class="toggle-line">
                            <input type="checkbox" id="remember" onclick="show_me()" />
                            Show password
                        </label>
                    </div>

                    <button class="btn" type="submit" name="signin">Sign In</button>
                </form>

                <!-- Error display -->
                <div>
                    <?php if ($err) {
                        echo '<div class="error">' . $err . '</div>';
                    } ?>
                </div>

                <div class="footer">
                    &copy; <?php echo date('Y'); ?> Book Management System
                </div>
            </div>
        </div>
    </div>
</body>

</html>
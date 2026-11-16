<?php
require_once __DIR__ . '/includes/bootstrap.php';
if (is_logged_in()) {
    header('Location: dashboard.php');
    exit;
}
$error = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    verify_csrf();
    $name = trim((string) ($_POST['full_name'] ?? ''));
    $email = strtolower(trim((string) ($_POST['email'] ?? '')));
    $username = trim((string) ($_POST['username'] ?? ''));
    $password = (string) ($_POST['password'] ?? '');
    if (mb_strlen($name) < 2)
        $error = 'Enter your full name.';
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL))
        $error = 'Enter a valid email address.';
    elseif (!preg_match('/^[a-zA-Z0-9_.-]{3,30}$/', $username))
        $error = 'Username must be 3–30 characters (letters, numbers, dot, underscore or hyphen).';
    elseif (strlen($password) < 8)
        $error = 'Password must be at least 8 characters.';
    else {
        try {
            $stmt = db()->prepare('INSERT INTO users (full_name,email,username,password_hash) VALUES (:name,:email,:username,:hash)');
            $stmt->execute(['name' => $name, 'email' => $email, 'username' => $username, 'hash' => password_hash($password, PASSWORD_DEFAULT)]);
            session_regenerate_id(true);
            $_SESSION['user'] = ['id' => (int) db()->lastInsertId(), 'full_name' => $name, 'email' => $email, 'username' => $username, 'role' => 'student'];
            header('Location: dashboard.php');
            exit;
        } catch (PDOException $ex) {
            $error = ($ex->errorInfo[1] ?? null) == 1062 ? 'That email or username is already registered.' : 'Account could not be created. Check the database connection.';
        }
    }
}
?>
<!doctype html>
<html lang="en">

<head><?php if (function_exists("csrf_token")): ?>
        <meta name="csrf-token" content="<?= e(csrf_token()) ?>"><?php endif; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="theme-color" content="#ffffff">
    <title>CyberHunt — Sign Up</title>
    <link rel="icon" href="assets/favicon.svg">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body class="auth-body" data-page="signup">
    <main id="page-content">
        <main class="login-page">
            <div class="login-watermark" aria-hidden="true"><img src="assets/cyberhunt-mark.svg"></div>
            <div class="auth-top-mark"><a class="logo logo-image" href="index.php"><img class="logo-black"
                        src="assets/cyberhunt-logo-user-exact.png" alt="CyberHunt"><img class="logo-white"
                        src="assets/cyberhunt-logo-user-white.png" alt="" aria-hidden="true"></a></div>
            <div class="login-card">
                <div class="login-heading">
                    <h2>Welcome <em>To CyberHunt</em></h2>
                    <p>Create your learner account</p>
                </div>
                <div class="login-character" id="loginCat"><img src="assets/cyberhunt-login-character.png" alt=""
                        draggable="false"><span class="character-note">Hmm...<br>who's there?</span><span
                        class="character-question">?</span><span class="character-arrow">↗</span><span
                        class="character-hint">Move your cursor<br>here :)</span></div>
                <?php if ($error): ?>
                    <div class="form-error" role="alert"><?= e($error) ?></div><?php endif; ?>
                <form method="post" action="signup.php"><input type="hidden" name="csrf_token"
                        value="<?= e(csrf_token()) ?>">
                    <div class="field"><label for="full_name">Full Name</label>
                        <div class="input-wrap"><span class="field-icon">♙</span><input id="full_name" name="full_name"
                                autocomplete="name" placeholder="Enter your name" required
                                value="<?= e($_POST['full_name'] ?? '') ?>"></div>
                    </div>
                    <div class="field"><label for="email">Email Address</label>
                        <div class="input-wrap"><span class="field-icon">✉</span><input id="email" name="email"
                                type="email" autocomplete="email" placeholder="Enter your email" required
                                value="<?= e($_POST['email'] ?? '') ?>"></div>
                    </div>
                    <div class="field"><label for="username">Username</label>
                        <div class="input-wrap"><span class="field-icon">@</span><input id="username" name="username"
                                autocomplete="username" placeholder="Choose a username" required
                                value="<?= e($_POST['username'] ?? '') ?>"></div>
                    </div>
                    <div class="field"><label for="password">Password</label>
                        <div class="input-wrap"><span class="field-icon">⌑</span><input id="password" name="password"
                                type="password" autocomplete="new-password" placeholder="At least 8 characters"
                                minlength="8" required><button type="button" class="toggle-pass" id="passToggle"
                                aria-label="Show password">◉</button></div>
                    </div><button class="login-submit" type="submit">Create Account →</button>
                </form>
                <div class="signup-line">Already have an account? <a href="login.php">Log In</a></div>
            </div>
            <div class="auth-bottom-mark"><a class="logo logo-image" href="index.php"><img class="logo-black"
                        src="assets/cyberhunt-logo-user-exact.png" alt="CyberHunt"><img class="logo-white"
                        src="assets/cyberhunt-logo-user-white.png" alt="" aria-hidden="true"></a>
                <div class="footer-tag">LEARN · EXPLORE · SECURE</div>
            </div>
        </main>
    </main>
    <script>const t = document.getElementById('passToggle'), p = document.getElementById('password'); t?.addEventListener('click', () => {p.type = p.type === 'password' ? 'text' : 'password';}); const c = document.getElementById('loginCat'); c?.addEventListener('mousemove', e => {const r = c.getBoundingClientRect(), x = (e.clientX - r.left) / r.width - .5; c.style.setProperty('--mx', `${Math.max(-1, Math.min(1, x)) * 8}deg`)});</script>
    <script src="js/site.js"></script><script type="module" src="js/firebase-auth.js"></script>
<script type="module" src="js/firebase-session.js"></script></body>

</html>
<?php
require_once __DIR__ . '/includes/bootstrap.php';
if (is_logged_in()) { header('Location: dashboard.php'); exit; }
$error = flash('flash_error');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    verify_csrf();
    $identity = trim((string)($_POST['identity'] ?? ''));
    $password = (string)($_POST['password'] ?? '');
    if ($identity === '' || $password === '') $error = 'Enter your email/username and password.';
    else {
        $stmt = db()->prepare('SELECT id, full_name, email, username, password_hash, role, status FROM users WHERE email = :email OR username = :username LIMIT 1');
        $stmt->execute(['email'=>$identity, 'username'=>$identity]);
        $user = $stmt->fetch();
        if ($user && $user['status'] === 'active' && password_verify($password, $user['password_hash'])) {
            session_regenerate_id(true);
            unset($user['password_hash'], $user['status']);
            $_SESSION['user'] = $user;
            header('Location: dashboard.php'); exit;
        }
        $error = 'Invalid login details or inactive account.';
    }
}
?>
<!doctype html><html lang="en"><head><?php if (function_exists("csrf_token")): ?><meta name="csrf-token" content="<?= e(csrf_token()) ?>"><?php endif; ?><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1"><meta name="theme-color" content="#ffffff"><title>CyberHunt — Login</title><link rel="icon" href="assets/favicon.svg"><link rel="stylesheet" href="css/styles.css"></head><body class="auth-body" data-page="login"><main id="page-content"><main class="login-page"><div class="login-watermark" aria-hidden="true"><img src="assets/cyberhunt-mark.svg"></div><div class="auth-top-mark"><a class="logo logo-image" href="index.php"><img class="logo-black" src="assets/cyberhunt-logo-user-exact.png" alt="CyberHunt"><img class="logo-white" src="assets/cyberhunt-logo-user-white.png" alt="" aria-hidden="true"></a></div><div class="login-card"><div class="login-heading"><h2>Welcome <em>Back</em></h2><p>Log in to continue your learning journey with CyberHunt.</p></div>
<?php if ($error): ?><div class="form-error" role="alert"><?= e($error) ?></div><?php endif; ?>
<form method="post" action="login.php" autocomplete="on"><input type="hidden" name="csrf_token" value="<?= e(csrf_token()) ?>"><div class="field"><label for="identity">Email or Username</label><div class="input-wrap"><span class="field-icon">✉</span><input id="identity" name="identity" autocomplete="username" placeholder="Enter your email or username" required value="<?= e($_POST['identity'] ?? '') ?>"></div></div><div class="field"><label for="password">Password</label><div class="input-wrap"><span class="field-icon">⌑</span><input id="password" name="password" type="password" autocomplete="current-password" placeholder="Enter your password" required><button type="button" class="toggle-pass" id="passToggle" aria-label="Show password">◉</button></div></div><a class="forgot" href="forgot-password.php">Forgot Password?</a><button class="login-submit" type="submit">Login →</button></form><div class="signup-line">Don't have an account? <a href="signup.php">Sign Up</a></div></div><div class="auth-bottom-mark"><a class="logo logo-image" href="index.php"><img class="logo-black" src="assets/cyberhunt-logo-user-exact.png" alt="CyberHunt"><img class="logo-white" src="assets/cyberhunt-logo-user-white.png" alt="" aria-hidden="true"></a><div class="footer-tag">LEARN · EXPLORE · SECURE</div></div></main></main><script>const t=document.getElementById('passToggle'),p=document.getElementById('password');t?.addEventListener('click',()=>{p.type=p.type==='password'?'text':'password';});</script><script src="js/site.js"></script><script type="module" src="js/firebase-auth.js"></script><script type="module" src="js/firebase-session.js"></script></body></html>
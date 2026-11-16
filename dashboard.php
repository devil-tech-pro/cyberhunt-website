<?php require_once __DIR__ . '/includes/bootstrap.php';
require_login(); ?>
<!doctype html>
<html lang="en">

<head><?php if (function_exists("csrf_token")): ?>
        <meta name="csrf-token" content="<?= e(csrf_token()) ?>"><?php endif; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="theme-color" content="#ffffff">
    <title>CyberHunt — Dashboard</title>
    <link rel="icon" href="assets/favicon.svg">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body data-page="dashboard">
    
   <?php include 'includes/header.php';?>

    <main class="dashboard-page">
        <div class="dashboard-top">
            <div class="dashboard-title"><span class="eyebrow">LEARN · EXPLORE · SECURE</span>
                <h1>My Dashboard</h1>
                <p>Your learning progress, quizzes, certificates and account activity.</p>
            </div>
            <div class="dashboard-profile">
                <div class="dashboard-avatar" id="dashAvatar">U</div>
                <div><b id="dashName">Guest Learner</b><small id="dashEmail">Learner account</small></div>
            </div>
        </div>
        <section class="dashboard-stats">
            <div class="dash-stat"><span>Courses Enrolled</span><strong>5</strong><em>+1 this month</em></div>
            <div class="dash-stat"><span>Courses Completed</span><strong>2</strong><em>Keep learning</em></div>
            <div class="dash-stat"><span>Quiz Score</span><strong>84%</strong><em>Strong progress</em></div>
            <div class="dash-stat"><span>Certificates</span><strong>1</strong><em>Verified</em></div>
        </section>
        <div class="dashboard-grid">
            <section class="dash-panel">
                <h2>Continue Learning</h2>
                <p>Pick up where you left off.</p>
                <div class="dash-course">
                    <div class="dash-cover card-cover cover-kali"></div>
                    <div><span class="pill green">BEGINNER</span>
                        <h3>Kali Linux for Beginners</h3>
                        <p>Essential commands, setup and practical Linux skills.</p>
                        <div class="dash-progress"><i style="width:60%"></i></div>
                        <div class="dash-percent">60% complete</div>
                    </div><a class="btn btn-dark" href="course.php?id=kali-linux">Continue →</a>
                </div>
                <div class="dash-course">
                    <div class="dash-cover card-cover cover-red"></div>
                    <div><span class="pill red">INTERMEDIATE</span>
                        <h3>Ethical Hacking Fundamentals</h3>
                        <p>Core concepts, methodology and security testing.</p>
                        <div class="dash-progress"><i style="width:35%"></i></div>
                        <div class="dash-percent">35% complete</div>
                    </div><a class="btn btn-dark" href="course.php?id=ethical-hacking">Continue →</a>
                </div>
                <div class="dash-course">
                    <div class="dash-cover card-cover cover-blue"></div>
                    <div><span class="pill blue">BEGINNER</span>
                        <h3>Networking Fundamentals</h3>
                        <p>IP addressing, subnetting, DNS and routing.</p>
                        <div class="dash-progress"><i style="width:80%"></i></div>
                        <div class="dash-percent">80% complete</div>
                    </div><a class="btn btn-dark" href="course.php?id=networking">Continue →</a>
                </div>
            </section>
            <aside class="dash-panel">
                <h2>Profile</h2>
                <p>Account overview</p>
                <div class="dashboard-profile" style="padding:0;border:0;background:transparent">
                    <div class="dashboard-avatar" id="dashAvatar2">U</div>
                    <div><b id="dashName2">Guest Learner</b><small id="dashRole">Learner</small></div>
                </div>
                <div class="profile-complete"><i></i></div><small style="font-size:10px;color:var(--muted)">Profile 75%
                    complete</small>
                <div class="quick-grid" style="margin-top:18px"><a href="my-courses.php">My Courses →</a><a
                        href="certificates.php">Certificates →</a><a href="quizzes.php">Take a Quiz →</a><a
                        href="verify.php">Verify Certificate →</a></div>
            </aside>
            <section class="dash-panel">
                <h2>Recent Activity</h2>
                <p>Your latest learning actions.</p>
                <div class="dash-list">
                    <div class="dash-list-item">
                        <div><b>Networking Basics quiz</b><small>Completed today</small></div><strong>9/10</strong>
                    </div>
                    <div class="dash-list-item">
                        <div><b>Kali Linux for Beginners</b><small>Module 5 completed</small></div><strong>+10%</strong>
                    </div>
                    <div class="dash-list-item">
                        <div><b>Cyber Security Basic Fundamentals</b><small>Certificate issued</small></div>
                        <strong>Verified</strong>
                    </div>
                    <div class="dash-list-item">
                        <div><b>Ethical Hacking Fundamentals</b><small>Last opened yesterday</small></div>
                        <strong>35%</strong>
                    </div>
                </div>
            </section>
            <aside class="dash-panel">
                <h2>Quick Actions</h2>
                <p>Jump directly to your learning tools.</p>
                <div class="quick-grid"><a href="courses.php">Explore Courses →</a><a href="notes.php">Study Notes
                        →</a><a href="books.php">Explore Books →</a><a href="login.php" id="logoutLink">Sign Out →</a>
                </div>
            </aside>
        </div>
    </main>

      <?php include 'includes/footer.php';?>

    <script>(function () {'use strict'; const THEME_KEY = 'cyberhunt_theme', USER_KEY = 'cyberhunt_user', root = document.documentElement; function setTheme(t) {const safe = t === 'dark' ? 'dark' : 'light'; root.dataset.theme = safe; try {localStorage.setItem(THEME_KEY, safe)} catch (e) { } const b = document.getElementById('themeToggle'); if (b) b.textContent = safe === 'dark' ? '☀' : '☾'} let saved = null; try {saved = localStorage.getItem(THEME_KEY)} catch (e) { } setTheme(saved || (matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light')); document.getElementById('themeToggle')?.addEventListener('click', () => setTheme(root.dataset.theme === 'dark' ? 'light' : 'dark')); document.getElementById('menuToggle')?.addEventListener('click', () => document.getElementById('navLinks')?.classList.toggle('open')); document.getElementById('coursesNav')?.addEventListener('click', function (e) {if (matchMedia('(max-width:760px)').matches) {e.preventDefault(); this.closest('.course-dropdown')?.classList.toggle('open')} }); let u = null; try {u = JSON.parse(localStorage.getItem(USER_KEY) || 'null')} catch (e) { } if (u) {const name = u.name || u.username || 'Learner'; document.querySelectorAll('#dashName,#dashName2').forEach(x => x.textContent = name); document.getElementById('dashEmail').textContent = u.email || 'Learner account'; document.querySelectorAll('#dashAvatar,#dashAvatar2').forEach(x => x.textContent = name.charAt(0).toUpperCase()); document.getElementById('accountBtn').href = 'dashboard.php'; document.getElementById('accountBtn').innerHTML = 'Dashboard <span>→</span>'} document.getElementById('logoutLink')?.addEventListener('click', function (e) {e.preventDefault(); try {localStorage.removeItem(USER_KEY)} catch (err) { } location.href = 'login.php'})})();</script>
<script type="module" src="js/firebase-session.js"></script><script type="module" src="js/firebase-data.js"></script></body>

</html>
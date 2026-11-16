<?php require_once __DIR__ . '/includes/bootstrap.php';
require_login(); ?>
<!doctype html>
<html lang="en">

<head><?php if (function_exists("csrf_token")): ?>
    <meta name="csrf-token" content="<?= e(csrf_token()) ?>"><?php endif; ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="theme-color" content="#ffffff">
  <title>CyberHunt — Learn. Explore. Secure.</title>
  <link rel="icon" href="assets/favicon.svg">
  <link rel="stylesheet" href="css/styles.css">
</head>

<body data-page="my-courses">
    <?php include 'includes/header.php';?>

  <main id="page-content">
    <section class="page-hero reference-page-hero">
      <div class="reference-hero-art"><img class="hero-art-light" src="assets/hero-reference-exact.png" alt=""><img
          class="hero-art-dark" src="assets/hero-dark-reference-exact.png" alt="">
        <div class="reference-hero-shade"></div>
      </div>
      <div class="page-index">03<i></i></div>
      <div class="page-hero-inner">
        <div class="eyebrow">LEARN · EXPLORE · SECURE</div>
        <h1>MY <em>COURSES</em></h1>
        <p>Keep learning. Keep growing. Track your progress, continue where you left off, and complete your courses to
          earn certificates.</p>
      </div>
    </section>
    <div class="dashboard-layout">
      <aside class="sidebar">
        <div class="profile">
          <div class="avatar">U</div><b>Guest Learner</b><small>Learner</small>
        </div><a class="side-link active" href="my-courses.php">⌂ Dashboard</a><a class="side-link" href="courses.php">▣
          My Courses</a><a class="side-link" href="certificates.php">◇ My Certificates</a><a class="side-link"
          href="quizzes.php">☷ Quizzes</a><a class="side-link" href="#" id="logoutBtn">↪ Logout</a>
      </aside>
      <section>
        <div class="dashboard-card">
          <h2>In Progress Courses</h2>
          <p style="color:var(--muted)">Continue learning and complete your courses.</p>
          <div class="progress-row">
            <div class="progress-cover card-cover cover-kali"></div>
            <div><span class="pill green">BEGINNER</span>
              <h3 style="margin:5px 0">Kali Linux for Beginners</h3>
              <p style="font-size:11px;color:var(--muted)">Complete guide to install, setup and use Kali Linux with
                essential commands.</p>
              <div class="progressbar" style="margin-top:10px"><i style="width:60%"></i></div>
            </div>
            <div class="progress-actions"><small>60% Completed</small><a class="btn btn-dark"
                href="course.php?id=kali-linux" style="padding:8px 12px">Continue Learning →</a></div>
          </div>
          <div class="progress-row">
            <div class="progress-cover card-cover cover-red"></div>
            <div><span class="pill green">BEGINNER</span>
              <h3 style="margin:5px 0">Ethical Hacking Fundamentals</h3>
              <p style="font-size:11px;color:var(--muted)">Learn the core concepts, tools and techniques of ethical
                hacking.</p>
              <div class="progressbar" style="margin-top:10px"><i style="width:35%"></i></div>
            </div>
            <div class="progress-actions"><small>35% Completed</small><a class="btn btn-dark"
                href="course.php?id=ethical-hacking" style="padding:8px 12px">Continue Learning →</a></div>
          </div>
          <div class="progress-row">
            <div class="progress-cover card-cover cover-blue"></div>
            <div><span class="pill green">BEGINNER</span>
              <h3 style="margin:5px 0">Networking Fundamentals</h3>
              <p style="font-size:11px;color:var(--muted)">Understand IP addressing, subnetting, protocols and more.</p>
              <div class="progressbar" style="margin-top:10px"><i style="width:80%"></i></div>
            </div>
            <div class="progress-actions"><small>80% Completed</small><a class="btn btn-dark"
                href="course.php?id=networking" style="padding:8px 12px">Continue Learning →</a></div>
          </div>
        </div>
        <div class="dashboard-card" style="margin-top:20px">
          <h2>Not Started Courses</h2>
          <div class="progress-row">
            <div class="progress-cover card-cover cover-python"></div>
            <div><span class="pill blue">BEGINNER</span>
              <h3 style="margin:5px 0">Python for Cybersecurity</h3>
              <p style="font-size:11px;color:var(--muted)">Learn Python from scratch for automation, scripting and
                security tools.</p>
            </div>
            <div class="progress-actions"><a class="btn btn-outline" href="course.php?id=python-security"
                style="padding:8px 12px">Start Course →</a></div>
          </div>
          <div class="progress-row">
            <div class="progress-cover card-cover cover-lock"></div>
            <div><span class="pill blue">INTERMEDIATE</span>
              <h3 style="margin:5px 0">Web Application Security</h3>
              <p style="font-size:11px;color:var(--muted)">Learn about OWASP, vulnerabilities and real world attack
                techniques.</p>
            </div>
            <div class="progress-actions"><a class="btn btn-outline" href="course.php?id=web-security"
                style="padding:8px 12px">Start Course →</a></div>
          </div>
        </div>
      </section>
    </div>
  </main>
   <?php include 'includes/footer.php';?>

  <script>
    (function () {
      'use strict';
      const THEME_KEY = 'cyberhunt_theme';
      const root = document.documentElement;
      function setTheme(theme) {
        const safe = theme === 'dark' ? 'dark' : 'light';
        root.dataset.theme = safe;
        try {localStorage.setItem(THEME_KEY, safe)} catch (e) { }
        const b = document.getElementById('themeToggle');
        if (b) {b.textContent = safe === 'dark' ? '☀' : '☾'; b.setAttribute('aria-label', safe === 'dark' ? 'Switch to light theme' : 'Switch to dark theme');}
      }
      let saved = null; try {saved = localStorage.getItem(THEME_KEY)} catch (e) { }
      setTheme(saved || (matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'));
      document.getElementById('themeToggle')?.addEventListener('click', () => setTheme(root.dataset.theme === 'dark' ? 'light' : 'dark'));
      document.getElementById('menuToggle')?.addEventListener('click', () => document.getElementById('navLinks')?.classList.toggle('open'));
      const courseNav = document.getElementById('coursesNav');
      courseNav?.addEventListener('click', function (e) {
        if (matchMedia('(max-width:760px)').matches) {e.preventDefault(); this.closest('.course-dropdown')?.classList.toggle('open');}
      });
      document.querySelectorAll('.reveal').forEach(el => {
        if ('IntersectionObserver' in window) {const io = new IntersectionObserver(entries => entries.forEach(x => {if (x.isIntersecting) {x.target.classList.add('visible'); io.unobserve(x.target)} }), {threshold: .08}); io.observe(el)} else el.classList.add('visible');
      });
    })();
  </script>
  <script>
    (function () {
      const titles = document.querySelectorAll('.page-hero h1 em, .hero-home h1 em');
      titles.forEach(function (el) {
        const text = el.textContent.trim();
        if (!text || el.dataset.typewriterDone) return;
        el.dataset.typewriterDone = '1';
        el.classList.add('typewriter-active');
        el.textContent = '';
        let i = 0;
        function tick() {
          if (i < text.length) {el.textContent += text.charAt(i++); window.setTimeout(tick, 70);}
          else {window.setTimeout(function () {el.classList.remove('typewriter-active')}, 1200);}
        }
        tick();
      });
    })();
  </script>
<script type="module" src="js/firebase-session.js"></script><script type="module" src="js/firebase-data.js"></script></body>

</html>
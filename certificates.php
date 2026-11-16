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

<body data-page="certificates">

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
        <h1>MY <em>CERTIFICATES</em></h1>
        <p>Your effort. Our recognition. Explore and download your earned certificates.</p>
      </div>
    </section>
    <div class="dashboard-layout">
      <aside class="sidebar">
        <div class="profile">
          <div class="avatar">U</div><b>My Learning</b><small>Certificates</small>
        </div><a class="side-link" href="my-courses.php">▣ My Courses</a><a class="side-link active"
          href="certificates.php">◇ My Certificates</a><a class="side-link" href="quizzes.php">☷ Quizzes</a>
      </aside>
      <section>
        <div class="dashboard-card">
          <h2>My Certificates</h2>
          <p style="color:var(--muted)">Here are the certificates you have earned after completing your courses.</p>
          <div class="cert-card" style="margin-top:18px">
            <div class="certificate-art">
              <div class="eyebrow">CERTIFICATE</div>
              <h2>OF COMPLETION</h2>
              <div>This is to certify that</div>
              <div class="cert-name">Your <span class="cert-red">Name</span></div>
              <p>has successfully completed the</p><strong class="cert-red">15 DAY CYBER SECURITY<br> BASIC
                FUNDAMENTALS</strong>
            </div>
            <div class="cert-info">
              <h3>Cyber Security Basic Fundamentals <span class="pill green">Verified ✓</span></h3>
              <div class="cert-info-grid">
                <div>Duration<b>15 Days</b></div>
                <div>Level<b>Basic</b></div>
                <div>Completed On<b>25 May 2026</b></div>
                <div>Certificate ID<b>CH-2026-0525-001</b></div>
              </div><a class="btn btn-dark" href="verify.php?id=CH-2026-0525-001">Verify Certificate →</a>
            </div>
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
<?php require_once __DIR__ . '/includes/bootstrap.php'; ?>
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

<body data-page="note-detail">
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
        <h1>STUDY <em>NOTE</em></h1>
        <p>Kali Linux Basics</p>
      </div>
    </section>
    <section class="section">
      <div class="dashboard-card"><span class="pill cyan">LINUX</span>
        <h2>Kali Linux Basics</h2>
        <p>Installation, basic commands, file system, and useful tools.</p>
        <hr style="border:0;border-top:1px solid var(--line);margin:25px 0">
        <h3>What you'll learn</h3>
        <ul style="color:var(--muted);line-height:2">
          <li>Core concepts and terminology</li>
          <li>Practical commands and examples</li>
          <li>Common mistakes and safer practices</li>
          <li>Revision checklist</li>
        </ul><button class="btn btn-dark" id="downloadNote">Download PDF →</button>
      </div>
    </section>
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
    document.getElementById('downloadNote')?.addEventListener('click', () => alert('Connect your protected PDF storage endpoint before production.'));</script>
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
<script type="module" src="js/firebase-session.js"></script></body>

</html>
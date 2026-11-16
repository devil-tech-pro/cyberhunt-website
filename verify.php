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

<body data-page="verify">
  
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
        <h1>VERIFY <em>CERTIFICATE</em></h1>
        <p>Enter the Certificate ID to verify its authenticity. Make sure the certificate was issued by CyberHunt.</p>
      </div>
    </section>
    <section class="section">
      <div class="verify-box">
        <form class="verify-form" id="verifyForm"><input id="certId" placeholder="Enter Certificate ID"
            value="CH-2026-0525-001"><button>Verify Certificate →</button></form>
        <div id="verifyResult" class="verify-result"></div>
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

    (function () {const form = document.getElementById('verifyForm'), input = document.getElementById('certId'), res = document.getElementById('verifyResult'); const cert = {"CH-2026-0525-001": {name: 'Suryansh Sharma', course: '15 Day Cyber Security Basic Fundamentals', date: '25 May 2026', level: 'Basic'}}; function run() {const id = (input.value || '').trim().toUpperCase(); if (!id) return; const c = cert[id]; if (c) {res.className = 'verify-result show'; res.innerHTML = '<div class="verify-success"><strong>✓ Certificate Verified!</strong><br><small>This certificate was issued by CyberHunt.</small></div><div class="cert-card" style="margin-top:14px"><div class="certificate-art"><div class="eyebrow">CERTIFICATE OF COMPLETION</div><div class="cert-name">' + c.name + '</div><p>has successfully completed the</p><strong class="cert-red">' + c.course.toUpperCase() + '</strong></div><div class="cert-info"><div class="cert-info-grid"><div>Course<b>' + c.course + '</b></div><div>Certificate ID<b>' + id + '</b></div><div>Issue Date<b>' + c.date + '</b></div><div>Level<b>' + c.level + '</b></div></div></div></div>'} else {res.className = 'verify-result show'; res.innerHTML = '<div class="verify-fail"><strong>✕ Certificate Not Found</strong><br><small>No CyberHunt certificate matches this ID. Check the ID and try again.</small></div>'} } form?.addEventListener('submit', e => {e.preventDefault(); run()}); if (input?.value) run()})();
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
<script type="module" src="js/firebase-session.js"></script></body>

</html>
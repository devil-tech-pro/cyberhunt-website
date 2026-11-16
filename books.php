<?php require_once __DIR__ . '/includes/bootstrap.php'; ?>
<!doctype html>
<html lang="en">

<head><?php if (function_exists("csrf_token")): ?>
    <meta name="csrf-token" content="<?= e(csrf_token()) ?>"><?php endif; ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="theme-color" content="#ffffff">
  <title>CyberHunt — Books</title>
  <link rel="icon" href="assets/favicon.svg">
  <link rel="stylesheet" href="css/styles.css">
</head>

<body data-page="books">
  
   <?php include 'includes/header.php';?>

  <main id="page-content">
    <section class="page-hero books-hero reference-page-hero section-poster-hero">
      <div class="reference-hero-art section-poster" aria-hidden="true"><img class="hero-art-light"
          src="assets/poster-books-light.png" alt=""><img class="hero-art-dark" src="assets/poster-books-dark.png"
          alt="">
        <div class="reference-hero-shade"></div>
      </div>
      <div class="page-hero-inner">
        <div class="eyebrow">READ · LEARN · BUILD</div>
        <h1>CYBERHUNT <em>BOOKS</em></h1>
        <p>Explore practical cybersecurity books and learning guides. Choose a title to view its original cover.</p>
      </div>
    </section>
    <section class="section books-section">
      <div class="section-head">
        <span class="eyebrow">THE LIBRARY</span>
        <h2>Explore Our Books</h2>
        <p>Four titles covering web security, cybersecurity fundamentals, ethical hacking and digital investigation.</p>
      </div>
      <div class="books-grid">
        <article class="book-card">
          <a class="book-cover-link" href="assets/book-web-security-handbook.png" target="_blank" rel="noopener">
            <img src="assets/book-web-security-handbook.png" alt="Web Security Handbook book cover">
          </a>
          <div class="book-info"><span class="pill red">WEB SECURITY</span>
            <h3>Web Security Handbook</h3>
            <p>A beginner-friendly guide to web application security.</p><a class="book-action"
              href="assets/book-web-security-handbook.png" target="_blank" rel="noopener">View Book Cover
              <span>→</span></a>
          </div>
        </article>
        <article class="book-card">
          <a class="book-cover-link" href="assets/book-cybersecurity-for-everyone.png" target="_blank" rel="noopener">
            <img src="assets/book-cybersecurity-for-everyone.png" alt="Cybersecurity for Everyone book cover">
          </a>
          <div class="book-info"><span class="pill blue">FUNDAMENTALS</span>
            <h3>Cybersecurity for Everyone</h3>
            <p>An introduction to cybersecurity concepts for all learners.</p><a class="book-action"
              href="assets/book-cybersecurity-for-everyone.png" target="_blank" rel="noopener">View Book Cover
              <span>→</span></a>
          </div>
        </article>
        <article class="book-card">
          <a class="book-cover-link" href="assets/book-ethical-hacking-v9.png" target="_blank" rel="noopener">
            <img src="assets/book-ethical-hacking-v9.png" alt="Ultimate Ethical Hacking Course Book V9 cover">
          </a>
          <div class="book-info"><span class="pill green">ETHICAL HACKING</span>
            <h3>Ultimate Ethical Hacking Course Book V9</h3>
            <p>A course-book style introduction to ethical hacking.</p><a class="book-action"
              href="assets/book-ethical-hacking-v9.png" target="_blank" rel="noopener">View Book Cover
              <span>→</span></a>
          </div>
        </article>
        <article class="book-card">
          <a class="book-cover-link" href="assets/book-think-like-a-criminal.png" target="_blank" rel="noopener">
            <img src="assets/book-think-like-a-criminal.png" alt="Think Like a Criminal book cover">
          </a>
          <div class="book-info"><span class="pill red">CYBER INVESTIGATION</span>
            <h3>Think Like a Criminal</h3>
            <p>Explore the mindset and methods behind solving cyber crimes.</p><a class="book-action"
              href="assets/book-think-like-a-criminal.png" target="_blank" rel="noopener">View Book Cover
              <span>→</span></a>
          </div>
        </article>
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
    document.getElementById('courseSearch')?.addEventListener('input', function () {const q = this.value.toLowerCase().trim(); document.querySelectorAll('#courseGrid .item-card').forEach(card => card.style.display = card.textContent.toLowerCase().includes(q) ? '' : 'none')});</script>
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
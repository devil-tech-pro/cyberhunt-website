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

<body data-page="quizzes">
   <?php include 'includes/header.php';?>

  <main id="page-content">
    <section class="page-hero reference-page-hero section-poster-hero">
      <div class="reference-hero-art section-video-art" aria-hidden="true"><video class="section-hero-video" autoplay
          muted loop playsinline preload="metadata" disablepictureinpicture>
          <source src="assets/quize.mp4" type="video/mp4">
        </video>
        <div class="section-video-fade"></div>
      </div>
      <div class="page-index">03<i></i></div>
      <div class="page-hero-inner">
        <div class="eyebrow">LEARN · EXPLORE · SECURE</div>
        <h1>TEST YOUR <em>KNOWLEDGE</em></h1>
        <p>Quizzes to practice, improve and master your cybersecurity skills.</p>
      </div>
    </section>
    <section class="feature-strip">
      <div class="feature-item"><span class="fi-icon">✓</span><b>10+ Quizzes Available</b><small>Topic based
          practice</small></div>
      <div class="feature-item"><span class="fi-icon">♙</span><b>5K+ Learners</b><small>Practicing daily</small></div>
      <div class="feature-item"><span class="fi-icon">♜</span><b>Track Progress</b><small>Improve daily</small></div>
      <div class="feature-item"><span class="fi-icon">◎</span><b>Real World Questions</b><small>Build practical
          skills</small></div>
    </section>
    <div class="content-layout">
      <aside class="sidebar">
        <div class="side-title">☷ &nbsp; Categories</div><a class="side-link " href="courses.php">All
          Courses<span>15</span></a><a class="side-link " href="#">Cybersecurity Basics<span>3</span></a><a
          class="side-link " href="#">Networking<span>2</span></a><a class="side-link "
          href="#">Linux<span>2</span></a><a class="side-link " href="#">Ethical Hacking<span>3</span></a><a
          class="side-link " href="#">Web Security<span>2</span></a><a class="side-link "
          href="#">Python<span>1</span></a><a class="side-link " href="#">Tools & Tech<span>1</span></a><a
          class="side-link " href="#">Other<span>1</span></a>
        <div class="side-promo"><b>LEARN<br><span style="color:var(--red)">PRACTICE</span><br>GROW</b>
          <p>Access quality resources and level up your cybersecurity skills.</p><a class="btn btn-outline"
            href="courses.php">Explore Courses →</a>
        </div>
      </aside>
      <section>
        <div class="toolbar"><input id="quizSearch" class="search" placeholder="Search quizzes..."><select
            class="select">
            <option>Latest</option>
            <option>Popular</option>
          </select></div>
        <div id="quizGrid" class="card-grid"><a class="item-card" href="quiz.php?id=cybersecurity">
            <div class="card-cover cover-red"><span class="pill green"
                style="position:absolute;left:13px;top:12px">POPULAR</span></div>
            <div class="card-body">
              <h3>Cybersecurity Basics</h3>
              <p>Test your fundamental knowledge of cybersecurity concepts.</p>
              <div class="card-meta">▤ 10 Questions · ◷ 15 Min <span class="card-arrow">→</span></div><span
                class="btn btn-dark" style="width:100%;margin-top:12px;padding:8px">Start Quiz →</span>
            </div>
          </a><a class="item-card" href="quiz.php?id=linux">
            <div class="card-cover cover-kali"><span class="pill green"
                style="position:absolute;left:13px;top:12px">BEGINNER</span></div>
            <div class="card-body">
              <h3>Linux Fundamentals</h3>
              <p>Questions on basic to intermediate Linux concepts and commands.</p>
              <div class="card-meta">▤ 10 Questions · ◷ 12 Min <span class="card-arrow">→</span></div><span
                class="btn btn-dark" style="width:100%;margin-top:12px;padding:8px">Start Quiz →</span>
            </div>
          </a><a class="item-card" href="quiz.php?id=networking">
            <div class="card-cover cover-blue"><span class="pill blue"
                style="position:absolute;left:13px;top:12px">INTERMEDIATE</span></div>
            <div class="card-body">
              <h3>Networking Basics</h3>
              <p>Test your knowledge of IP, DNS, subnetting, routing and more.</p>
              <div class="card-meta">▤ 10 Questions · ◷ 15 Min <span class="card-arrow">→</span></div><span
                class="btn btn-dark" style="width:100%;margin-top:12px;padding:8px">Start Quiz →</span>
            </div>
          </a><a class="item-card" href="quiz.php?id=ethical-hacking">
            <div class="card-cover cover-red"><span class="pill red"
                style="position:absolute;left:13px;top:12px">TRENDING</span></div>
            <div class="card-body">
              <h3>Ethical Hacking</h3>
              <p>Explore your understanding of real-world hacking techniques.</p>
              <div class="card-meta">▤ 10 Questions · ◷ 20 Min <span class="card-arrow">→</span></div><span
                class="btn btn-dark" style="width:100%;margin-top:12px;padding:8px">Start Quiz →</span>
            </div>
          </a><a class="item-card" href="quiz.php?id=web-security">
            <div class="card-cover cover-lock"><span class="pill blue"
                style="position:absolute;left:13px;top:12px">INTERMEDIATE</span></div>
            <div class="card-body">
              <h3>Web Security</h3>
              <p>Test your knowledge on OWASP, XSS, SQLi and more.</p>
              <div class="card-meta">▤ 10 Questions · ◷ 15 Min <span class="card-arrow">→</span></div><span
                class="btn btn-dark" style="width:100%;margin-top:12px;padding:8px">Start Quiz →</span>
            </div>
          </a><a class="item-card" href="quiz.php?id=python">
            <div class="card-cover cover-python"><span class="pill green"
                style="position:absolute;left:13px;top:12px">BEGINNER</span></div>
            <div class="card-body">
              <h3>Python for Security</h3>
              <p>Basic Python concepts for cybersecurity and automation.</p>
              <div class="card-meta">▤ 10 Questions · ◷ 12 Min <span class="card-arrow">→</span></div><span
                class="btn btn-dark" style="width:100%;margin-top:12px;padding:8px">Start Quiz →</span>
            </div>
          </a><a class="item-card" href="quiz.php?id=forensics">
            <div class="card-cover cover-lock"><span class="pill green"
                style="position:absolute;left:13px;top:12px">BEGINNER</span></div>
            <div class="card-body">
              <h3>Digital Forensics</h3>
              <p>Evidence and investigation concepts.</p>
              <div class="card-meta">▤ 10 Questions · ◷ 10 Min <span class="card-arrow">→</span></div><span
                class="btn btn-dark" style="width:100%;margin-top:12px;padding:8px">Start Quiz →</span>
            </div>
          </a><a class="item-card" href="quiz.php?id=tools">
            <div class="card-cover cover-blue"><span class="pill green"
                style="position:absolute;left:13px;top:12px">BEGINNER</span></div>
            <div class="card-body">
              <h3>Security Tools</h3>
              <p>Identify tools and understand their common security uses.</p>
              <div class="card-meta">▤ 10 Questions · ◷ 12 Min <span class="card-arrow">→</span></div><span
                class="btn btn-dark" style="width:100%;margin-top:12px;padding:8px">Start Quiz →</span>
            </div>
          </a><a class="item-card" href="quiz.php?id=awareness">
            <div class="card-cover cover-red"><span class="pill green"
                style="position:absolute;left:13px;top:12px">BEGINNER</span></div>
            <div class="card-body">
              <h3>Cyber Awareness</h3>
              <p>Everyday digital safety and security decisions.</p>
              <div class="card-meta">▤ 10 Questions · ◷ 10 Min <span class="card-arrow">→</span></div><span
                class="btn btn-dark" style="width:100%;margin-top:12px;padding:8px">Start Quiz →</span>
            </div>
          </a></div>
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
    document.getElementById('quizSearch')?.addEventListener('input', function () {const q = this.value.toLowerCase().trim(); document.querySelectorAll('#quizGrid .item-card').forEach(card => card.style.display = card.textContent.toLowerCase().includes(q) ? '' : 'none')});</script>
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
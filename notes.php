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

<body data-page="notes">
   <?php include 'includes/header.php';?>

  <main id="page-content">
    <section class="page-hero reference-page-hero section-poster-hero">
      <div class="reference-hero-art section-video-art" aria-hidden="true"><video class="section-hero-video" autoplay
          muted loop playsinline preload="metadata" disablepictureinpicture>
          <source src="assets/study.mp4" type="video/mp4">
        </video>
        <div class="section-video-fade"></div>
      </div>
      <div class="page-index">03<i></i></div>
      <div class="page-hero-inner">
        <div class="eyebrow">LEARN · EXPLORE · SECURE</div>
        <h1>STUDY <em>NOTES</em></h1>
        <p>Well-organized notes for every topic. Learn at your own pace. Build real skills.</p>
      </div>
    </section>
    <div class="content-layout">
      <aside class="sidebar">
        <div class="side-title">☷ &nbsp; Categories</div><a class="side-link active" href="courses.php">All
          Courses<span>120</span></a><a class="side-link " href="#">Cybersecurity Basics<span>3</span></a><a
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
        <div class="toolbar"><input id="noteSearch" class="search" placeholder="Search notes..."><select class="select">
            <option>Latest</option>
            <option>Popular</option>
          </select></div>
        <div id="noteGrid" class="card-grid"><a class="item-card" href="note.php?id=kali-linux">
            <div class="card-cover cover-kali"><span class="pill cyan"
                style="position:absolute;left:13px;top:12px">LINUX</span></div>
            <div class="card-body">
              <h3>Kali Linux Basics</h3>
              <p>Installation, basic commands, file system, and useful tools.</p>
              <div class="card-meta">▤ PDF · 2.8 MB <span class="card-arrow">→</span></div>
            </div>
          </a><a class="item-card" href="note.php?id=networking">
            <div class="card-cover cover-blue"><span class="pill cyan"
                style="position:absolute;left:13px;top:12px">NETWORKING</span></div>
            <div class="card-body">
              <h3>Networking Basics</h3>
              <p>IP addressing, subnetting, protocols and more.</p>
              <div class="card-meta">▤ PDF · 3.1 MB <span class="card-arrow">→</span></div>
            </div>
          </a><a class="item-card" href="note.php?id=cybersecurity">
            <div class="card-cover cover-lock"><span class="pill cyan"
                style="position:absolute;left:13px;top:12px">CYBERSECURITY</span></div>
            <div class="card-body">
              <h3>Introduction to Cybersecurity</h3>
              <p>The fundamentals, key concepts and career opportunities.</p>
              <div class="card-meta">▤ PDF · 2.4 MB <span class="card-arrow">→</span></div>
            </div>
          </a><a class="item-card" href="note.php?id=ethical-hacking">
            <div class="card-cover cover-red"><span class="pill cyan"
                style="position:absolute;left:13px;top:12px">ETHICAL HACKING</span></div>
            <div class="card-body">
              <h3>Ethical Hacking Fundamentals</h3>
              <p>Phases, methodologies, and essential tools.</p>
              <div class="card-meta">▤ PDF · 3.6 MB <span class="card-arrow">→</span></div>
            </div>
          </a><a class="item-card" href="note.php?id=web-security">
            <div class="card-cover cover-lock"><span class="pill cyan" style="position:absolute;left:13px;top:12px">WEB
                SECURITY</span></div>
            <div class="card-body">
              <h3>Web Application Security</h3>
              <p>OWASP, vulnerabilities, and protection techniques.</p>
              <div class="card-meta">▤ PDF · 2.9 MB <span class="card-arrow">→</span></div>
            </div>
          </a><a class="item-card" href="note.php?id=python">
            <div class="card-cover cover-python"><span class="pill cyan"
                style="position:absolute;left:13px;top:12px">PYTHON</span></div>
            <div class="card-body">
              <h3>Python for Cybersecurity</h3>
              <p>Basic to advanced Python concepts with practical examples.</p>
              <div class="card-meta">▤ PDF · 4.2 MB <span class="card-arrow">→</span></div>
            </div>
          </a><a class="item-card" href="note.php?id=forensics">
            <div class="card-cover cover-lock"><span class="pill cyan"
                style="position:absolute;left:13px;top:12px">DIGITAL FORENSICS</span></div>
            <div class="card-body">
              <h3>Digital Forensics Basics</h3>
              <p>Evidence collection, analysis and forensic tools overview.</p>
              <div class="card-meta">▤ PDF · 2.7 MB <span class="card-arrow">→</span></div>
            </div>
          </a><a class="item-card" href="note.php?id=tools">
            <div class="card-cover cover-blue"><span class="pill cyan"
                style="position:absolute;left:13px;top:12px">TOOLS &amp; TECH</span></div>
            <div class="card-body">
              <h3>Essential Cybersecurity Tools</h3>
              <p>Nmap, Wireshark, Burp Suite, Metasploit and more.</p>
              <div class="card-meta">▤ PDF · 3.5 MB <span class="card-arrow">→</span></div>
            </div>
          </a><a class="item-card" href="note.php?id=awareness">
            <div class="card-cover cover-red"><span class="pill cyan"
                style="position:absolute;left:13px;top:12px">OTHER</span></div>
            <div class="card-body">
              <h3>Cyber Awareness</h3>
              <p>Stay safe online. Tips, best practices and real-world cases.</p>
              <div class="card-meta">▤ PDF · 1.9 MB <span class="card-arrow">→</span></div>
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
    document.getElementById('noteSearch')?.addEventListener('input', function () {const q = this.value.toLowerCase().trim(); document.querySelectorAll('#noteGrid .item-card').forEach(card => card.style.display = card.textContent.toLowerCase().includes(q) ? '' : 'none')});</script>
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
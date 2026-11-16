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

<body data-page="courses">
  
    <?php include 'includes/header.php';?>

  <main id="page-content">
    <section class="page-hero reference-page-hero section-poster-hero">
      <div class="reference-hero-art section-video-art" aria-hidden="true"><video class="section-hero-video" autoplay
          muted loop playsinline preload="metadata" disablepictureinpicture>
          <source src="assets/course.mp4" type="video/mp4">
        </video>
        <div class="section-video-fade"></div>
      </div>
      <div class="page-index">03<i></i></div>
      <div class="page-hero-inner">
        <div class="eyebrow">LEARN · EXPLORE · SECURE</div>
        <h1>PRACTICAL <em>CYBER COURSES</em></h1>
        <p>Learn from zero to practical. Step by step courses designed for real skills, not just theory.</p>
      </div>
    </section>
    <section class="feature-strip">
      <div class="feature-item"><span class="fi-icon">◈</span><b>Beginner Friendly</b><small>Start from basics</small>
      </div>
      <div class="feature-item"><span class="fi-icon">▤</span><b>Step by Step Learning</b><small>Structured
          content</small></div>
      <div class="feature-item"><span class="fi-icon">◎</span><b>Practical Approach</b><small>Real world
          concepts</small></div>
      <div class="feature-item"><span class="fi-icon">◇</span><b>Get Certified</b><small>Showcase your skills</small>
      </div>
    </section>
    <div class="content-layout">
      <aside class="sidebar">
        <div class="side-title">☷ &nbsp; Categories</div><a class="side-link active" href="courses.php">All
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
        <div class="toolbar"><input id="courseSearch" class="search" placeholder="Search courses..."><select
            class="select" id="courseSort">
            <option>Popular</option>
            <option>Newest</option>
          </select></div>
        <div id="courseGrid" class="card-grid"><a class="item-card" href="course.php?id=kali-linux">
            <div class="card-cover cover-kali"><span class="pill green"
                style="position:absolute;left:13px;top:12px">BEGINNER</span>
              <div class="cover-title">Kali Linux for Beginners</div>
            </div>
            <div class="card-body">
              <h3>Kali Linux for Beginners</h3>
              <p>Complete guide to install, setup and use Kali Linux with essential commands.</p>
              <div class="card-meta">▤ 8 Modules · ◷ 4h 20m <span class="card-arrow">→</span></div><span
                class="course-check" aria-label="Course available">✓</span>
            </div>
          </a><a class="item-card" href="course.php?id=ethical-hacking">
            <div class="card-cover cover-red"><span class="pill green"
                style="position:absolute;left:13px;top:12px">BEGINNER</span>
              <div class="cover-title">Ethical Hacking Fundamentals</div>
            </div>
            <div class="card-body">
              <h3>Ethical Hacking Fundamentals</h3>
              <p>Learn the core concepts, tools and techniques of ethical hacking.</p>
              <div class="card-meta">▤ 10 Modules · ◷ 6h 15m <span class="card-arrow">→</span></div><span
                class="course-check" aria-label="Course available">✓</span>
            </div>
          </a><a class="item-card" href="course.php?id=networking">
            <div class="card-cover cover-blue"><span class="pill green"
                style="position:absolute;left:13px;top:12px">BEGINNER</span>
              <div class="cover-title">Networking Fundamentals</div>
            </div>
            <div class="card-body">
              <h3>Networking Fundamentals</h3>
              <p>Understand IP addressing, subnetting, protocols and more.</p>
              <div class="card-meta">▤ 8 Modules · ◷ 5h 10m <span class="card-arrow">→</span></div><span
                class="course-check" aria-label="Course available">✓</span>
            </div>
          </a><a class="item-card" href="course.php?id=python-security">
            <div class="card-cover cover-python"><span class="pill green"
                style="position:absolute;left:13px;top:12px">BEGINNER</span>
              <div class="cover-title">Python for Cybersecurity</div>
            </div>
            <div class="card-body">
              <h3>Python for Cybersecurity</h3>
              <p>Learn Python from scratch for automation, scripting and security tools.</p>
              <div class="card-meta">▤ 10 Modules · ◷ 4h 30m <span class="card-arrow">→</span></div><span
                class="course-check" aria-label="Course available">✓</span>
            </div>
          </a><a class="item-card" href="course.php?id=web-security">
            <div class="card-cover cover-lock"><span class="pill blue"
                style="position:absolute;left:13px;top:12px">INTERMEDIATE</span>
              <div class="cover-title">Web Application Security</div>
            </div>
            <div class="card-body">
              <h3>Web Application Security</h3>
              <p>Learn about OWASP, vulnerabilities and real world attack techniques.</p>
              <div class="card-meta">▤ 8 Modules · ◷ 5h 40m <span class="card-arrow">→</span></div><span
                class="course-check" aria-label="Course available">✓</span>
            </div>
          </a><a class="item-card" href="course.php?id=security-tools">
            <div class="card-cover cover-blue"><span class="pill green"
                style="position:absolute;left:13px;top:12px">BEGINNER</span>
              <div class="cover-title">Essential Cybersecurity Tools</div>
            </div>
            <div class="card-body">
              <h3>Essential Cybersecurity Tools</h3>
              <p>Hands-on guide to Nmap, Wireshark, Burp Suite, Metasploit and more.</p>
              <div class="card-meta">▤ 6 Modules · ◷ 4h 00m <span class="card-arrow">→</span></div><span
                class="course-check" aria-label="Course available">✓</span>
            </div>
          </a><a class="item-card" href="course.php?id=forensics">
            <div class="card-cover cover-lock"><span class="pill blue"
                style="position:absolute;left:13px;top:12px">INTERMEDIATE</span>
              <div class="cover-title">Digital Forensics Basics</div>
            </div>
            <div class="card-body">
              <h3>Digital Forensics Basics</h3>
              <p>Evidence collection, analysis and forensic tools overview.</p>
              <div class="card-meta">▤ 7 Modules · ◷ 5h 20m <span class="card-arrow">→</span></div><span
                class="course-check" aria-label="Course available">✓</span>
            </div>
          </a><a class="item-card" href="course.php?id=osint">
            <div class="card-cover cover-blue"><span class="pill blue"
                style="position:absolute;left:13px;top:12px">INTERMEDIATE</span>
              <div class="cover-title">OSINT - Open Source Intelligence</div>
            </div>
            <div class="card-body">
              <h3>OSINT - Open Source Intelligence</h3>
              <p>Learn how to find information using open source tools.</p>
              <div class="card-meta">▤ 7 Modules · ◷ 4h 50m <span class="card-arrow">→</span></div><span
                class="course-check" aria-label="Course available">✓</span>
            </div>
          </a><a class="item-card" href="course.php?id=awareness">
            <div class="card-cover cover-red"><span class="pill green"
                style="position:absolute;left:13px;top:12px">BEGINNER</span>
              <div class="cover-title">Cybersecurity Awareness</div>
            </div>
            <div class="card-body">
              <h3>Cybersecurity Awareness</h3>
              <p>Stay safe online. Learn real-world threats and how to avoid them.</p>
              <div class="card-meta">▤ 5 Modules · ◷ 3h 10m <span class="card-arrow">→</span></div><span
                class="course-check" aria-label="Course available">✓</span>
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
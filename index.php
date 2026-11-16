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

<body data-page="home">

  <?php include 'includes/header.php';?>

  <main id="page-content">
    <section class="hero hero-home">
      <div class="reference-hero-art"><img class="hero-art-light" src="assets/hero-reference-exact.png"
          alt="CyberHunt cyber skills artwork"><img class="hero-art-dark" src="assets/hero-dark-reference-exact.png"
          alt="">
        <div class="hero-art-overlay"></div>
      </div>
      <div class="hero-inner">
        <div class="hero-copy">
          <div class="eyebrow">LEARN · EXPLORE · SECURE</div>
          <h1>BUILD YOUR<br><em>CYBER SKILLS</em><span class="cursor"></span></h1>
          <p>Practical learning. Real resources.<br>A safer digital world.</p>
          <div class="hero-actions"><a class="btn btn-dark" href="courses.php">Explore Courses →</a><a
              class="btn btn-outline" href="notes.php">Browse Notes</a></div>
          <div class="stats">
            <div><strong>10K+</strong><span>Learners</span></div>
            <div><strong>50+</strong><span>Resources</span></div>
            <div><strong>100%</strong><span>Focused on Cybersecurity</span></div>
          </div>
        </div>
        <div class="home-hero-side">
          <div class="home-scribble">Learn<br>Explore<br>Secure</div>
          <div class="home-rail">NOT JUST<br>NOTES.<br>A COMMUNITY<br>OF CURIOUS MINDS.</div>
        </div>
      </div>
    </section>
    <section class="home-feature-strip"><a href="notes.php"><span class="home-feature-icon">▱</span><b>Study
          Notes</b><small>Well-organized notes<br>for every topic</small></a><a href="courses.php"><span
          class="home-feature-icon">♢</span><b>Courses</b><small>Learn step by step<br>with practical
          content</small></a><a href="certificates.php"><span
          class="home-feature-icon">▤</span><b>Certificates</b><small>Get certified & validate<br>your
          skills</small></a><a href="quizzes.php"><span class="home-feature-icon">☷</span><b>Quizzes</b><small>Test your
          knowledge<br>and track progress</small></a>
      <div class="feature-script">Same<br>Curiosity<br>Bigger<br>Skills.</div>
    </section>
    <section class="section start-section">
      <div class="section-head">
        <div class="kicker">START HERE</div>
        <h2>What do you want to explore?</h2>
        <p>Choose your path and start learning today.</p>
      </div>
      <div class="topic-grid"><a class="topic-card red-glow" href="courses.php"><span>⌘</span><b>Cybersecurity
            Basics</b><i>→</i></a><a class="topic-card "
          href="courses.php"><span>♧</span><b>Networking</b><i>→</i></a><a class="topic-card "
          href="courses.php"><span>♙</span><b>Linux</b><i>→</i></a><a class="topic-card red-glow"
          href="courses.php"><span>⌁</span><b>Ethical Hacking</b><i>→</i></a><a class="topic-card "
          href="courses.php"><span>◎</span><b>Web Security</b><i>→</i></a><a class="topic-card "
          href="courses.php"><span>⚙</span><b>Tools & Tech</b><i>→</i></a></div>
    </section>
    <section class="section resources-section">
      <div class="section-head row">
        <div>
          <h2>Popular Resources</h2>
        </div><a class="text-link" href="courses.php">View All →</a>
      </div>
      <div class="resource-grid"><a class="resource-card" href="note.php?id=kali-linux"><span
            class="pill cyan">NOTES</span>
          <h3>Kali Linux Basics</h3>
          <p>Complete notes with commands, installation and practical examples.</p>
          <div class="resource-meta">▤ PDF · Updated <span>→</span></div>
        </a><a class="resource-card" href="course.php?id=ethical-hacking"><span class="pill green">COURSE</span>
          <h3>Ethical Hacking Fundamentals</h3>
          <p>Start your hacking journey with hands-on learning.</p>
          <div class="resource-meta">▣ Beginner · 8 Modules <span>→</span></div>
        </a><a class="resource-card" href="quiz.php?id=networking"><span class="pill red">QUIZ</span>
          <h3>Networking Fundamentals</h3>
          <p>Test your networking knowledge with 20 MCQs.</p>
          <div class="resource-meta">▤ 20 Questions <span>→</span></div>
        </a></div>
    </section>
    <section class="closing-banner mountain-banner"><img src="assets/bottom-mountain-exact.png" alt="">
      <div class="closing-copy">
        <div class="eyebrow">START HERE</div>
        <h2>Be a part of<br>something meaningful.</h2>
        <p>Learn. Share. Grow. Let’s build a safer digital world together with CyberHunt.</p><a class="btn btn-dark"
          href="courses.php">Join Now →</a>
      </div>
      <div class="closing-stats"><b>15K+<small>Community</small></b><b>100+<small>Learning
            Resources</small></b><b>∞<small>Possibilities</small></b></div>
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
        try { localStorage.setItem(THEME_KEY, safe) } catch (e) { }
        const b = document.getElementById('themeToggle');
        if (b) { b.textContent = safe === 'dark' ? '☀' : '☾'; b.setAttribute('aria-label', safe === 'dark' ? 'Switch to light theme' : 'Switch to dark theme'); }
      }
      let saved = null; try { saved = localStorage.getItem(THEME_KEY) } catch (e) { }
      setTheme(saved || (matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'));
      document.getElementById('themeToggle')?.addEventListener('click', () => setTheme(root.dataset.theme === 'dark' ? 'light' : 'dark'));
      document.getElementById('menuToggle')?.addEventListener('click', () => document.getElementById('navLinks')?.classList.toggle('open'));
      const courseNav = document.getElementById('coursesNav');
      courseNav?.addEventListener('click', function (e) {
        if (matchMedia('(max-width:760px)').matches) { e.preventDefault(); this.closest('.course-dropdown')?.classList.toggle('open'); }
      });
      document.querySelectorAll('.reveal').forEach(el => {
        if ('IntersectionObserver' in window) { const io = new IntersectionObserver(entries => entries.forEach(x => { if (x.isIntersecting) { x.target.classList.add('visible'); io.unobserve(x.target) } }), { threshold: .08 }); io.observe(el) } else el.classList.add('visible');
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
        const tick = function () {
          if (i < text.length) { el.textContent += text.charAt(i++); setTimeout(tick, 70); }
        };
        tick();
      });
    })();
  </script>
<script type="module" src="js/firebase-session.js"></script></body>

</html>
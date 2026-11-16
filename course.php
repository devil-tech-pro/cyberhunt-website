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

<body data-page="course-detail">
  
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
        <h1>Kali Linux <em>for Beginners</em></h1>
        <p>A practical CyberHunt course built around concepts, tools and repeatable skills.</p>
      </div>
    </section>
    <section class="section">
      <div class="dashboard-card"><span class="pill green">BEGINNER</span>
        <h2>Kali Linux for Beginners</h2>
        <p>Complete guide to install, setup and use Kali Linux with essential commands.</p>
        <div class="cert-info-grid">
          <div>Modules<b>8 Modules</b></div>
          <div>Duration<b>4h 20m</b></div>
          <div>Level<b>Beginner</b></div>
          <div>Access<b>Online</b></div>
        </div><button class="btn btn-dark" type="button" id="startCourseBtn">Start Course →</button>
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
<script type="module">import {auth,onAuthStateChanged,doc,setDoc,db,serverTimestamp} from './js/firebase.js'; const btn=document.getElementById('startCourseBtn'); btn?.addEventListener('click',async()=>{const user=auth.currentUser;if(!user){location.href='login.php';return;}btn.disabled=true;try{await setDoc(doc(db,'enrollments',user.uid+'_kali-linux'),{uid:user.uid,courseId:'kali-linux',courseTitle:'Kali Linux for Beginners',status:'active',progressPercent:0,updatedAt:serverTimestamp()},{merge:true});location.href='my-courses.php';}catch(e){alert('Could not save enrollment: '+e.message);btn.disabled=false;}});</script><script type="module" src="js/firebase-session.js"></script><script type="module" src="js/firebase-data.js"></script></body>

</html>
(function () {
  const header = document.querySelector('[data-header]');
  const menuBtn = document.querySelector('[data-menu-btn]');
  const nav = document.querySelector('[data-nav]');

  function onScroll() {
    if (!header) return;
    header.classList.toggle('scrolled', window.scrollY > 16);
  }

  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();

  if (menuBtn && nav) {
    menuBtn.addEventListener('click', function () {
      nav.classList.toggle('open');
    });

    nav.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', function () {
        nav.classList.remove('open');
      });
    });
  }

  document.querySelectorAll('.js-letters').forEach(function (el) {
    const text = el.textContent.trim();
    el.textContent = '';

    text.split('').forEach(function (char, index) {
      const span = document.createElement('span');
      span.textContent = char === ' ' ? '\u00A0' : char;
      span.style.animationDelay = (index * 0.035) + 's';
      el.appendChild(span);
    });
  });

  const observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12 });

  document.querySelectorAll('.reveal').forEach(function (el) {
    observer.observe(el);
  });

  const params = new URLSearchParams(window.location.search);
  const utmFields = ['utm_source', 'utm_medium', 'utm_campaign'];

  utmFields.forEach(function (key) {
    const value = params.get(key) || localStorage.getItem(key) || '';
    if (value) {
      localStorage.setItem(key, value);
    }

    document.querySelectorAll('input[name="' + key + '"]').forEach(function (input) {
      input.value = value;
    });
  });

  document.querySelectorAll('input[name="page"]').forEach(function (input) {
    input.value = window.location.href;
  });
})();

/* ---------- PREMIUM INTRO LOGO ANIMATION ---------- */
(function () {
  const intro = document.querySelector('[data-intro]');
  if (!intro) return;

  const html = document.documentElement;
  const body = document.body;

  const prefersReducedMotion = window.matchMedia &&
    window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  const alreadySeen = sessionStorage.getItem('archa_intro_seen') === '1';

  function revealSite() {
    html.classList.remove('intro-lock');
    body.classList.remove('is-intro-running');

    requestAnimationFrame(function () {
      body.classList.add('site-reveal');
    });
  }

  if (alreadySeen || prefersReducedMotion) {
    intro.classList.add('skip');
    revealSite();
    return;
  }

  html.classList.add('intro-lock');
  body.classList.add('is-intro-running');

  let closed = false;

  function closeIntro() {
    if (closed) return;
    closed = true;

    intro.classList.add('intro-out');
    sessionStorage.setItem('archa_intro_seen', '1');

    setTimeout(function () {
      revealSite();
    }, 520);

    setTimeout(function () {
      intro.remove();
    }, 1350);
  }

  window.addEventListener('load', function () {
    setTimeout(closeIntro, 3100);
  });

  setTimeout(closeIntro, 5200);

  intro.addEventListener('click', closeIntro);
  window.addEventListener('keydown', function (event) {
    if (event.key === 'Escape' || event.key === 'Enter' || event.key === ' ') {
      closeIntro();
    }
  });
})();

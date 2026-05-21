/* ============================================================
   main.js — Interactions principales
   ============================================================ */

(function () {
  'use strict';

  // ── Scroll animations (Intersection Observer) ────────────
  const fadeEls = document.querySelectorAll('.fade-up');
  if (fadeEls.length && 'IntersectionObserver' in window) {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            observer.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.1, rootMargin: '0px 0px -40px 0px' }
    );
    fadeEls.forEach((el) => observer.observe(el));
  } else {
    fadeEls.forEach((el) => el.classList.add('visible'));
  }

  // ── Nav scroll effect ─────────────────────────────────────
  const nav = document.querySelector('.site-nav');
  if (nav) {
    const handleScroll = () => {
      nav.classList.toggle('scrolled', window.scrollY > 32);
    };
    window.addEventListener('scroll', handleScroll, { passive: true });
  }

  // ── Mobile nav toggle ─────────────────────────────────────
  const toggle = document.querySelector('.nav-toggle');
  const navLinks = document.querySelector('.nav-links');
  if (toggle && navLinks) {
    toggle.addEventListener('click', () => {
      const expanded = toggle.getAttribute('aria-expanded') === 'true';
      toggle.setAttribute('aria-expanded', String(!expanded));
      navLinks.classList.toggle('open', !expanded);
      document.body.style.overflow = !expanded ? 'hidden' : '';
    });

    // Close on link click
    navLinks.querySelectorAll('a').forEach((link) => {
      link.addEventListener('click', () => {
        toggle.setAttribute('aria-expanded', 'false');
        navLinks.classList.remove('open');
        document.body.style.overflow = '';
      });
    });

    // Close on Escape
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && navLinks.classList.contains('open')) {
        toggle.setAttribute('aria-expanded', 'false');
        navLinks.classList.remove('open');
        document.body.style.overflow = '';
        toggle.focus();
      }
    });
  }

  // ── Active nav link ───────────────────────────────────────
  const currentPath = window.location.pathname.replace(/\.php$/, '').replace(/\/$/, '') || '/index';
  document.querySelectorAll('.nav-links a').forEach((link) => {
    const href = link.getAttribute('href').replace(/\.php$/, '').replace(/\/$/, '') || '/index';
    if (currentPath === href || (currentPath === '' && href === '/index')) {
      link.classList.add('active');
    }
  });

  // ── Staggered fade-in for grid children ──────────────────
  document.querySelectorAll('.stagger-children > *').forEach((child, i) => {
    child.style.transitionDelay = `${i * 80}ms`;
    child.classList.add('fade-up');
  });

})();

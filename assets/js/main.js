/* ============================================================
   main.js — Interactions principales
   ============================================================ */

(function () {
  'use strict';

  // Nav scroll effect
  const nav = document.querySelector('.site-nav');
  if (nav) {
    window.addEventListener('scroll', function() {
      nav.classList.toggle('scrolled', window.scrollY > 32);
    }, { passive: true });
  }

  // Mobile nav toggle
  const toggle = document.querySelector('.nav-toggle');
  const navLinks = document.querySelector('.nav-links');
  if (toggle && navLinks) {
    toggle.addEventListener('click', function() {
      const expanded = toggle.getAttribute('aria-expanded') === 'true';
      toggle.setAttribute('aria-expanded', String(!expanded));
      navLinks.classList.toggle('open', !expanded);
      document.body.style.overflow = !expanded ? 'hidden' : '';
    });
    navLinks.querySelectorAll('a').forEach(function(link) {
      link.addEventListener('click', function() {
        toggle.setAttribute('aria-expanded', 'false');
        navLinks.classList.remove('open');
        document.body.style.overflow = '';
      });
    });
    document.addEventListener('keydown', function(e) {
      if (e.key === 'Escape' && navLinks.classList.contains('open')) {
        toggle.setAttribute('aria-expanded', 'false');
        navLinks.classList.remove('open');
        document.body.style.overflow = '';
      }
    });
  }

  // Active nav link
  const currentPath = window.location.pathname.replace(/\.php$/, '');
  document.querySelectorAll('.nav-links a[href]').forEach(function(link) {
    const href = link.getAttribute('href').replace(/\.php$/, '');
    if (currentPath === href || (currentPath === '/' && href === '/') || (currentPath === '' && href === '/')) {
      link.classList.add('active');
    }
  });

  // Stagger animation delays for grid children (CSS animation)
  document.querySelectorAll('.stagger-children').forEach(function(container) {
    Array.from(container.children).forEach(function(child, i) {
      child.style.setProperty('--anim-delay', (i * 80) + 'ms');
      child.classList.add('fade-up');
    });
  });

  // Image error fallback
  document.querySelectorAll('img[data-fallback]').forEach(function(img) {
    img.addEventListener('error', function() {
      const label = img.getAttribute('data-fallback');
      const parent = img.parentNode;
      const svg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
      svg.setAttribute('width', img.width || 120);
      svg.setAttribute('height', img.height || 48);
      svg.setAttribute('viewBox', '0 0 120 48');
      svg.setAttribute('aria-label', label);
      svg.innerHTML = '<rect width="120" height="48" rx="6" fill="#6366f1" fill-opacity="0.12" stroke="#6366f1" stroke-width="1.5"/><text x="60" y="28" dominant-baseline="middle" text-anchor="middle" fill="#6366f1" font-family="Inter,sans-serif" font-size="11" font-weight="600">' + label + '</text>';
      parent.replaceChild(svg, img);
    });
  });

})();

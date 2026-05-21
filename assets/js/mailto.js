/* ============================================================
   mailto.js — Déprotection des liens mailto côté client
   ============================================================ */

(function () {
  'use strict';

  document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.js-mailto').forEach(function (el) {
      el.addEventListener('click', function (e) {
        e.preventDefault();
        try {
          var u = atob(el.dataset.u);
          var d = atob(el.dataset.d);
          var subject = encodeURIComponent('Contact via guillaume.robier.org');
          window.location.href = 'mailto:' + u + '@' + d + '?subject=' + subject;
        } catch (err) {
          // Fallback silencieux
        }
      });
    });
  });

})();

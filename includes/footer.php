<?php
/**
 * Footer du site
 */
?>
</main><!-- /#main-content -->

<footer class="site-footer" role="contentinfo">
  <div class="container">
    <div class="footer-grid">

      <!-- Brand -->
      <div class="footer-brand">
        <a href="/" class="nav-logo" style="display:inline-block;margin-bottom:0.5rem;" aria-label="Guillaume Robier">
          <span>gr</span>_robier
        </a>
        <p>Entrepreneur IT, architecte d'infrastructures, conseil stratégique. Dirigeant de SYIT et Odonaview.</p>
        <p style="margin-top:0.5rem;font-size:0.8rem;color:var(--text-muted);">Lyon, France</p>

        <!-- Social links -->
        <nav class="social-links" aria-label="Réseaux sociaux">
          <!-- LinkedIn -->
          <a href="<?= e(LINKEDIN_URL) ?>" target="_blank" rel="noopener noreferrer" class="social-link" aria-label="LinkedIn">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/>
              <rect x="2" y="9" width="4" height="12"/>
              <circle cx="4" cy="4" r="2"/>
            </svg>
          </a>
          <!-- Malt -->
          <a href="<?= e(MALT_URL) ?>" target="_blank" rel="noopener noreferrer" class="social-link" aria-label="Malt">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <polygon points="12 2 19 21 12 17 5 21 12 2"/>
            </svg>
          </a>
          <!-- GitHub -->
          <a href="<?= e(GITHUB_URL) ?>" target="_blank" rel="noopener noreferrer" class="social-link" aria-label="GitHub">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"/>
            </svg>
          </a>
        </nav>
      </div>

      <!-- Navigation -->
      <div>
        <p class="footer-title">Navigation</p>
        <nav class="footer-links" aria-label="Liens du site">
          <a href="/syit">SYIT</a>
          <a href="/odonaview">Odonaview</a>
          <a href="/expertise">Expertise</a>
          <a href="/realisations">Réalisations</a>
          <a href="/parcours">Parcours &amp; CV</a>
        </nav>
      </div>

      <!-- Contact -->
      <div>
        <p class="footer-title">Contact</p>
        <div class="footer-links">
          <?php echo mailto_link('Envoyer un email', 'btn-ghost', 'Envoyer un email à Guillaume Robier'); ?>
          <noscript>
            <span class="email-fallback" title="Email — lire de droite à gauche"><?= e(strrev(EMAIL_CONTACT)) ?></span>
          </noscript>
          <a href="<?= e(ODONAVIEW_URL) ?>" target="_blank" rel="noopener noreferrer">odonaview.com ↗</a>
          <a href="<?= e(EVITECH_URL) ?>" target="_blank" rel="noopener noreferrer">evitech.com ↗</a>
        </div>
      </div>

    </div><!-- /.footer-grid -->

    <div class="footer-bottom">
      <p>&copy; <?= date('Y') ?> Guillaume Robier. Tous droits réservés.</p>
      <p class="mono" style="font-size:0.75rem;">
        <a href="/humans.txt" style="color:var(--text-muted);transition:color var(--transition-fast);"
           onmouseover="this.style.color='var(--accent-1)'" onmouseout="this.style.color='var(--text-muted)'">
          humans.txt
        </a>
      </p>
    </div>
  </div>
</footer>

<!-- JS -->
<script src="/assets/js/mailto.js" defer></script>
<script src="/assets/js/main.js" defer></script>

</body>
</html>

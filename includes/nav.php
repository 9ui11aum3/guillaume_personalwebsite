<?php
/**
 * Navigation principale
 */
?>
<nav class="site-nav" role="navigation" aria-label="Navigation principale">
  <div class="nav-inner">
    <a href="/" class="nav-logo" aria-label="Guillaume Robier — Accueil">
      <span>gr</span>_robier
    </a>

    <button class="nav-toggle" aria-expanded="false" aria-controls="nav-links" aria-label="Ouvrir le menu">
      <span></span><span></span><span></span>
    </button>

    <ul class="nav-links" id="nav-links" role="list">
      <li><a href="/syit">SYIT</a></li>
      <li><a href="/odonaview">Odonaview</a></li>
      <li><a href="/expertise">Expertise</a></li>
      <li><a href="/realisations">Réalisations</a></li>
      <li><a href="/parcours">Parcours</a></li>
      <?php echo mailto_link('Contact', 'btn btn-primary btn-sm'); ?>
    </ul>
  </div>
</nav>

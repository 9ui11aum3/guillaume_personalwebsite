<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/helpers.php';

http_response_code(404);

$page_title = '404 — Page introuvable | Guillaume Robier';
$page_description = 'La page demandée n\'existe pas.';

include __DIR__ . '/includes/header.php';
?>

<section class="error-page" style="background:var(--gradient-deep);">
  <div style="text-align:center;">
    <div class="error-code">404</div>
    <h1 style="font-size:1.5rem;margin-bottom:var(--space-md);">Page introuvable</h1>
    <p style="color:var(--text-muted);margin-bottom:var(--space-2xl);max-width:400px;margin-inline:auto;">
      La page que vous cherchez n'existe pas ou a été déplacée.
    </p>
    <div style="display:flex;gap:var(--space-md);justify-content:center;flex-wrap:wrap;">
      <a href="/" class="btn btn-primary">Retour à l'accueil</a>
      <?php echo mailto_link('Me contacter', 'btn btn-secondary'); ?>
    </div>

    <div style="margin-top:var(--space-3xl);">
      <p style="font-family:var(--font-mono);font-size:0.75rem;color:var(--text-muted);">
        // Navigation rapide
      </p>
      <nav style="display:flex;flex-wrap:wrap;gap:var(--space-sm);justify-content:center;margin-top:var(--space-md);">
        <a href="/syit"        class="badge badge-accent">SYIT</a>
        <a href="/odonaview"   class="badge badge-cyan">Odonaview</a>
        <a href="/expertise"   class="badge badge-neutral">Expertise</a>
        <a href="/realisations" class="badge badge-neutral">Réalisations</a>
        <a href="/parcours"    class="badge badge-neutral">Parcours</a>
      </nav>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>

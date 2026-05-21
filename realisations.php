<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/helpers.php';
require_once __DIR__ . '/includes/data.php';

$page_title = 'Réalisations — Guillaume Robier';
$page_description = 'Portfolio de projets IT : infrastructure, virtualisation, cybersécurité, IA vidéo, ERP. Projets pour EDF, TotalEnergies, GreenYellow et clients confidentiels.';

include __DIR__ . '/includes/header.php';
?>

<!-- ═══════════════════════════════════════════════════════
     HERO PAGE
     ═══════════════════════════════════════════════════════ -->
<section class="page-hero">
  <div class="container" style="position:relative;z-index:1;">
    <span style="display:block;font-family:var(--font-mono);font-size:0.75rem;font-weight:600;letter-spacing:0.15em;text-transform:uppercase;color:var(--accent-1);margin-bottom:var(--space-sm);">// portfolio</span>
    <h1 class="fade-up" style="margin-bottom:var(--space-lg);">Réalisations <span class="gradient-text">marquantes</span></h1>
    <p class="lead fade-up" style="max-width:560px;margin-inline:auto;--anim-delay:80ms;">
      Projets concrets, résultats mesurables. Infrastructure, sécurité, IA, ERP — des mandats variés avec des clients exigeants.
    </p>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     GRILLE PROJETS
     ═══════════════════════════════════════════════════════ -->
<section aria-labelledby="projets-title">
  <div class="container">
    <h2 id="projets-title" class="sr-only">Tous les projets</h2>

    <div class="grid-3 stagger-children">
      <?php foreach ($realisations as $proj): ?>
        <article class="card project-card" id="<?= e($proj['id']) ?>">
          <!-- Icon + meta -->
          <div style="display:flex;align-items:flex-start;gap:var(--space-md);margin-bottom:var(--space-md);">
            <div class="card-icon" style="flex-shrink:0;">
              <?php echo icon($proj['icon']); ?>
            </div>
            <div class="project-meta" style="flex-direction:column;align-items:flex-start;gap:4px;margin-bottom:0;">
              <span style="font-size:0.75rem;color:var(--accent-3);font-family:var(--font-mono);"><?= e($proj['sector']) ?></span>
              <span style="font-size:0.7rem;color:var(--text-muted);"><?= e($proj['client']) ?> · <?= e($proj['year']) ?></span>
            </div>
          </div>

          <!-- Titre -->
          <h3 style="font-size:0.95rem;margin-bottom:var(--space-sm);"><?= e($proj['title']) ?></h3>

          <!-- Description -->
          <p class="card-body" style="font-size:0.875rem;line-height:1.65;"><?= e($proj['desc']) ?></p>

          <!-- Stack -->
          <div class="tags" style="margin-top:var(--space-md);">
            <?php foreach ($proj['stack'] as $t): ?>
              <span class="badge badge-neutral"><?= e($t) ?></span>
            <?php endforeach; ?>
          </div>

          <!-- Impact -->
          <div class="project-impact" style="margin-top:var(--space-md);">
            <strong style="font-size:0.75rem;text-transform:uppercase;letter-spacing:0.05em;display:block;margin-bottom:4px;">Résultat</strong>
            <?= e($proj['impact']) ?>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     CTA
     ═══════════════════════════════════════════════════════ -->
<section class="section-alt">
  <div class="container">
    <div class="cta-section fade-up">
      <h2 style="margin-bottom:var(--space-md);">Un projet similaire ?</h2>
      <p style="max-width:480px;margin-inline:auto;margin-bottom:var(--space-xl);">
        Chaque contexte est unique. Parlons-en pour évaluer comment je peux vous aider.
      </p>
      <?php echo mailto_link('Discuter de votre projet', 'btn btn-primary'); ?>
    </div>
  </div>
</section>

<?php
include __DIR__ . '/includes/footer.php';
?>

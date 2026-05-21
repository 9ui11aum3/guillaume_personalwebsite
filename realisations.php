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
              <?php echo render_icon_proj($proj['icon']); ?>
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

function render_icon_proj(string $name): string
{
    $icons = [
        'shield'    => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>',
        'server'    => '<rect x="2" y="2" width="20" height="8" rx="2"/><rect x="2" y="14" width="20" height="8" rx="2"/><line x1="6" y1="6" x2="6.01" y2="6"/><line x1="6" y1="18" x2="6.01" y2="18"/>',
        'network'   => '<rect x="9" y="2" width="6" height="6"/><rect x="16" y="16" width="6" height="6"/><rect x="2" y="16" width="6" height="6"/><path d="M5 16V8h14v8M12 8v8"/>',
        'briefcase' => '<rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 0 0-4 0v2M12 12v4M8 12v4"/>',
        'cpu'       => '<rect x="4" y="4" width="16" height="16" rx="2"/><rect x="9" y="9" width="6" height="6"/><line x1="9" y1="1" x2="9" y2="4"/><line x1="15" y1="1" x2="15" y2="4"/>',
        'layers'    => '<polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/>',
        'zap'       => '<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>',
        'lock'      => '<rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/>',
        'globe'     => '<circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>',
        'router'    => '<rect x="2" y="9" width="20" height="12" rx="2"/><path d="M8 9V5l4-3 4 3v4"/><line x1="6" y1="14" x2="6.01" y2="14"/>',
    ];
    $path = $icons[$name] ?? $icons['cpu'];
    return '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $path . '</svg>';
}

include __DIR__ . '/includes/footer.php';
?>

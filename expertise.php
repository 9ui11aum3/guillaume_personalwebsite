<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/helpers.php';
require_once __DIR__ . '/includes/data.php';

$page_title = 'Expertise — Guillaume Robier';
$page_description = 'Domaines d\'expertise de Guillaume Robier : sécurité IT, infrastructure serveurs, réseaux BGP, ERP & automatisation, stratégie IA. Conseil et accompagnement technique.';

include __DIR__ . '/includes/header.php';
?>

<!-- ═══════════════════════════════════════════════════════
     HERO
     ═══════════════════════════════════════════════════════ -->
<section class="page-hero">
  <div class="container" style="position:relative;z-index:1;">
    <span style="display:block;font-family:var(--font-mono);font-size:0.75rem;font-weight:600;letter-spacing:0.15em;text-transform:uppercase;color:var(--accent-1);margin-bottom:var(--space-sm);">// domaines d'expertise</span>
    <h1 class="fade-up" style="margin-bottom:var(--space-lg);">Expertise <span class="gradient-text">technique & stratégique</span></h1>
    <p class="lead fade-up" style="max-width:580px;margin-inline:auto;transition-delay:80ms;">
      Cinq domaines de maîtrise, consolidés par 10 ans de missions sur le terrain,
      de la PME au grand compte industriel.
    </p>

    <!-- Ancres rapides -->
    <nav style="display:flex;flex-wrap:wrap;gap:var(--space-sm);justify-content:center;margin-top:var(--space-xl);" aria-label="Navigation par domaine">
      <?php foreach ($expertises as $exp): ?>
        <a href="#<?= e($exp['id']) ?>" class="badge badge-accent" style="text-decoration:none;padding:0.4rem 0.9rem;font-size:0.8rem;">
          <?= e($exp['title']) ?>
        </a>
      <?php endforeach; ?>
    </nav>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     SECTIONS EXPERTISE
     ═══════════════════════════════════════════════════════ -->
<div class="container" style="max-width:1000px;">
  <?php
  $accent_colors = ['var(--accent-1)', 'var(--accent-3)', 'var(--accent-2)', 'var(--accent-4)', 'var(--accent-1)'];
  foreach ($expertises as $i => $exp):
    $color = $accent_colors[$i % count($accent_colors)];
  ?>
    <section class="expertise-section" id="<?= e($exp['id']) ?>" aria-labelledby="exp-<?= e($exp['id']) ?>">

      <div class="expertise-layout">

        <!-- Colonne gauche : description -->
        <div class="fade-up">
          <div style="display:flex;align-items:center;gap:var(--space-md);margin-bottom:var(--space-xl);">
            <div style="width:52px;height:52px;border-radius:var(--radius-md);background:rgba(<?= str_replace(['var(--', ')'], '', $color) ?>,0.1);border:1px solid rgba(<?= str_replace(['var(--', ')'], '', $color) ?>,0.2);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
              <?php echo render_icon_exp($exp['icon'], $color); ?>
            </div>
            <div>
              <p style="font-family:var(--font-mono);font-size:0.7rem;font-weight:600;text-transform:uppercase;letter-spacing:0.1em;color:<?= $color ?>;margin-bottom:2px;">Expertise</p>
              <h2 id="exp-<?= e($exp['id']) ?>" style="font-size:1.5rem;"><?= e($exp['title']) ?></h2>
            </div>
          </div>

          <p style="font-size:1rem;line-height:1.8;margin-bottom:var(--space-xl);"><?= e($exp['desc']) ?></p>

          <!-- Technologies -->
          <div>
            <p style="font-size:0.75rem;font-family:var(--font-mono);font-weight:600;text-transform:uppercase;letter-spacing:0.1em;color:var(--text-muted);margin-bottom:var(--space-md);">Technologies</p>
            <div class="tech-grid">
              <?php foreach ($exp['tech'] as $t): ?>
                <span class="tech-badge"><?= e($t) ?></span>
              <?php endforeach; ?>
            </div>
          </div>
        </div>

        <!-- Colonne droite : missions -->
        <div class="fade-up" style="transition-delay:100ms;">
          <div class="card card-gradient" style="padding:var(--space-xl);">
            <p style="font-size:0.75rem;font-family:var(--font-mono);font-weight:600;text-transform:uppercase;letter-spacing:0.1em;color:<?= $color ?>;margin-bottom:var(--space-lg);">Missions proposées</p>
            <ul class="expertise-missions">
              <?php foreach ($exp['missions'] as $m): ?>
                <li><?= e($m) ?></li>
              <?php endforeach; ?>
            </ul>

            <div style="margin-top:var(--space-xl);padding-top:var(--space-xl);border-top:1px solid rgba(99,102,241,0.1);">
              <?php echo mailto_link('Me contacter sur ce sujet', 'btn btn-secondary', 'Contacter Guillaume Robier pour ce domaine d\'expertise'); ?>
            </div>
          </div>
        </div>

      </div>

    </section>
  <?php endforeach; ?>
</div>


<!-- ═══════════════════════════════════════════════════════
     CTA
     ═══════════════════════════════════════════════════════ -->
<section class="section-alt">
  <div class="container">
    <div class="cta-section fade-up">
      <h2 style="margin-bottom:var(--space-md);">Une question sur votre contexte ?</h2>
      <p style="max-width:480px;margin-inline:auto;margin-bottom:var(--space-xl);">
        Je prends le temps d'analyser chaque situation avant de proposer quoi que ce soit.
        Discutons d'abord.
      </p>
      <div style="display:flex;gap:var(--space-md);justify-content:center;flex-wrap:wrap;">
        <?php echo mailto_link('Envoyer un message', 'btn btn-primary'); ?>
        <a href="/realisations" class="btn btn-secondary">Voir mes réalisations</a>
      </div>
    </div>
  </div>
</section>

<?php

function render_icon_exp(string $name, string $color): string
{
    $icons = [
        'shield'    => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>',
        'server'    => '<rect x="2" y="2" width="20" height="8" rx="2"/><rect x="2" y="14" width="20" height="8" rx="2"/><line x1="6" y1="6" x2="6.01" y2="6"/><line x1="6" y1="18" x2="6.01" y2="18"/>',
        'network'   => '<rect x="9" y="2" width="6" height="6"/><rect x="16" y="16" width="6" height="6"/><rect x="2" y="16" width="6" height="6"/><path d="M5 16V8h14v8M12 8v8"/>',
        'briefcase' => '<rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 0 0-4 0v2M12 12v4M8 12v4"/>',
        'cpu'       => '<rect x="4" y="4" width="16" height="16" rx="2"/><rect x="9" y="9" width="6" height="6"/>',
    ];
    $path = $icons[$name] ?? $icons['server'];
    return '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="' . $color . '" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $path . '</svg>';
}

include __DIR__ . '/includes/footer.php';
?>

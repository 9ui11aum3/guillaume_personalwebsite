<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/helpers.php';
require_once __DIR__ . '/includes/data.php';

$page_title = 'Guillaume Robier — Entrepreneur IT & Architecte d\'infrastructures';
$page_description = 'Ingénieur CPE Lyon. Dirigeant de SYIT (infrastructure IT) et Odonaview (IA vidéo). Expertise infrastructure, sécurité, réseaux et conseil stratégique.';

// JSON-LD Person schema
$extra_head = <<<JSON
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Person",
  "name": "Guillaume Robier",
  "jobTitle": "Directeur Général",
  "worksFor": [
    {"@type": "Organization", "name": "Odonaview", "url": "https://odonaview.com"},
    {"@type": "Organization", "name": "SYIT"}
  ],
  "alumniOf": [
    {"@type": "Organization", "name": "CPE Lyon"},
    {"@type": "Organization", "name": "Université Claude Bernard Lyon 1"}
  ],
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Lyon",
    "addressCountry": "FR"
  },
  "sameAs": [
    "https://www.linkedin.com/in/guillaumerobier",
    "https://www.malt.fr/profile/guillaumerobier"
  ]
}
</script>
JSON;

include __DIR__ . '/includes/header.php';
?>

<!-- ═══════════════════════════════════════════════════════
     HERO
     ═══════════════════════════════════════════════════════ -->
<section class="hero" aria-label="Présentation">
  <div class="container">
    <div class="hero-layout">

      <!-- Texte -->
      <div class="hero-content">
        <p class="hero-eyebrow fade-up">// entrepreneur · architecte · directeur général</p>

        <h1 class="hero-name fade-up" style="--anim-delay:80ms;">
          Guillaume<br>
          <span class="gradient-text">ROBIER</span>
        </h1>

        <p class="hero-subtitle fade-up" style="--anim-delay:160ms;">
          Entrepreneur IT · Architecte d'infrastructures · Conseil stratégique
        </p>

        <div class="hero-tags fade-up" style="--anim-delay:240ms;">
          <span class="badge badge-accent">Sécurité</span>
          <span class="badge badge-rose">Cloud &amp; infra</span>
          <span class="badge badge-cyan">Stratégie</span>
          <span class="badge badge-green">BGP AS61193</span>
        </div>

        <div class="hero-ctas fade-up" style="--anim-delay:320ms;">
          <a href="/syit" class="btn btn-primary">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
            Découvrir SYIT
          </a>
          <a href="/odonaview" class="btn btn-secondary">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M8 12l3 3 5-5"/></svg>
            Découvrir Odonaview
          </a>
        </div>
      </div>

      <!-- Photo -->
      <div class="hero-photo-wrap fade-up" style="--anim-delay:200ms;">
        <img src="/assets/img/photo/guillaume_robier.png"
             alt="Guillaume Robier — Entrepreneur IT, dirigeant SYIT et Odonaview"
             class="hero-photo"
             width="280" height="280"
             data-fallback="Guillaume Robier"
             fetchpriority="high">
      </div>

    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     PITCH
     ═══════════════════════════════════════════════════════ -->
<section style="padding-block:var(--space-3xl);background:var(--bg-mid);">
  <div class="container" style="max-width:760px;text-align:center;">
    <p class="lead fade-up" style="font-size:1.2rem;color:var(--text-secondary);">
      Ingénieur CPE Lyon et dirigeant de PME tech. J'accompagne depuis plus de 10 ans des organisations
      dans la conception et la sécurisation de leurs systèmes critiques —
      <strong style="color:var(--text-primary);">du terrain au comité de pilotage.</strong>
    </p>
    <div class="divider" style="margin-top:var(--space-xl);"></div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     STRUCTURES (SYIT + ODONAVIEW)
     ═══════════════════════════════════════════════════════ -->
<section aria-labelledby="structures-title">
  <div class="container">
    <div class="section-header">
      <span class="eyebrow">Mes structures</span>
      <h2 id="structures-title">Deux entreprises, une vision</h2>
      <p>Infrastructure IT performante et IA de vision pour sites critiques.</p>
    </div>

    <div class="structures-grid stagger-children">

      <!-- SYIT — priorité n°1 -->
      <article class="company-card priority" aria-label="SYIT">
        <div style="display:flex;align-items:center;gap:var(--space-lg);margin-bottom:var(--space-xl);">
          <img src="/assets/img/logos/syit.svg" alt="Logo SYIT" class="company-logo" width="120" height="48" data-fallback="SYIT">
          <span class="badge badge-green" style="margin-left:auto;">Priorité #1</span>
        </div>

        <h3 style="margin-bottom:var(--space-sm);">Bureau d'étude IT &amp; Infrastructure</h3>
        <p style="margin-bottom:var(--space-lg);">
          Conception et opération d'infrastructures IT performantes, résilientes et sécurisées.
          Indépendance technologique, approche terrain, résultats mesurables.
        </p>

        <div class="tags" style="margin-bottom:var(--space-xl);">
          <span class="badge badge-accent">Réseau</span>
          <span class="badge badge-cyan">Sécurité</span>
          <span class="badge badge-neutral">Hébergement</span>
          <span class="badge badge-neutral">Conseil</span>
          <span class="badge badge-rose">BGP AS61193</span>
        </div>

        <a href="/syit" class="btn btn-primary">
          Découvrir SYIT
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
      </article>

      <!-- ODONAVIEW -->
      <article class="company-card" aria-label="Odonaview">
        <div style="display:flex;align-items:center;gap:var(--space-lg);margin-bottom:var(--space-xl);">
          <img src="/assets/img/logos/odonaview.png" alt="Logo Odonaview" class="company-logo" width="140" height="48" data-fallback="Odonaview">
        </div>

        <h3 style="margin-bottom:var(--space-sm);">IA de vision pour sites critiques</h3>
        <p style="margin-bottom:var(--space-lg);">
          Reprise et transformation d'Evitech. Vision intelligente pour infrastructures critiques.
          Détection périmétrique par IA vidéo — nucléaire, défense, énergie.
        </p>

        <div class="tags" style="margin-bottom:var(--space-xl);">
          <span class="badge badge-cyan">IA Vidéo</span>
          <span class="badge badge-accent">Sécurité périmétrique</span>
          <span class="badge badge-neutral">Défense</span>
        </div>

        <a href="/odonaview" class="btn btn-secondary">
          Découvrir Odonaview
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
      </article>

    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     EXPERTISES
     ═══════════════════════════════════════════════════════ -->
<section class="section-alt" aria-labelledby="expertises-title">
  <div class="container">
    <div class="section-header">
      <span class="eyebrow">Domaines d'expertise</span>
      <h2 id="expertises-title">Des compétences techniques au conseil stratégique</h2>
    </div>

    <div class="grid-2 stagger-children">
      <?php foreach ($expertises as $exp): ?>
        <a href="/expertise#<?= e($exp['id']) ?>" class="card card-gradient" style="text-decoration:none;display:block;">
          <div style="display:flex;gap:var(--space-lg);align-items:flex-start;">
            <div class="card-icon">
              <?php echo render_icon($exp['icon']); ?>
            </div>
            <div>
              <h3 style="margin-bottom:var(--space-sm);font-size:1rem;"><?= e($exp['title']) ?></h3>
              <p style="font-size:0.875rem;color:var(--text-muted);"><?= e($exp['short']) ?></p>
            </div>
          </div>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     STATS
     ═══════════════════════════════════════════════════════ -->
<section aria-labelledby="stats-title">
  <div class="container">
    <h2 id="stats-title" class="sr-only">Chiffres clés</h2>
    <div class="stats-grid stagger-children">
      <?php foreach ($stats as $stat): ?>
        <div class="card stat-card fade-up">
          <div class="stat-value"><?= e($stat['value']) ?></div>
          <div class="stat-label"><?= e($stat['label']) ?></div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     RÉALISATIONS (sélection)
     ═══════════════════════════════════════════════════════ -->
<section class="section-alt" aria-labelledby="realisations-title">
  <div class="container">
    <div class="section-header">
      <span class="eyebrow">Réalisations</span>
      <h2 id="realisations-title">Quelques projets marquants</h2>
    </div>

    <div class="grid-3 stagger-children" style="margin-bottom:var(--space-2xl);">
      <?php foreach (array_slice($realisations, 0, 3) as $proj): ?>
        <article class="card project-card">
          <div class="card-icon">
            <?php echo render_icon($proj['icon']); ?>
          </div>
          <div class="project-meta">
            <span><?= e($proj['sector']) ?></span>
            <span class="dot"></span>
            <span><?= e($proj['year']) ?></span>
          </div>
          <h3 style="font-size:1rem;margin-bottom:var(--space-sm);"><?= e($proj['title']) ?></h3>
          <p style="font-size:0.875rem;flex:1;"><?= e(mb_substr($proj['desc'], 0, 120)) ?>…</p>
          <div class="tags" style="margin-top:var(--space-md);">
            <?php foreach (array_slice($proj['stack'], 0, 3) as $t): ?>
              <span class="badge badge-neutral"><?= e($t) ?></span>
            <?php endforeach; ?>
          </div>
        </article>
      <?php endforeach; ?>
    </div>

    <div style="text-align:center;">
      <a href="/realisations" class="btn btn-secondary">
        Voir toutes les réalisations
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      </a>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     CLIENTS
     ═══════════════════════════════════════════════════════ -->
<section aria-labelledby="clients-title">
  <div class="container">
    <div class="section-header">
      <span class="eyebrow">Ils m'ont fait confiance</span>
      <h2 id="clients-title" style="font-size:1.25rem;color:var(--text-muted);font-weight:500;">
        Secteurs : Énergie · Défense · Industrie · Télécoms · Espace
      </h2>
    </div>

    <div class="clients-band">
      <?php foreach ($clients as $c): ?>
        <?php if (!empty($c['logo'])): ?>
          <img src="<?= e($c['logo']) ?>"
               alt="<?= e($c['name']) ?>"
               class="client-logo"
               height="36"
               loading="lazy"
               data-fallback="<?= e($c['name']) ?>">
        <?php else: ?>
          <span class="tech-badge" style="opacity:0.5;"><?= e($c['name']) ?></span>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     CTA FINAL
     ═══════════════════════════════════════════════════════ -->
<section class="section-alt">
  <div class="container">
    <div class="cta-section fade-up">
      <h2 style="margin-bottom:var(--space-md);">Discutons de votre projet</h2>
      <p style="max-width:500px;margin-inline:auto;margin-bottom:var(--space-xl);">
        Infrastructure, sécurité, ERP ou stratégie IA — je réponds rapidement aux demandes sérieuses.
      </p>
      <div style="display:flex;gap:var(--space-md);justify-content:center;flex-wrap:wrap;">
        <?php echo mailto_link('Envoyer un message', 'btn btn-primary'); ?>
        <a href="/parcours" class="btn btn-secondary">Voir mon parcours</a>
      </div>
    </div>
  </div>
</section>

<?php

/**
 * Rendu SVG inline des icônes (subset Lucide)
 */
function render_icon(string $name): string
{
    $icons = [
        'shield'    => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>',
        'server'    => '<rect x="2" y="2" width="20" height="8" rx="2"/><rect x="2" y="14" width="20" height="8" rx="2"/><line x1="6" y1="6" x2="6.01" y2="6"/><line x1="6" y1="18" x2="6.01" y2="18"/>',
        'network'   => '<rect x="9" y="2" width="6" height="6"/><rect x="16" y="16" width="6" height="6"/><rect x="2" y="16" width="6" height="6"/><path d="M5 16V8h14v8M12 8v8"/>',
        'briefcase' => '<rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 0 0-4 0v2M12 12v4M8 12v4"/>',
        'cpu'       => '<rect x="4" y="4" width="16" height="16" rx="2"/><rect x="9" y="9" width="6" height="6"/><line x1="9" y1="1" x2="9" y2="4"/><line x1="15" y1="1" x2="15" y2="4"/><line x1="9" y1="20" x2="9" y2="23"/><line x1="15" y1="20" x2="15" y2="23"/><line x1="20" y1="9" x2="23" y2="9"/><line x1="20" y1="14" x2="23" y2="14"/><line x1="1" y1="9" x2="4" y2="9"/><line x1="1" y1="14" x2="4" y2="14"/>',
        'layers'    => '<polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/>',
        'zap'       => '<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>',
        'lock'      => '<rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/>',
        'globe'     => '<circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>',
        'router'    => '<rect x="2" y="9" width="20" height="12" rx="2"/><path d="M8 9V5l4-3 4 3v4"/><line x1="6" y1="14" x2="6.01" y2="14"/><line x1="10" y1="14" x2="10.01" y2="14"/>',
        'calendar'  => '<rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/>',
    ];
    $path = $icons[$name] ?? $icons['cpu'];
    return '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $path . '</svg>';
}

include __DIR__ . '/includes/footer.php';
?>

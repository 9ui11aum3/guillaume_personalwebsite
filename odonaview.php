<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/helpers.php';
require_once __DIR__ . '/includes/data.php';

$page_title = 'Odonaview — IA de vision pour infrastructures critiques | Guillaume Robier';
$page_description = 'Odonaview (ex-Evitech) : solutions IA vidéo JAGUAR et LYNX pour la sécurité périmétrique des sites critiques. Nucléaire, défense, énergie. Dirigé par Guillaume Robier.';

include __DIR__ . '/includes/header.php';
?>

<!-- ═══════════════════════════════════════════════════════
     HERO ODONAVIEW
     ═══════════════════════════════════════════════════════ -->
<section class="page-hero" aria-label="Odonaview — Présentation">
  <div class="container" style="position:relative;z-index:1;">

    <!-- Logo -->
    <div style="display:inline-flex;align-items:center;gap:var(--space-md);margin-bottom:var(--space-xl);">
      <img src="/assets/img/logos/odonaview.png" alt="Logo Odonaview" height="56" width="auto" fetchpriority="high" data-fallback="Odonaview">
    </div>

    <h1 class="fade-up" style="margin-bottom:var(--space-lg);">
      IA de vision pour<br>
      <span style="background:linear-gradient(135deg,#06b6d4,#6366f1);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">infrastructures critiques</span>
    </h1>

    <p class="lead fade-up" style="max-width:580px;margin-inline:auto;--anim-delay:100ms;">
      Héritière du savoir-faire français d'Evitech depuis 2005 —
      détection d'intrusion périmétrique et analyse intelligente de flux
      pour les sites à plus haute criticité.
    </p>

    <div style="display:flex;gap:var(--space-md);justify-content:center;flex-wrap:wrap;margin-top:var(--space-2xl);" class="fade-up">
      <a href="<?= e(ODONAVIEW_URL) ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
        Site officiel odonaview.com
      </a>
      <?php echo mailto_link('Contacter Guillaume', 'btn btn-secondary'); ?>
    </div>

    <div style="display:flex;gap:var(--space-md);justify-content:center;flex-wrap:wrap;margin-top:var(--space-xl);">
      <span class="badge badge-cyan">IA Vidéo</span>
      <span class="badge badge-accent">Sécurité périmétrique</span>
      <span class="badge badge-neutral">Nucléaire · Défense · Énergie</span>
      <span class="badge badge-rose">Savoir-faire français depuis 2005</span>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     L'HISTOIRE
     ═══════════════════════════════════════════════════════ -->
<section style="background:var(--bg-mid);">
  <div class="container">
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:var(--space-3xl);align-items:center;">

      <div class="fade-up">
        <span class="eyebrow" style="display:block;font-family:var(--font-mono);font-size:0.75rem;font-weight:600;letter-spacing:0.15em;text-transform:uppercase;color:var(--accent-3);margin-bottom:var(--space-sm);">Notre histoire</span>
        <h2 style="margin-bottom:var(--space-lg);">La continuité d'un savoir-faire français</h2>
        <p style="margin-bottom:var(--space-md);">
          Le 16 octobre 2025, Guillaume Robier reprend <strong style="color:var(--text-primary);">Evitech</strong>,
          pionnière française de la vidéo-intelligence fondée en 2005. Née de la recherche académique française,
          Evitech a déployé ses solutions sur les sites les plus critiques du pays.
        </p>
        <p style="margin-bottom:var(--space-md);">
          La société est renommée <strong style="color:var(--accent-3);">Odonaview</strong> et entre dans une nouvelle phase :
          modernisation technologique, ouverture internationale, et intégration des dernières avancées
          en vision par ordinateur et intelligence artificielle embarquée.
        </p>
        <p>
          Le savoir-faire, les équipes, les certifications et les clients sont préservés.
          L'ambition est rehaussée.
        </p>

        <blockquote style="margin-top:var(--space-xl);padding:var(--space-lg);background:rgba(6,182,212,0.06);border-left:3px solid var(--accent-3);border-radius:0 var(--radius-md) var(--radius-md) 0;">
          <p style="font-style:italic;color:var(--text-secondary);font-size:0.9rem;">
            "Nous reprenons une société dotée d'un savoir-faire unique et d'une clientèle de référence,
            avec l'objectif de la moderniser et de la faire rayonner à l'international."
          </p>
          <cite style="font-size:0.8rem;color:var(--text-muted);display:block;margin-top:var(--space-sm);">
            — Guillaume Robier, Directeur Général d'Odonaview
          </cite>
        </blockquote>
      </div>

      <div class="fade-up" style="--anim-delay:150ms;">
        <img src="/assets/img/photo/guillaume_robier.png"
             alt="Guillaume Robier, Directeur Général d'Odonaview"
             style="width:100%;max-width:420px;border-radius:var(--radius-xl);border:1px solid rgba(6,182,212,0.3);box-shadow:0 8px 32px rgba(0,0,0,0.5);"
             loading="lazy"
             data-fallback="Guillaume Robier">
        <p style="font-size:0.75rem;color:var(--text-muted);text-align:center;margin-top:var(--space-sm);">
          Guillaume Robier — Directeur Général, Odonaview
        </p>
      </div>

    </div>
  </div>
</section>

<?php // CSS responsive pour la grille histoire ?>
<style>
@media (max-width: 767px) {
  .odo-histoire-grid { grid-template-columns: 1fr !important; }
}
</style>


<!-- ═══════════════════════════════════════════════════════
     PRODUITS
     ═══════════════════════════════════════════════════════ -->
<section aria-labelledby="produits-title">
  <div class="container">
    <div class="section-header">
      <span class="eyebrow">Produits</span>
      <h2 id="produits-title">Solutions JAGUAR &amp; LYNX</h2>
      <p>Deux produits complémentaires pour couvrir l'ensemble des besoins de sécurité vidéo intelligente.</p>
    </div>

    <div class="grid-2 stagger-children">

      <!-- JAGUAR -->
      <article class="card card-border-gradient" style="padding:var(--space-2xl);">
        <div style="display:flex;align-items:center;gap:var(--space-md);margin-bottom:var(--space-xl);">
          <div style="width:52px;height:52px;border-radius:10px;background:linear-gradient(135deg,rgba(6,182,212,0.2),rgba(99,102,241,0.2));border:1px solid rgba(6,182,212,0.3);display:flex;align-items:center;justify-content:center;">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="var(--accent-3)" stroke-width="1.75" aria-hidden="true">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
            </svg>
          </div>
          <div>
            <h3 style="font-size:1.25rem;margin-bottom:2px;">JAGUAR</h3>
            <p style="font-size:0.8rem;color:var(--accent-3);font-family:var(--font-mono);">Détection d'intrusion périmétrique</p>
          </div>
        </div>

        <p style="margin-bottom:var(--space-lg);">
          Solution de vidéo-surveillance intelligente spécialisée dans la <strong style="color:var(--text-primary);">détection d'intrusion périmétrique</strong>.
          Analyse comportementale en temps réel, faible taux de fausse alarme, fonctionnement 24/7 quelle que soit la météo.
        </p>

        <ul style="list-style:none;display:flex;flex-direction:column;gap:var(--space-sm);">
          <?php
          $jaguar_features = [
            'Détection d\'intrusion et franchissement de ligne virtuelle',
            'Analyse comportementale en temps réel',
            'Taux de fausse alarme &lt; 1% en conditions réelles',
            'Fonctionne de nuit, sous pluie, brouillard, neige',
            'Intégration VMS et systèmes d\'alarme existants',
            'Certifié pour sites nucléaires (IRSN) et SEVESO',
          ];
          foreach ($jaguar_features as $f): ?>
            <li style="display:flex;align-items:flex-start;gap:var(--space-sm);font-size:0.875rem;color:var(--text-secondary);">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--accent-4)" stroke-width="2.5" style="flex-shrink:0;margin-top:2px;" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
              <?= $f ?>
            </li>
          <?php endforeach; ?>
        </ul>
      </article>

      <!-- LYNX -->
      <article class="card card-border-gradient" style="padding:var(--space-2xl);">
        <div style="display:flex;align-items:center;gap:var(--space-md);margin-bottom:var(--space-xl);">
          <div style="width:52px;height:52px;border-radius:10px;background:linear-gradient(135deg,rgba(99,102,241,0.2),rgba(236,72,153,0.15));border:1px solid rgba(99,102,241,0.3);display:flex;align-items:center;justify-content:center;">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="var(--accent-1)" stroke-width="1.75" aria-hidden="true">
              <circle cx="12" cy="12" r="10"/><path d="M8 14s1.5 2 4 2 4-2 4-2"/><line x1="9" y1="9" x2="9.01" y2="9"/><line x1="15" y1="9" x2="15.01" y2="9"/>
            </svg>
          </div>
          <div>
            <h3 style="font-size:1.25rem;margin-bottom:2px;">LYNX</h3>
            <p style="font-size:0.8rem;color:var(--accent-1);font-family:var(--font-mono);">Analyse de flux &amp; crowd analysis</p>
          </div>
        </div>

        <p style="margin-bottom:var(--space-lg);">
          Solution de <strong style="color:var(--text-primary);">comptage et analyse comportementale de foule</strong>.
          Optimisation des flux, détection d'anomalies, aide à la décision opérationnelle en temps réel.
        </p>

        <ul style="list-style:none;display:flex;flex-direction:column;gap:var(--space-sm);">
          <?php
          $lynx_features = [
            'Comptage précis des personnes en temps réel',
            'Analyse de flux et heatmaps de densité',
            'Détection d\'attroupements anormaux',
            'Historique et reporting analytique',
            'Intégration avec les systèmes de contrôle d\'accès',
            'Utilisable en intérieur et en extérieur',
          ];
          foreach ($lynx_features as $f): ?>
            <li style="display:flex;align-items:flex-start;gap:var(--space-sm);font-size:0.875rem;color:var(--text-secondary);">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--accent-4)" stroke-width="2.5" style="flex-shrink:0;margin-top:2px;" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
              <?= $f ?>
            </li>
          <?php endforeach; ?>
        </ul>
      </article>

    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     CAS D'USAGE
     ═══════════════════════════════════════════════════════ -->
<section class="section-alt" aria-labelledby="usecases-title">
  <div class="container">
    <div class="section-header">
      <span class="eyebrow">Applications</span>
      <h2 id="usecases-title">Cas d'usage</h2>
    </div>

    <div class="grid-3 stagger-children">
      <?php
      $use_cases = [
        ['icon' => '⚛', 'sector' => 'Nucléaire', 'desc' => 'Protection périmétrique des centrales, sites de stockage et installations de recherche. Conformité réglementaire INB.'],
        ['icon' => '⚡', 'sector' => 'Énergie', 'desc' => 'Surveillance des sites de production, de distribution et d\'infrastructures critiques (SEVESO, IED).'],
        ['icon' => '🛡', 'sector' => 'Défense', 'desc' => 'Sécurisation de périmètres militaires, bases, entrepôts de matériels sensibles.'],
        ['icon' => '🚂', 'sector' => 'Transport', 'desc' => 'Gares, aéroports, dépôts. Analyse de flux, gestion des accès, détection d\'intrusions.'],
        ['icon' => '🏭', 'sector' => 'Industrie SEVESO', 'desc' => 'Protection des sites chimiques et industriels à risques. Conformité Loi Bachelot.'],
        ['icon' => '🌐', 'sector' => 'Télécoms / Espace', 'desc' => 'Data centers, stations sol, sites d\'infrastructure critique — opérateurs télécoms et acteurs du spatial.'],
      ];
      foreach ($use_cases as $uc): ?>
        <div class="card fade-up" style="text-align:center;">
          <div style="font-size:2rem;margin-bottom:var(--space-md);" aria-hidden="true"><?= $uc['icon'] ?></div>
          <h3 style="font-size:1rem;margin-bottom:var(--space-sm);"><?= e($uc['sector']) ?></h3>
          <p style="font-size:0.875rem;"><?= e($uc['desc']) ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     SECTEURS DE RÉFÉRENCE
     ═══════════════════════════════════════════════════════ -->
<section aria-labelledby="clients-odo-title">
  <div class="container">
    <div class="section-header">
      <span class="eyebrow">Secteurs</span>
      <h2 id="clients-odo-title">Déployé chez des acteurs de premier plan</h2>
      <p>Des organisations parmi les plus exigeantes en matière de sécurité et de conformité réglementaire.</p>
    </div>

    <div class="clients-band" style="justify-content:center;">
      <?php
      $secteurs_odo = [
        'Opérateurs nucléaires',
        'Acteurs de la défense',
        'Gestionnaires de réseaux d\'énergie',
        'Opérateurs télécoms & spatial',
        'Laboratoires de recherche',
        'Sites SEVESO & INB',
      ];
      foreach ($secteurs_odo as $s): ?>
        <span class="tech-badge" style="font-size:0.875rem;padding:0.6rem 1.2rem;"><?= e($s) ?></span>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     CTA ODONAVIEW
     ═══════════════════════════════════════════════════════ -->
<section class="section-alt">
  <div class="container">
    <div class="cta-section fade-up" style="background:linear-gradient(135deg,rgba(6,182,212,0.08),rgba(99,102,241,0.06));">
      <h2 style="margin-bottom:var(--space-md);">En savoir plus sur Odonaview</h2>
      <p style="max-width:480px;margin-inline:auto;margin-bottom:var(--space-xl);">
        Consultez le site officiel pour découvrir les produits en détail,
        ou contactez Guillaume directement pour une démonstration.
      </p>
      <div style="display:flex;gap:var(--space-md);justify-content:center;flex-wrap:wrap;">
        <a href="<?= e(ODONAVIEW_URL) ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary">
          Visiter odonaview.com ↗
        </a>
        <?php echo mailto_link('Contacter Guillaume', 'btn btn-secondary'); ?>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>

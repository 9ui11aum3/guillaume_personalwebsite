<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/helpers.php';
require_once __DIR__ . '/includes/data.php';

$page_title = 'SYIT — Bureau d\'étude IT & Infrastructure | Guillaume Robier';
$page_description = 'SYIT, bureau d\'étude IT fondé par Guillaume Robier. Conception et opération d\'infrastructures réseau, serveurs et cybersécurité pour PME et grands comptes. Opérateur BGP AS61193.';

include __DIR__ . '/includes/header.php';
?>

<!-- ═══════════════════════════════════════════════════════
     HERO SYIT
     ═══════════════════════════════════════════════════════ -->
<section class="page-hero" aria-label="SYIT — Présentation">
  <div class="container" style="position:relative;z-index:1;">

    <div style="display:inline-flex;align-items:center;gap:var(--space-sm);margin-bottom:var(--space-xl);">
      <img src="/assets/img/logos/syit.svg" alt="Logo SYIT" height="56" width="auto" fetchpriority="high" data-fallback="SYIT">
    </div>

    <h1 class="fade-up" style="margin-bottom:var(--space-lg);">
      Bureau d'étude IT<br>
      <span class="gradient-text">Systèmes · Réseaux · Sécurité</span>
    </h1>
    <p class="lead fade-up" style="max-width:600px;margin-inline:auto;--anim-delay:100ms;">
      Conception et opération d'infrastructures IT performantes, résilientes et sécurisées
      pour les PME et grands comptes. Approche pragmatique terrain, résultats mesurables.
    </p>

    <div style="display:flex;gap:var(--space-md);justify-content:center;flex-wrap:wrap;margin-top:var(--space-2xl);" class="fade-up" style="--anim-delay:200ms;">
      <?php echo mailto_link('Contacter SYIT', 'btn btn-primary'); ?>
      <a href="#services" class="btn btn-secondary">Voir les services</a>
    </div>

    <!-- Badges différenciateurs -->
    <div style="display:flex;gap:var(--space-md);justify-content:center;flex-wrap:wrap;margin-top:var(--space-xl);">
      <span class="badge badge-green">
        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
        Opérateur BGP AS61193
      </span>
      <span class="badge badge-accent">Multi-éditeurs</span>
      <span class="badge badge-cyan">Depuis 2021</span>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     LE POURQUOI DE SYIT
     ═══════════════════════════════════════════════════════ -->
<section style="background:var(--bg-mid);">
  <div class="container" style="max-width:800px;">
    <div class="section-header" style="text-align:left;">
      <span class="eyebrow">Notre histoire</span>
      <h2>Né du terrain, construit pour durer</h2>
      <div class="divider divider-left"></div>
    </div>

    <div class="fade-up" style="display:flex;flex-direction:column;gap:var(--space-lg);">
      <p>
        SYIT naît en 2021 d'un constat simple : <strong style="color:var(--text-primary);">trop d'entreprises subissent leur infrastructure</strong>
        plutôt que de la maîtriser. Pannes évitables, architectures non documentées, prestataires
        peu réactifs, dépendance à un éditeur unique — les organisations perdent du temps et de l'argent sur des sujets
        qui devraient être transparents.
      </p>
      <p>
        Fondé par Guillaume Robier, ingénieur CPE Lyon avec plus de 10 ans d'expérience terrain,
        SYIT est un <strong style="color:var(--text-primary);">bureau d'étude IT indépendant</strong> positionné sur la conception,
        le déploiement et l'opération d'infrastructures IT. Pas de revente de licences, pas de conflit d'intérêts :
        seulement le bon outil pour le bon besoin.
      </p>
      <p>
        Notre différence ? <strong style="color:var(--text-primary);">Nous opérons un ASN BGP public (AS61193)</strong> avec nos propres plages IP,
        ce qui nous donne une compréhension intime des protocoles de routage que peu de prestataires IT peuvent revendiquer.
      </p>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     SERVICES
     ═══════════════════════════════════════════════════════ -->
<section id="services" aria-labelledby="services-title">
  <div class="container">
    <div class="section-header">
      <span class="eyebrow">Ce que nous faisons</span>
      <h2 id="services-title">Services SYIT</h2>
    </div>

    <div class="services-grid stagger-children">

      <?php
      $services = [
        [
          'icon'  => 'network',
          'title' => 'Architecture Hub &amp; Spoke',
          'desc'  => 'Conception d\'architectures réseaux structurées, documentées et évolutives. Multi-sites, VPN IPsec/WireGuard, routing avancé BGP/OSPF.',
          'tags'  => ['MikroTik', 'BGP', 'IPsec'],
        ],
        [
          'icon'  => 'server',
          'title' => 'Hébergement sur-mesure &amp; infogérance',
          'desc'  => 'Infrastructure dédiée ou partagée, haute disponibilité, sauvegardes externalisées. Infogérance avec SLA défini et interlocuteur unique.',
          'tags'  => ['Proxmox', 'Ceph', 'ZFS'],
        ],
        [
          'icon'  => 'layers',
          'title' => 'Virtualisation &amp; haute disponibilité',
          'desc'  => 'Migration et déploiement de clusters virtualisés. Proxmox VE, VMware vSphere, clustering Ceph, réplication en temps réel.',
          'tags'  => ['Proxmox VE', 'VMware', 'Ceph'],
        ],
        [
          'icon'  => 'shield',
          'title' => 'Audit &amp; conseil cybersécurité',
          'desc'  => 'Audit d\'architecture, hardening systèmes, déploiement FortiGate/pfSense, WAF applicatif, segmentation réseau, SIEM Wazuh.',
          'tags'  => ['FortiGate', 'Wazuh', 'SafeLine'],
        ],
        [
          'icon'  => 'globe',
          'title' => 'Cloud hybride',
          'desc'  => 'Architecture cloud hybride combinant infrastructure on-premises et cloud public. Connectivité sécurisée, stratégie multi-cloud maîtrisée.',
          'tags'  => ['Hybrid Cloud', 'VPN', 'Terraform'],
        ],
        [
          'icon'  => 'cpu',
          'title' => 'Maintenance &amp; évolution de parc',
          'desc'  => 'Gestion de parc serveurs et réseau : mises à jour, patching sécurité, supervision Zabbix/Grafana, escalade incidents 24/7.',
          'tags'  => ['Zabbix', 'Grafana', 'Ansible'],
        ],
      ];
      foreach ($services as $svc): ?>
        <article class="card card-gradient fade-up">
          <div class="card-icon">
            <?php echo render_icon_syit($svc['icon']); ?>
          </div>
          <h3 style="font-size:1rem;margin-bottom:var(--space-sm);"><?= $svc['title'] ?></h3>
          <p style="font-size:0.875rem;margin-bottom:var(--space-md);"><?= e($svc['desc']) ?></p>
          <div class="tags">
            <?php foreach ($svc['tags'] as $t): ?>
              <span class="badge badge-neutral"><?= e($t) ?></span>
            <?php endforeach; ?>
          </div>
        </article>
      <?php endforeach; ?>

    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     STACK TECHNOLOGIQUE
     ═══════════════════════════════════════════════════════ -->
<section class="section-alt" aria-labelledby="stack-title">
  <div class="container">
    <div class="section-header">
      <span class="eyebrow">Technologies</span>
      <h2 id="stack-title">Stack maîtrisée</h2>
      <p>Indépendance technologique — le bon outil pour le bon besoin.</p>
    </div>

    <?php
    $categories = ['Réseau', 'Sécurité', 'Virtualisation', 'Conteneurs', 'OS'];
    foreach ($categories as $cat):
      $items = array_filter($syit_stack, fn($s) => $s['cat'] === $cat);
      if (!$items) continue;
    ?>
      <div style="margin-bottom:var(--space-2xl);">
        <p style="font-family:var(--font-mono);font-size:0.75rem;font-weight:600;color:var(--accent-3);text-transform:uppercase;letter-spacing:0.1em;margin-bottom:var(--space-lg);"><?= e($cat) ?></p>
        <div class="tech-grid">
          <?php foreach ($items as $tech): ?>
            <div class="tech-badge">
              <?php if (!empty($tech['logo'])): ?>
                <img src="<?= e($tech['logo']) ?>" alt="<?= e($tech['name']) ?>" width="20" height="20" style="object-fit:contain;" data-fallback="<?= e(substr($tech['name'],0,2)) ?>">
              <?php else: ?>
                <div style="width:20px;height:20px;border-radius:4px;background:rgba(99,102,241,0.2);display:flex;align-items:center;justify-content:center;font-size:0.6rem;font-weight:700;color:var(--accent-1);"><?= e(substr($tech['name'],0,2)) ?></div>
              <?php endif; ?>
              <?= e($tech['name']) ?>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     DIFFÉRENCIATEURS
     ═══════════════════════════════════════════════════════ -->
<section aria-labelledby="diff-title">
  <div class="container" style="max-width:800px;">
    <div class="section-header" style="text-align:left;">
      <span class="eyebrow">Pourquoi SYIT</span>
      <h2 id="diff-title">Ce qui nous distingue</h2>
      <div class="divider divider-left"></div>
    </div>

    <div class="differentiator-list">
      <div class="differentiator-item fade-up">
        <div class="differentiator-icon">
          <?php echo render_icon_syit('globe'); ?>
        </div>
        <div>
          <h3 style="font-size:1rem;margin-bottom:var(--space-xs);">Opérateur BGP — AS61193</h3>
          <p style="font-size:0.875rem;">
            SYIT opère son propre numéro de système autonome BGP public (AS61193) avec des plages IP dédiées.
            Cette réalité terrain — rare chez un prestataire IT de notre taille — nous donne une maîtrise
            profonde du routage internet que nous mettons au service de vos architectures réseau.
          </p>
        </div>
      </div>

      <div class="differentiator-item fade-up">
        <div class="differentiator-icon">
          <?php echo render_icon_syit('zap'); ?>
        </div>
        <div>
          <h3 style="font-size:1rem;margin-bottom:var(--space-xs);">Approche pragmatique</h3>
          <p style="font-size:0.875rem;">
            Pas de méthodologie déconnectée du terrain. Nous déployons, nous opérons, nous documentons.
            Chaque recommandation est fondée sur de l'expérience concrète, pas sur des certifications théoriques.
          </p>
        </div>
      </div>

      <div class="differentiator-item fade-up">
        <div class="differentiator-icon">
          <?php echo render_icon_syit('shield'); ?>
        </div>
        <div>
          <h3 style="font-size:1rem;margin-bottom:var(--space-xs);">Indépendance technologique</h3>
          <p style="font-size:0.875rem;">
            Aucun accord de revente ou partenariat exclusif n'oriente nos recommandations.
            Nous sélectionnons MikroTik, Cisco, Fortinet, Proxmox ou tout autre outil
            uniquement selon le besoin réel.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     CLIENTS SYIT
     ═══════════════════════════════════════════════════════ -->
<section class="section-alt" aria-labelledby="clients-syit-title">
  <div class="container">
    <div class="section-header">
      <span class="eyebrow">Ils nous font confiance</span>
      <h2 id="clients-syit-title">Clients &amp; secteurs</h2>
    </div>

    <div class="grid-3 stagger-children">
      <?php
      $clients_syit = [
        ['name' => 'TotalEnergies',              'sector' => 'Énergie', 'note' => 'Infrastructure réseau'],
        ['name' => 'GreenYellow (Groupe Casino)', 'sector' => 'Énergie renouvelable', 'note' => 'SCADA & réseaux industriels'],
        ['name' => 'Advizeo',                    'sector' => 'PropTech / Énergie', 'note' => 'Conseil infrastructure'],
        ['name' => 'WinService',                 'sector' => 'Services IT', 'note' => 'Infrastructure & serveurs'],
        ['name' => 'Scutum (via Kalaos)',         'sector' => 'Sécurité', 'note' => 'Infrastructure réseau'],
        ['name' => 'FlexTelecom',                'sector' => 'Télécoms', 'note' => 'Architecture réseau'],
      ];
      foreach ($clients_syit as $c): ?>
        <div class="card fade-up">
          <p style="font-weight:700;color:var(--text-primary);margin-bottom:var(--space-xs);"><?= e($c['name']) ?></p>
          <p style="font-size:0.8rem;color:var(--accent-3);margin-bottom:var(--space-xs);"><?= e($c['sector']) ?></p>
          <p style="font-size:0.8rem;color:var(--text-muted);"><?= e($c['note']) ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     CTA CONTACT SYIT
     ═══════════════════════════════════════════════════════ -->
<section>
  <div class="container">
    <div class="cta-section fade-up">
      <h2 style="margin-bottom:var(--space-md);">Un projet d'infrastructure ?</h2>
      <p style="max-width:480px;margin-inline:auto;margin-bottom:var(--space-xl);">
        Parlez-moi de votre contexte. Je réponds sous 24h aux demandes sérieuses.
      </p>
      <?php echo mailto_link('Discutons-en', 'btn btn-primary'); ?>
    </div>
  </div>
</section>

<?php

function render_icon_syit(string $name): string
{
    $icons = [
        'shield'  => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>',
        'server'  => '<rect x="2" y="2" width="20" height="8" rx="2"/><rect x="2" y="14" width="20" height="8" rx="2"/><line x1="6" y1="6" x2="6.01" y2="6"/><line x1="6" y1="18" x2="6.01" y2="18"/>',
        'network' => '<rect x="9" y="2" width="6" height="6"/><rect x="16" y="16" width="6" height="6"/><rect x="2" y="16" width="6" height="6"/><path d="M5 16V8h14v8M12 8v8"/>',
        'layers'  => '<polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/>',
        'cpu'     => '<rect x="4" y="4" width="16" height="16" rx="2"/><rect x="9" y="9" width="6" height="6"/><line x1="9" y1="1" x2="9" y2="4"/><line x1="15" y1="1" x2="15" y2="4"/><line x1="9" y1="20" x2="9" y2="23"/><line x1="15" y1="20" x2="15" y2="23"/><line x1="20" y1="9" x2="23" y2="9"/><line x1="20" y1="14" x2="23" y2="14"/><line x1="1" y1="9" x2="4" y2="9"/><line x1="1" y1="14" x2="4" y2="14"/>',
        'globe'   => '<circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>',
        'zap'     => '<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>',
    ];
    $path = $icons[$name] ?? $icons['server'];
    return '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $path . '</svg>';
}

include __DIR__ . '/includes/footer.php';
?>

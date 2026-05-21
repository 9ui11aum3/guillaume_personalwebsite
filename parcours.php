<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/helpers.php';
require_once __DIR__ . '/includes/data.php';

$page_title = 'Parcours & CV — Guillaume Robier';
$page_description = 'Parcours professionnel de Guillaume Robier : de l\'ingénierie réseaux chez iCOW à la fondation de SYIT et la reprise d\'Odonaview. Formation CPE Lyon, Master SRIV.';

include __DIR__ . '/includes/header.php';
?>

<!-- ═══════════════════════════════════════════════════════
     HERO PAGE
     ═══════════════════════════════════════════════════════ -->
<section class="page-hero">
  <div class="container" style="position:relative;z-index:1;">
    <span style="display:block;font-family:var(--font-mono);font-size:0.75rem;font-weight:600;letter-spacing:0.15em;text-transform:uppercase;color:var(--accent-1);margin-bottom:var(--space-sm);">// curriculum vitæ</span>
    <h1 class="fade-up" style="margin-bottom:var(--space-lg);">Parcours <span class="gradient-text">&amp; Formation</span></h1>
    <p class="lead fade-up" style="max-width:560px;margin-inline:auto;--anim-delay:80ms;">
      10 ans d'expérience dans l'ingénierie IT, de la R&D industrielle à la direction générale de PME tech.
    </p>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     TÉLÉCHARGEMENT CV
     ═══════════════════════════════════════════════════════ -->
<section style="padding-block:var(--space-3xl);background:var(--bg-mid);">
  <div class="container">
    <div class="cv-download-banner fade-up">
      <div>
        <h3 style="margin-bottom:var(--space-xs);">Télécharger le CV complet</h3>
        <p style="font-size:0.875rem;color:var(--text-muted);">Format PDF — mis à jour régulièrement</p>
      </div>
      <?php
      $cvExists = file_exists(__DIR__ . '/assets/cv/CV_Guillaume_ROBIER.pdf');
      if ($cvExists): ?>
        <a href="/assets/cv/CV_Guillaume_ROBIER.pdf"
           class="btn btn-primary"
           download
           aria-label="Télécharger le CV PDF de Guillaume Robier">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
            <polyline points="7 10 12 15 17 10"/>
            <line x1="12" y1="15" x2="12" y2="3"/>
          </svg>
          Télécharger PDF
        </a>
      <?php else: ?>
        <div>
          <?php echo mailto_link('Demander le CV', 'btn btn-secondary'); ?>
          <!-- TODO: à compléter par Guillaume — déposer CV_Guillaume_ROBIER.pdf dans assets/cv/ -->
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     EXPÉRIENCES PROFESSIONNELLES
     ═══════════════════════════════════════════════════════ -->
<section aria-labelledby="exp-title">
  <div class="container" style="max-width:860px;">
    <div class="section-header" style="text-align:left;">
      <span class="eyebrow">Expériences</span>
      <h2 id="exp-title">Parcours professionnel</h2>
      <div class="divider divider-left"></div>
    </div>

    <div class="timeline">
      <?php foreach ($experiences as $exp): ?>
        <div class="timeline-item <?= $exp['current'] ? 'current' : '' ?> fade-up">
          <p class="timeline-period"><?= e($exp['period']) ?></p>
          <p class="timeline-role"><?= e($exp['role']) ?></p>
          <p class="timeline-company"><?= e($exp['company']) ?></p>
          <p class="timeline-desc"><?= e($exp['desc']) ?></p>
          <?php if (!empty($exp['tags'])): ?>
            <div class="tags">
              <?php foreach ($exp['tags'] as $tag): ?>
                <span class="badge badge-neutral"><?= e($tag) ?></span>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     FORMATION
     ═══════════════════════════════════════════════════════ -->
<section class="section-alt" aria-labelledby="formation-title">
  <div class="container" style="max-width:860px;">
    <div class="section-header" style="text-align:left;">
      <span class="eyebrow">Formation</span>
      <h2 id="formation-title">Parcours académique</h2>
      <div class="divider divider-left"></div>
    </div>

    <div class="timeline">
      <?php foreach ($formations as $f): ?>
        <div class="timeline-item fade-up">
          <p class="timeline-period"><?= e($f['period']) ?></p>
          <p class="timeline-role"><?= e($f['diploma']) ?></p>
          <p class="timeline-company"><?= e($f['school']) ?></p>
          <p class="timeline-desc"><?= e($f['desc']) ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     COMPÉTENCES SYNTHÈSE
     ═══════════════════════════════════════════════════════ -->
<section aria-labelledby="skills-title">
  <div class="container">
    <div class="section-header">
      <span class="eyebrow">Compétences</span>
      <h2 id="skills-title">Domaines de maîtrise</h2>
    </div>

    <div class="grid-3 stagger-children">
      <?php
      $skill_groups = [
        [
          'title' => 'Réseau & Télécoms',
          'color' => 'var(--accent-3)',
          'items' => ['BGP / AS61193', 'MikroTik RouterOS', 'Cisco IOS', 'VXLAN / EVPN', 'SD-WAN', 'OSPF', 'VPN IPsec/WireGuard', 'Ubiquiti'],
        ],
        [
          'title' => 'Infrastructure & Serveurs',
          'color' => 'var(--accent-1)',
          'items' => ['Proxmox VE', 'VMware vSphere', 'Linux (Debian, Ubuntu, RHEL)', 'Windows Server', 'Docker', 'Ceph / ZFS', 'Ansible', 'Zabbix / Grafana'],
        ],
        [
          'title' => 'Sécurité',
          'color' => 'var(--accent-2)',
          'items' => ['FortiGate / FortiOS', 'pfSense / OPNsense', 'SafeLine WAF', 'Wazuh SIEM', 'PKI / TLS', 'Audit réseau', 'NIS2', 'Segmentation OT/IT'],
        ],
        [
          'title' => 'Cloud & DevOps',
          'color' => 'var(--accent-4)',
          'items' => ['Cloud hybride', 'Docker Compose', 'GitHub Actions', 'Terraform (notions)', 'CI/CD', 'Self-hosted'],
        ],
        [
          'title' => 'ERP & Automatisation',
          'color' => 'var(--accent-1)',
          'items' => ['Dolibarr', 'n8n', 'Intégrations API REST', 'WooCommerce', 'CRM', 'LLM / IA générative'],
        ],
        [
          'title' => 'Management & Stratégie',
          'color' => 'var(--accent-2)',
          'items' => ['Direction générale', 'Management équipes', 'Pilotage produit', 'Stratégie digitale', 'Conseil client', 'Gestion de projet'],
        ],
      ];
      foreach ($skill_groups as $grp): ?>
        <div class="card fade-up">
          <h3 style="font-size:0.875rem;text-transform:uppercase;letter-spacing:0.1em;color:<?= $grp['color'] ?>;margin-bottom:var(--space-lg);font-family:var(--font-mono);">
            <?= e($grp['title']) ?>
          </h3>
          <div class="tags">
            <?php foreach ($grp['items'] as $sk): ?>
              <span class="badge badge-neutral"><?= e($sk) ?></span>
            <?php endforeach; ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>

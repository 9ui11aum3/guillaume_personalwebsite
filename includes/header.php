<?php
/**
 * Header HTML — <head> + nav
 * Variables attendues : $page_title, $page_description, $page_og_image (optionnel)
 */
if (!isset($page_title)) $page_title = 'Guillaume Robier — Entrepreneur IT';
if (!isset($page_description)) $page_description = 'Ingénieur CPE Lyon, entrepreneur IT, architecte d\'infrastructures. Dirigeant de SYIT et Odonaview.';
if (!isset($page_og_image)) $page_og_image = OG_IMAGE_DEFAULT;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= e($page_title) ?></title>
  <meta name="description" content="<?= e($page_description) ?>">
  <meta name="author" content="Guillaume Robier">
  <meta name="robots" content="index, follow">

  <!-- Open Graph -->
  <meta property="og:title"       content="<?= e($page_title) ?>">
  <meta property="og:description" content="<?= e($page_description) ?>">
  <meta property="og:image"       content="<?= e($page_og_image) ?>">
  <meta property="og:url"         content="<?= e(SITE_URL . strtok($_SERVER['REQUEST_URI'] ?? '/', '?')) ?>">
  <meta property="og:type"        content="website">
  <meta property="og:locale"      content="fr_FR">
  <meta property="og:site_name"   content="Guillaume Robier">

  <!-- Twitter Card -->
  <meta name="twitter:card"        content="summary_large_image">
  <meta name="twitter:title"       content="<?= e($page_title) ?>">
  <meta name="twitter:description" content="<?= e($page_description) ?>">
  <meta name="twitter:image"       content="<?= e($page_og_image) ?>">

  <!-- Canonical -->
  <link rel="canonical" href="<?= e(SITE_URL . strtok($_SERVER['REQUEST_URI'] ?? '/', '?')) ?>">

  <!-- Favicon -->
  <link rel="icon" type="image/svg+xml" href="/assets/img/logos/favicon.svg">

  <!-- Fonts (self-hosted) -->
  <?php if (file_exists(__DIR__ . '/../assets/fonts/inter-var.woff2')): ?>
  <link rel="preload" as="font" type="font/woff2" href="/assets/fonts/inter-var.woff2" crossorigin>
  <link rel="preload" as="font" type="font/woff2" href="/assets/fonts/jetbrains-mono-var.woff2" crossorigin>
  <link rel="stylesheet" href="/assets/fonts/fonts.css">
  <?php endif; ?>

  <!-- CSS -->
  <link rel="stylesheet" href="/assets/css/reset.css">
  <link rel="stylesheet" href="/assets/css/variables.css">
  <link rel="stylesheet" href="/assets/css/main.css">
  <link rel="stylesheet" href="/assets/css/components.css">
  <link rel="stylesheet" href="/assets/css/pages.css">

  <?php if (isset($extra_head)) echo $extra_head; ?>
</head>
<body>

<a href="#main-content" class="skip-link">Aller au contenu principal</a>

<?php include __DIR__ . '/nav.php'; ?>

<main id="main-content">

# guillaume.robier.org

Site web personnel de Guillaume Robier — carte de visite premium et CV interactif.

**Stack** : PHP 8.x vanilla · HTML5 sémantique · CSS3 (variables, grid, animations) · JS minimal

---

## Table des matières

- [Installation & déploiement local](#installation)
- [Structure du projet](#structure)
- [Modifier le contenu](#modifier-le-contenu)
- [Ajouter une réalisation](#ajouter-une-réalisation)
- [Télécharger les assets](#télécharger-les-assets)
- [Configurer le déploiement GitHub Actions](#déploiement-automatique)

---

## Installation

```bash
git clone git@github.com:9ui11aum3/guillaume_personalwebsite.git
cd guillaume_personalwebsite

# Télécharger les assets (photos, logos)
bash scripts/download_assets.sh

# Lancer un serveur PHP local
php -S localhost:8080
```

Ouvrir http://localhost:8080

**Prérequis** : PHP 8.0+ installé localement (Apache/Nginx en prod).

---

## Structure

```
/
├── index.php          # Accueil
├── syit.php           # Page SYIT (priorité #1)
├── odonaview.php      # Page Odonaview
├── parcours.php       # CV timeline
├── realisations.php   # Portfolio projets
├── expertise.php      # Domaines d'expertise
├── 404.php            # Page d'erreur
├── includes/
│   ├── config.php     # Constantes (URL, email)
│   ├── data.php       # ← Toutes les données du site
│   ├── helpers.php    # Fonctions utilitaires
│   ├── header.php     # Template <head> + nav
│   └── footer.php     # Template footer
├── assets/
│   ├── css/           # Design system CSS
│   ├── js/            # JS minimal
│   ├── img/           # Images et logos
│   ├── fonts/         # Polices self-hosted
│   └── cv/            # CV PDF téléchargeable
├── scripts/
│   └── download_assets.sh
└── .github/workflows/deploy.yml
```

---

## Modifier le contenu

**Toutes les données du site** sont dans `includes/data.php`.

### Modifier une expérience

```php
// includes/data.php — tableau $experiences
$experiences = [
    [
        'period'   => 'Oct. 2025 — Présent',
        'role'     => 'Directeur Général',
        'company'  => 'Odonaview',
        'tags'     => ['IA Vision', 'Direction'],
        'desc'     => 'Description...',
        'current'  => true,
    ],
    // ...
];
```

### Modifier les stats

```php
// includes/data.php — tableau $stats
$stats = [
    ['value' => '10+', 'label' => 'ans d\'expérience', 'icon' => 'calendar'],
    // ...
];
```

### Modifier la configuration

```php
// includes/config.php
define('EMAIL_CONTACT', 'guillaume@robier.org'); // jamais en clair dans le HTML
define('LINKEDIN_URL', 'https://www.linkedin.com/in/guillaumerobier');
```

---

## Ajouter une réalisation

Dans `includes/data.php`, ajouter un élément au tableau `$realisations` :

```php
$realisations[] = [
    'id'      => 'mon-projet',       // slug unique (lettres minuscules, tirets)
    'title'   => 'Titre du projet',
    'client'  => 'Nom du client',    // peut être 'Client confidentiel'
    'sector'  => 'Secteur',
    'year'    => '2025',
    'desc'    => 'Description détaillée du projet (3-5 lignes).',
    'stack'   => ['Tech1', 'Tech2', 'Tech3'],
    'impact'  => 'Résultat mesurable',
    'icon'    => 'server',           // shield, server, network, briefcase, cpu, layers, zap, lock, globe, router
];
```

---

## Ajouter le CV PDF

Déposer le fichier dans :
```
assets/cv/CV_Guillaume_ROBIER.pdf
```
Le bouton de téléchargement apparaîtra automatiquement sur la page parcours.

---

## Télécharger les assets

```bash
# Depuis la racine du projet
bash scripts/download_assets.sh
```

Le script télécharge automatiquement les logos (Wikimedia Commons) et la photo.
Si un téléchargement échoue, un SVG placeholder est créé pour ne pas casser le rendu.

**Logos à ajouter manuellement si nécessaire** :
- `assets/img/logos/odonaview.png` — depuis odonaview.com
- `assets/img/logos/syit.svg` — créé automatiquement
- `assets/img/photo/guillaume_robier.png` — depuis l'article PSM

---

## Déploiement automatique

### GitHub Actions — secrets à configurer

Dans `Settings → Secrets and variables → Actions` du repository GitHub :

| Secret | Valeur | Exemple |
|--------|--------|---------|
| `DEPLOY_HOST` | Hostname ou IP du serveur | `mon-serveur.example.com` |
| `DEPLOY_USER` | Utilisateur SSH | `www-data` ou `deploy` |
| `DEPLOY_SSH_KEY` | Contenu complet de la clé privée SSH | `-----BEGIN OPENSSH PRIVATE KEY-----...` |
| `DEPLOY_PATH` | Chemin absolu sur le serveur | `/var/www/guillaume.robier.org/public_html` |

### Déploiement manuel

```bash
rsync -avz --delete \
  --exclude='.git/' --exclude='scripts/' --exclude='README.md' \
  ./ user@serveur:/var/www/guillaume.robier.org/
```

### Configuration serveur recommandée

- Apache 2.4+ avec `mod_rewrite`, `mod_headers`, `mod_expires`
- PHP 8.0+
- HTTPS obligatoire (certificat Let's Encrypt recommandé)

---

## Sécurité

- L'email de contact n'apparaît **jamais en clair** dans le HTML
- Protection assurée par obfuscation base64 + JS côté client
- Fallback `direction: rtl` pour les visiteurs sans JS
- Headers HTTP de sécurité dans `.htaccess`
- Accès aux dossiers `includes/` et `scripts/` bloqué

---

## Polices

Pour les performances optimales, auto-héberger les polices :

1. Télécharger depuis [fonts.google.com/specimen/Inter](https://fonts.google.com/specimen/Inter) et [fonts.google.com/specimen/JetBrains+Mono](https://fonts.google.com/specimen/JetBrains+Mono)
2. Exporter en `.woff2` (variable font)
3. Placer dans `assets/fonts/inter-var.woff2` et `assets/fonts/jetbrains-mono-var.woff2`
4. Créer `assets/fonts/fonts.css` avec les `@font-face` correspondants
5. Référencer dans `includes/header.php`

En l'absence des fichiers, le navigateur utilise la police système (`system-ui, sans-serif`).

---

*Site construit avec PHP vanilla — pas de framework, pas de dépendances. Compatible hébergement mutualisé LAMP.*

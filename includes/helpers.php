<?php
/**
 * Fonctions utilitaires
 */

/**
 * Encode chaque caractère de l'email en entité HTML numérique
 */
function encode_email_for_html(string $email): string
{
    $encoded = '';
    for ($i = 0; $i < strlen($email); $i++) {
        $encoded .= '&#' . ord($email[$i]) . ';';
    }
    return $encoded;
}

/**
 * Obfusque l'email pour usage JS (base64 split user/domain)
 */
function obfuscate_for_js(string $email): array
{
    [$user, $domain] = explode('@', $email, 2);
    return [
        'user'   => base64_encode($user),
        'domain' => base64_encode($domain),
    ];
}

/**
 * Retourne un lien mailto obfusqué prêt à l'usage
 */
function mailto_link(string $label, string $class = 'btn btn-primary', string $aria = 'Envoyer un email'): string
{
    $obf = obfuscate_for_js(EMAIL_CONTACT);
    $rev = strrev(EMAIL_CONTACT);
    return sprintf(
        '<a href="#" class="js-mailto %s" data-u="%s" data-d="%s" aria-label="%s">%s</a>' .
        '<noscript><span class="email-fallback" title="Email (lecture de droite à gauche)">%s</span></noscript>',
        htmlspecialchars($class),
        htmlspecialchars($obf['user']),
        htmlspecialchars($obf['domain']),
        htmlspecialchars($aria),
        htmlspecialchars($label),
        htmlspecialchars($rev)
    );
}

/**
 * Sortie sécurisée
 */
function e(string $str): string
{
    return htmlspecialchars($str, ENT_QUOTES | ENT_HTML5, 'UTF-8');
}

/**
 * Retourne un SVG placeholder pour un logo manquant
 */
function svg_placeholder(string $name, string $color = '#6366f1', int $w = 160, int $h = 60): string
{
    $safe = e($name);
    return <<<SVG
<svg xmlns="http://www.w3.org/2000/svg" width="{$w}" height="{$h}" viewBox="0 0 {$w} {$h}" role="img" aria-label="{$safe}">
  <rect width="{$w}" height="{$h}" rx="6" fill="{$color}" fill-opacity="0.15" stroke="{$color}" stroke-width="1.5"/>
  <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" fill="{$color}" font-family="Inter,sans-serif" font-size="13" font-weight="600">{$safe}</text>
</svg>
SVG;
}

/**
 * Vérifie si une image existe, sinon retourne le SVG placeholder
 */
function img_or_placeholder(string $path, string $alt, string $class = '', int $w = 160, int $h = 60): string
{
    $full = $_SERVER['DOCUMENT_ROOT'] . $path;
    if (file_exists($full) && filesize($full) > 100) {
        return sprintf('<img src="%s" alt="%s" class="%s" width="%d" height="%d" loading="lazy">', e($path), e($alt), e($class), $w, $h);
    }
    return svg_placeholder($alt, '#6366f1', $w, $h);
}

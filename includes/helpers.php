<?php
/**
 * Fonctions utilitaires — helpers.php
 */

/** Sortie sécurisée */
function e(string $str): string
{
    return htmlspecialchars($str, ENT_QUOTES | ENT_HTML5, 'UTF-8');
}

/** Obfuscation email pour JS */
function obfuscate_for_js(string $email): array
{
    [$user, $domain] = explode('@', $email, 2);
    return ['user' => base64_encode($user), 'domain' => base64_encode($domain)];
}

/** Lien mailto obfusqué */
function mailto_link(string $label, string $class = 'btn btn-primary', string $aria = 'Envoyer un email'): string
{
    $obf = obfuscate_for_js(EMAIL_CONTACT);
    return sprintf(
        '<a href="#" class="js-mailto %s" data-u="%s" data-d="%s" aria-label="%s">%s</a>'
        . '<noscript><span class="email-fallback" title="Email — droite à gauche">%s</span></noscript>',
        e($class), e($obf['user']), e($obf['domain']), e($aria),
        e($label), e(strrev(EMAIL_CONTACT))
    );
}

/** Icônes SVG inline (subset Lucide) */
function icon(string $name, int $size = 24, string $stroke = 'currentColor'): string
{
    static $paths = [
        'shield'    => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>',
        'server'    => '<rect x="2" y="2" width="20" height="8" rx="2"/><rect x="2" y="14" width="20" height="8" rx="2"/><line x1="6" y1="6" x2="6.01" y2="6"/><line x1="6" y1="18" x2="6.01" y2="18"/>',
        'network'   => '<rect x="9" y="2" width="6" height="6"/><rect x="16" y="16" width="6" height="6"/><rect x="2" y="16" width="6" height="6"/><path d="M5 16V8h14v8M12 8v8"/>',
        'briefcase' => '<rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 0 0-4 0v2M12 12v4M8 12v4"/>',
        'cpu'       => '<rect x="4" y="4" width="16" height="16" rx="2"/><rect x="9" y="9" width="6" height="6"/><line x1="9" y1="1" x2="9" y2="4"/><line x1="15" y1="1" x2="15" y2="4"/><line x1="9" y1="20" x2="9" y2="23"/><line x1="15" y1="20" x2="15" y2="23"/><line x1="20" y1="9" x2="23" y2="9"/><line x1="20" y1="14" x2="23" y2="14"/><line x1="1" y1="9" x2="4" y2="9"/><line x1="1" y1="14" x2="4" y2="14"/>',
        'layers'    => '<polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/>',
        'zap'       => '<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>',
        'lock'      => '<rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/>',
        'globe'     => '<circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>',
        'router'    => '<rect x="2" y="9" width="20" height="12" rx="2"/><path d="M8 9V5l4-3 4 3v4"/><line x1="6" y1="14" x2="6.01" y2="14"/>',
        'calendar'  => '<rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/>',
        'check'     => '<polyline points="20 6 9 17 4 12"/>',
        'arrow'     => '<path d="M5 12h14M12 5l7 7-7 7"/>',
        'external'  => '<path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/>',
        'download'  => '<path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/>',
        'monitor'   => '<rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/>',
        'eye'       => '<path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/>',
    ];
    $path = $paths[$name] ?? $paths['cpu'];
    return sprintf(
        '<svg width="%d" height="%d" viewBox="0 0 24 24" fill="none" stroke="%s" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">%s</svg>',
        $size, $size, $stroke, $path
    );
}

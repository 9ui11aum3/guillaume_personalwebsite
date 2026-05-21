#!/bin/bash
# ============================================================
# download_assets.sh — Téléchargement des assets externes
# guillaume.robier.org
# ============================================================
set -e

UA="Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36"
DIR_PHOTO="assets/img/photo"
DIR_LOGOS="assets/img/logos"
DIR_CLIENTS="assets/img/clients"
DIR_FONTS="assets/fonts"

mkdir -p "$DIR_PHOTO" "$DIR_LOGOS" "$DIR_CLIENTS" "$DIR_FONTS"

OK="✅"
WARN="⚠️ "
INFO="ℹ️ "

dl() {
  local url="$1"
  local dest="$2"
  local name="$3"
  if curl -sL --max-time 15 -A "$UA" -o "$dest" "$url" 2>/dev/null && [ -s "$dest" ] && [ "$(wc -c < "$dest")" -gt 100 ]; then
    echo "$OK $name téléchargé"
  else
    echo "$WARN $name — téléchargement échoué, création d'un placeholder SVG"
    rm -f "$dest"
    return 1
  fi
}

svg_placeholder() {
  local file="$1"
  local label="$2"
  local color="${3:-#6366f1}"
  cat > "$file" << SVGEOF
<svg xmlns="http://www.w3.org/2000/svg" width="160" height="60" viewBox="0 0 160 60" role="img" aria-label="${label}">
  <rect width="160" height="60" rx="6" fill="${color}" fill-opacity="0.12" stroke="${color}" stroke-width="1.5"/>
  <text x="80" y="34" dominant-baseline="middle" text-anchor="middle" fill="${color}" font-family="Inter,sans-serif" font-size="13" font-weight="600">${label}</text>
</svg>
SVGEOF
  echo "$INFO Placeholder SVG créé pour $label"
}

echo ""
echo "═══════════════════════════════════════════"
echo "  Téléchargement des assets"
echo "═══════════════════════════════════════════"
echo ""

# ── Photo Guillaume ──────────────────────────────────────────
echo "→ Photo officielle..."
dl "https://www.protectionsecurite-magazine.fr/media/news/odonaview-012026.png" \
   "$DIR_PHOTO/guillaume_robier.png" "Photo Guillaume Robier" \
|| dl "https://www.protectionsecurite-magazine.fr/cache/media/news/1000x800_odonaview-012026.png" \
      "$DIR_PHOTO/guillaume_robier.png" "Photo Guillaume Robier (fallback)" \
|| { svg_placeholder "$DIR_PHOTO/guillaume_robier.svg" "G.R." "#6366f1"; }

# ── Logo Odonaview ───────────────────────────────────────────
echo "→ Logo Odonaview..."
dl "https://odonaview.com/wp-content/uploads/2025/10/logo-odonaview.png" \
   "$DIR_LOGOS/odonaview.png" "Logo Odonaview" \
|| svg_placeholder "$DIR_LOGOS/odonaview.svg" "Odonaview" "#06b6d4"

# ── Logo Evitech ─────────────────────────────────────────────
echo "→ Logo Evitech..."
dl "https://www.evitech.com/templates/evitech/images/logo.png" \
   "$DIR_LOGOS/evitech.png" "Logo Evitech" \
|| svg_placeholder "$DIR_LOGOS/evitech.svg" "Evitech" "#6366f1"

# ── Logo CPE Lyon ────────────────────────────────────────────
echo "→ Logo CPE Lyon..."
dl "https://www.cpe.fr/wp-content/themes/cpe/img/logo-cpe.svg" \
   "$DIR_LOGOS/cpe_lyon.svg" "Logo CPE Lyon" \
|| svg_placeholder "$DIR_LOGOS/cpe_lyon.svg" "CPE Lyon" "#e63946"
cp "$DIR_LOGOS/cpe_lyon.svg" "$DIR_LOGOS/cpe_lyon.png" 2>/dev/null || true

# ── Logo Université Lyon 1 ───────────────────────────────────
echo "→ Logo Université Lyon 1..."
dl "https://www.univ-lyon1.fr/sites/univ-lyon1/themes/lyon1/images/logo-ucbl.svg" \
   "$DIR_LOGOS/univ_lyon1.svg" "Logo Univ Lyon 1" \
|| svg_placeholder "$DIR_LOGOS/univ_lyon1.svg" "Lyon 1" "#005aaa"
cp "$DIR_LOGOS/univ_lyon1.svg" "$DIR_LOGOS/univ_lyon1.png" 2>/dev/null || true

# ── Logos clients — Wikimedia Commons ────────────────────────
echo ""
echo "→ Logos clients (Wikimedia)..."

dl "https://upload.wikimedia.org/wikipedia/commons/d/dc/%C3%89lectricit%C3%A9_de_France_logo.svg" \
   "$DIR_CLIENTS/edf.svg" "Logo EDF" \
|| svg_placeholder "$DIR_CLIENTS/edf.svg" "EDF" "#e20025"

dl "https://upload.wikimedia.org/wikipedia/commons/5/5d/Thales_Logo.svg" \
   "$DIR_CLIENTS/thales.svg" "Logo Thales" \
|| svg_placeholder "$DIR_CLIENTS/thales.svg" "Thales" "#0066cc"

dl "https://upload.wikimedia.org/wikipedia/commons/2/29/Orano_logo.svg" \
   "$DIR_CLIENTS/orano.svg" "Logo ORANO" \
|| svg_placeholder "$DIR_CLIENTS/orano.svg" "ORANO" "#e87722"

dl "https://upload.wikimedia.org/wikipedia/commons/0/0e/Eutelsat_logo.svg" \
   "$DIR_CLIENTS/eutelsat.svg" "Logo Eutelsat" \
|| svg_placeholder "$DIR_CLIENTS/eutelsat.svg" "Eutelsat" "#003087"

dl "https://upload.wikimedia.org/wikipedia/commons/2/26/RTE_Logo.svg" \
   "$DIR_CLIENTS/rte.svg" "Logo RTE" \
|| svg_placeholder "$DIR_CLIENTS/rte.svg" "RTE" "#e2001a"

dl "https://upload.wikimedia.org/wikipedia/commons/0/0a/TotalEnergies_logo.svg" \
   "$DIR_CLIENTS/totalenergies.svg" "Logo TotalEnergies" \
|| svg_placeholder "$DIR_CLIENTS/totalenergies.svg" "TotalEnergies" "#e00025"

dl "https://www.greenyellow.com/wp-content/uploads/2021/04/logo-greenyellow.svg" \
   "$DIR_CLIENTS/greenyellow.svg" "Logo GreenYellow" \
|| svg_placeholder "$DIR_CLIENTS/greenyellow.svg" "GreenYellow" "#78b500"
cp "$DIR_CLIENTS/greenyellow.svg" "$DIR_CLIENTS/greenyellow.png" 2>/dev/null || true

# ── Logos technologies ────────────────────────────────────────
echo ""
echo "→ Logos technologies..."

dl "https://upload.wikimedia.org/wikipedia/commons/9/95/MikroTik_Logo.png" \
   "$DIR_LOGOS/mikrotik.png" "Logo MikroTik" \
|| svg_placeholder "$DIR_LOGOS/mikrotik.svg" "MikroTik" "#e00025"

dl "https://upload.wikimedia.org/wikipedia/commons/0/01/Proxmox-VE-logo.svg" \
   "$DIR_LOGOS/proxmox.svg" "Logo Proxmox" \
|| svg_placeholder "$DIR_LOGOS/proxmox.svg" "Proxmox" "#e57000"

dl "https://upload.wikimedia.org/wikipedia/commons/0/03/Fortinet_logo.svg" \
   "$DIR_LOGOS/fortinet.svg" "Logo Fortinet" \
|| svg_placeholder "$DIR_LOGOS/fortinet.svg" "Fortinet" "#ee3124"

dl "https://upload.wikimedia.org/wikipedia/commons/0/08/Cisco_logo_blue_2016.svg" \
   "$DIR_LOGOS/cisco.svg" "Logo Cisco" \
|| svg_placeholder "$DIR_LOGOS/cisco.svg" "Cisco" "#1ba0d7"

dl "https://upload.wikimedia.org/wikipedia/commons/2/27/Ubiquiti_Inc._logo.svg" \
   "$DIR_LOGOS/ubiquiti.svg" "Logo Ubiquiti" \
|| svg_placeholder "$DIR_LOGOS/ubiquiti.svg" "Ubiquiti" "#0559c9"

dl "https://upload.wikimedia.org/wikipedia/commons/4/4e/Docker_%28container_engine%29_logo.svg" \
   "$DIR_LOGOS/docker.svg" "Logo Docker" \
|| svg_placeholder "$DIR_LOGOS/docker.svg" "Docker" "#0db7ed"

dl "https://upload.wikimedia.org/wikipedia/commons/9/9a/Vmware.svg" \
   "$DIR_LOGOS/vmware.svg" "Logo VMware" \
|| svg_placeholder "$DIR_LOGOS/vmware.svg" "VMware" "#607078"

dl "https://upload.wikimedia.org/wikipedia/commons/3/35/Tux.svg" \
   "$DIR_LOGOS/linux.svg" "Logo Linux/Tux" \
|| svg_placeholder "$DIR_LOGOS/linux.svg" "Linux" "#fcc624"

dl "https://www.dolibarr.org/medias/image/www.dolibarr.org/Logos/Logo%20Dolibarr%20mono.png" \
   "$DIR_LOGOS/dolibarr.png" "Logo Dolibarr" \
|| svg_placeholder "$DIR_LOGOS/dolibarr.svg" "Dolibarr" "#6c5ce7"

# ── Favicon SVG ──────────────────────────────────────────────
echo ""
echo "→ Création du favicon SVG..."
cat > "$DIR_LOGOS/favicon.svg" << 'FAVEOF'
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
  <rect width="64" height="64" rx="12" fill="#6366f1"/>
  <text x="32" y="44" text-anchor="middle" font-family="monospace" font-size="28" font-weight="800" fill="white">gr</text>
</svg>
FAVEOF
echo "$OK Favicon créé"

# ── Polices Google Fonts self-hosted ─────────────────────────
echo ""
echo "→ Polices (Inter + JetBrains Mono)..."
echo "$INFO Pour des raisons de fiabilité, téléchargez les polices via:"
echo "   https://fonts.google.com/specimen/Inter"
echo "   https://fonts.google.com/specimen/JetBrains+Mono"
echo "   → Placer les fichiers .woff2 dans assets/fonts/"

# Tentative de téléchargement direct via fontsource CDN
dl "https://fonts.gstatic.com/s/inter/v13/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuLyfAZ9hiJ-Ek-_EeA.woff2" \
   "$DIR_FONTS/inter-var.woff2" "Inter Variable" \
|| echo "$WARN Inter à télécharger manuellement depuis fonts.google.com"

dl "https://fonts.gstatic.com/s/jetbrainsmono/v18/tDbY2o-flEEny0FZhsfKu5WU4zr3E_BX0PnT8RD8yKxjOVSe.woff2" \
   "$DIR_FONTS/jetbrains-mono-var.woff2" "JetBrains Mono Variable" \
|| echo "$WARN JetBrains Mono à télécharger manuellement"

# Inline @font-face CSS si les polices sont disponibles
if [ -f "$DIR_FONTS/inter-var.woff2" ] && [ -f "$DIR_FONTS/jetbrains-mono-var.woff2" ]; then
  cat > "$DIR_FONTS/fonts.css" << 'FONTEOF'
@font-face {
  font-family: 'Inter';
  src: url('/assets/fonts/inter-var.woff2') format('woff2');
  font-weight: 100 900;
  font-style: normal;
  font-display: swap;
}

@font-face {
  font-family: 'JetBrains Mono';
  src: url('/assets/fonts/jetbrains-mono-var.woff2') format('woff2');
  font-weight: 100 800;
  font-style: normal;
  font-display: swap;
}
FONTEOF
  echo "$OK fonts.css créé"
fi

# ── SYIT logo placeholder ─────────────────────────────────────
if [ ! -f "$DIR_LOGOS/syit.svg" ]; then
  cat > "$DIR_LOGOS/syit.svg" << 'SYITEOF'
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 160 56" role="img" aria-label="SYIT">
  <defs>
    <linearGradient id="g" x1="0%" y1="0%" x2="100%" y2="100%">
      <stop offset="0%" stop-color="#6366f1"/>
      <stop offset="100%" stop-color="#ec4899"/>
    </linearGradient>
  </defs>
  <rect width="160" height="56" rx="8" fill="url(#g)" fill-opacity="0.1" stroke="url(#g)" stroke-width="1.5"/>
  <text x="80" y="36" dominant-baseline="middle" text-anchor="middle" fill="url(#g)" font-family="monospace" font-size="24" font-weight="800" letter-spacing="4">SYIT</text>
</svg>
SYITEOF
  echo "$OK Logo SYIT SVG créé"
fi

echo ""
echo "═══════════════════════════════════════════"
echo "$OK Téléchargement terminé"
echo "$INFO Vérifier les assets dans assets/img/"
echo "═══════════════════════════════════════════"


<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Baseline IT Development — Crafting Digital Excellence</title>
<meta name="description" content="Professional graphic design and web development agency. We craft brand identities, UI/UX, social media, and digital solutions that convert.">
 
<!-- ============================================================
     LUXURY TYPOGRAPHY STACK
     ── Cormorant Garamond  →  Display / Headlines  (high-contrast editorial serif)
     ── Inter               →  Body / UI copy       (refined grotesque, industry gold standard)
     ── Space Grotesk       →  Labels / Nav / Badges (geometric, distinctive, modern)
     ============================================================ -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600&family=Inter:wght@300;400;500;600;700&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
 
<style>
/* ============================================================
   CSS VARIABLES — DUAL THEME
   ============================================================ */
:root {
  --accent:         #00E5BE;
  --accent-2:       #0099FF;
  --accent-dim:     rgba(0,229,190,0.10);
  --accent-glow:    rgba(0,229,190,0.25);
  --accent-glow-lg: rgba(0,229,190,0.12);
  --danger:         #FF4757;
  --warning:        #FFB830;
  --success:        #2ED573;
 
  /* ── LUXURY FONT STACK ── */
  --font-display: 'Cormorant Garamond', Georgia, serif;   /* Headlines, hero, section titles */
  --font-body:    'Inter', system-ui, sans-serif;          /* Body copy, paragraphs, forms     */
  --font-ui:      'Space Grotesk', sans-serif;             /* Nav, labels, badges, buttons     */
 
  --radius:         16px;
  --radius-sm:      10px;
  --radius-lg:      24px;
  --radius-xl:      36px;
  --nav-h:          72px;
  --transition:     0.24s cubic-bezier(.4,0,.2,1);
  --transition-slow:0.5s  cubic-bezier(.4,0,.2,1);
 
  /* ── Letter spacing presets for each role ── */
  --ls-display: -0.04em;   /* Tight for large editorial serifs */
  --ls-ui:       0.06em;   /* Open for small uppercase labels  */
  --ls-body:    -0.01em;   /* Slightly tight for Inter at body size */
}
 
[data-theme="dark"] {
  --bg:          #080A0D;
  --bg2:         #0E1014;
  --bg3:         #151820;
  --bg4:         #1E2130;
  --bg5:         #252A3A;
  --border:      rgba(255,255,255,0.07);
  --border-2:    rgba(255,255,255,0.12);
  --text:        #F0F2F8;
  --text-2:      #8E93AA;
  --text-3:      #4E5370;
  --text-inv:    #080A0D;
  --card-bg:     #0E1014;
  --card-shadow: 0 8px 40px rgba(0,0,0,0.5);
  --nav-bg:      rgba(8,10,13,0.88);
  --hero-grain:  url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
}
 
[data-theme="light"] {
  --bg:          #F4F6FB;
  --bg2:         #FFFFFF;
  --bg3:         #EBEEF6;
  --bg4:         #DDE2EF;
  --bg5:         #CDD4E8;
  --border:      rgba(0,0,0,0.08);
  --border-2:    rgba(0,0,0,0.14);
  --text:        #0C0E18;
  --text-2:      #5A6080;
  --text-3:      #9AA0BA;
  --text-inv:    #F4F6FB;
  --card-bg:     #FFFFFF;
  --card-shadow: 0 4px 28px rgba(0,0,0,0.07);
  --nav-bg:      rgba(244,246,251,0.92);
  --hero-grain:  none;
}
 
/* ============================================================
   BASE RESET
   ============================================================ */
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
html { font-size: 16px; scroll-behavior: smooth; }
 
body {
  font-family: var(--font-body);
  font-weight: 400;
  letter-spacing: var(--ls-body);
  background: var(--bg);
  color: var(--text);
  overflow-x: hidden;
  transition: background var(--transition), color var(--transition);
  line-height: 1.65;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-rendering: optimizeLegibility;
}
 
a { text-decoration: none; color: inherit; }
button { cursor: pointer; font-family: var(--font-ui); border: none; outline: none; }
input, textarea, select { font-family: var(--font-body); }
img { max-width: 100%; display: block; }
ul { list-style: none; }
 
::-webkit-scrollbar { width: 5px; }
::-webkit-scrollbar-track { background: var(--bg); }
::-webkit-scrollbar-thumb { background: var(--bg5); border-radius: 10px; }
::-webkit-scrollbar-thumb:hover { background: var(--accent); }
 
/* ============================================================
   UTILITY — TYPE ROLES
   Enforce font assignments globally by role, not by element
   ============================================================ */
.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 24px;
}
 
/* All large headings use the display serif */
h1, h2, h3,
.section-title-lg,
.hero-headline,
.cta-title,
.modal-title,
.footer-brand-name,
.why-feature-title,
.service-title,
.step-title,
.testi-name,
.portfolio-name,
.nav-logo-text {
  font-family: var(--font-display);
  -webkit-font-smoothing: subpixel-antialiased;
}
 
/* All UI chrome uses Space Grotesk */
nav, button,
.nav-link, .nav-logo-text span,
.section-eyebrow,
.hero-badge,
.portfolio-cat,
.portfolio-filters,
.filter-btn,
.badge, .meta-pill,
.form-label,
.footer-col-title,
.footer-bottom-link,
.footer-copyright,
.service-arrow,
.stat-label,
.hero-stat-label,
.step-desc,
.testi-company,
.author-company,
.contact-info-label,
.why-stat-label,
.why-progress-top,
.marquee-item,
.marquee-label {
  font-family: var(--font-ui);
}
 
/* Body copy stays Inter */
p, li,
.section-sub,
.hero-sub,
.service-desc,
.why-feature-desc,
.testi-text,
.modal-desc,
.footer-brand-desc,
.footer-contact-text,
.contact-info-val,
.form-input,
.form-textarea,
.form-select-field,
.inquiry-msg,
.activity-text {
  font-family: var(--font-body);
}
 
.text-accent   { color: var(--accent); }
.text-muted    { color: var(--text-2); }
.fw-600        { font-weight: 600; }
 
/* ── Section Eyebrow — Space Grotesk, open tracking ── */
.section-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-family: var(--font-ui);
  font-size: 10px;
  font-weight: 600;
  letter-spacing: var(--ls-ui);
  text-transform: uppercase;
  color: var(--accent);
  margin-bottom: 18px;
  padding: 6px 14px;
  background: var(--accent-dim);
  border: 1px solid rgba(0,229,190,0.2);
  border-radius: 30px;
}
.section-eyebrow::before {
  content: '';
  width: 6px; height: 6px;
  background: var(--accent);
  border-radius: 50%;
  animation: pulse 2s infinite;
}
 
/* ── Display headline — Cormorant Garamond, very tight ── */
.section-title-lg {
  font-family: var(--font-display);
  font-size: clamp(32px, 4vw, 52px);
  font-weight: 600;
  line-height: 1.08;
  letter-spacing: var(--ls-display);
  margin-bottom: 18px;
}
 
/* ── Body subtitle ── */
.section-sub {
  font-family: var(--font-body);
  font-size: 16px;
  font-weight: 400;
  color: var(--text-2);
  max-width: 520px;
  line-height: 1.75;
  letter-spacing: var(--ls-body);
}
 
/* ============================================================
   BUTTONS — Space Grotesk, tracked, caps-feel
   ============================================================ */
.btn {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 13px 26px;
  border-radius: var(--radius-sm);
  font-family: var(--font-ui);
  font-size: 13px;
  font-weight: 600;
  letter-spacing: 0.03em;
  cursor: pointer;
  transition: all var(--transition);
  border: 1px solid transparent;
  white-space: nowrap;
}
 
.btn-primary { background: var(--accent); color: #000; border-color: var(--accent); }
.btn-primary:hover { background: #00cca9; box-shadow: 0 6px 28px var(--accent-glow); transform: translateY(-2px); }
 
.btn-outline { background: transparent; color: var(--text); border-color: var(--border-2); }
.btn-outline:hover { border-color: var(--accent); color: var(--accent); background: var(--accent-dim); }
 
.btn-ghost { background: transparent; color: var(--accent); border-color: transparent; padding-left: 0; }
.btn-ghost:hover { gap: 12px; }
 
.btn-lg {
  padding: 16px 34px;
  font-size: 13px;
  letter-spacing: 0.05em;
  border-radius: 12px;
}
 
.btn-icon { width: 18px; height: 18px; flex-shrink: 0; }
 
/* ============================================================
   NAVBAR
   ============================================================ */
.navbar {
  position: fixed; top: 0; left: 0; right: 0;
  height: var(--nav-h);
  background: var(--nav-bg);
  backdrop-filter: blur(24px);
  -webkit-backdrop-filter: blur(24px);
  border-bottom: 1px solid var(--border);
  z-index: 900;
  transition: background var(--transition), border-color var(--transition), box-shadow var(--transition);
}
.navbar.scrolled { box-shadow: 0 4px 30px rgba(0,0,0,0.2); border-bottom-color: var(--border-2); }
 
.navbar-inner {
  height: 100%;
  display: flex; align-items: center; justify-content: space-between;
  gap: 32px;
  padding: 20px 0;
}
 
.nav-logo { display: flex; align-items: center; gap: 12px; flex-shrink: 0; }
 
.nav-logo-mark {
  width: 40px; height: 40px;
  background: var(--accent);
  border-radius: 11px;
  display: flex; align-items: center; justify-content: center;
  font-family: var(--font-display);
  font-weight: 700;
  font-size: 19px;
  color: #000;
  box-shadow: 0 0 22px var(--accent-glow);
  flex-shrink: 0;
  letter-spacing: 0;
  transition: box-shadow var(--transition), transform var(--transition);
}
.nav-logo:hover .nav-logo-mark { box-shadow: 0 0 36px var(--accent-glow); transform: rotate(-4deg) scale(1.05); }
 
/* Logo text — two-line treatment */
.nav-logo-text {
  font-family: var(--font-display);
  font-weight: 600;
  font-size: 16px;
  color: var(--text);
  line-height: 1.15;
  letter-spacing: -0.02em;
}
.nav-logo-text span {
  display: block;
  font-family: var(--font-ui);
  font-size: 9px;
  font-weight: 500;
  color: var(--text-3);
  letter-spacing: 0.14em;
  text-transform: uppercase;
  margin-top: 2px;
}
 
/* Nav links */
.nav-links {
  display: flex; align-items: center;
  gap: 2px; flex: 1; justify-content: center;
}
 
.nav-link {
  padding: 8px 14px;
  border-radius: var(--radius-sm);
  font-family: var(--font-ui);
  font-size: 13px;
  font-weight: 500;
  letter-spacing: 0.01em;
  color: var(--text-2);
  cursor: pointer;
  transition: all var(--transition);
}
.nav-link:hover  { color: var(--text); background: var(--bg3); }
.nav-link.active { color: var(--accent); background: var(--accent-dim); }
 
.nav-actions { display: flex; align-items: center; gap: 10px; flex-shrink: 0; }
 
.nav-theme-btn {
  width: 38px; height: 38px;
  border-radius: var(--radius-sm);
  background: var(--bg3); border: 1px solid var(--border);
  color: var(--text-2); font-size: 16px; cursor: pointer;
  display: flex; align-items: center; justify-content: center;
  transition: all var(--transition);
}
.nav-theme-btn:hover { border-color: var(--accent); color: var(--accent); background: var(--accent-dim); }
 
.nav-cta { padding: 9px 20px; font-size: 12px; letter-spacing: 0.04em; }
 
.nav-hamburger {
  display: none; flex-direction: column; gap: 5px;
  width: 38px; height: 38px;
  background: var(--bg3); border: 1px solid var(--border);
  border-radius: var(--radius-sm);
  align-items: center; justify-content: center;
  cursor: pointer; padding: 9px;
}
.nav-hamburger span {
  display: block; width: 100%; height: 1.5px;
  background: var(--text-2); border-radius: 2px;
  transition: all var(--transition);
}
 
.mobile-menu {
  display: none;
  position: fixed; top: var(--nav-h); left: 0; right: 0;
  background: var(--bg2); border-bottom: 1px solid var(--border);
  padding: 16px 24px 24px;
  z-index: 899; box-shadow: 0 20px 60px rgba(0,0,0,0.3);
  flex-direction: column; gap: 4px;
}
.mobile-menu.open { display: flex; animation: slideDown 0.24s ease; }
.mobile-menu .nav-link { padding: 12px 16px; display: block; border-radius: var(--radius-sm); font-size: 14px; }
.mobile-menu-footer {
  margin-top: 16px; padding-top: 16px;
  border-top: 1px solid var(--border);
  display: flex; flex-direction: column; gap: 10px;
}
 
/* ============================================================
   HERO SECTION
   ============================================================ */
.hero {
  min-height: 100vh;
  display: flex; align-items: center;
  padding-top: var(--nav-h);
  position: relative; overflow: hidden;
}
 
.hero-bg { position: absolute; inset: 0; z-index: 0; }
 
.hero-blob {
  position: absolute; border-radius: 50%;
  filter: blur(90px); opacity: 0.18;
  animation: blobFloat 8s ease-in-out infinite;
}
.hero-blob-1 { width:600px;height:600px;background:radial-gradient(circle,var(--accent),transparent);top:-100px;right:-100px; }
.hero-blob-2 { width:400px;height:400px;background:radial-gradient(circle,#0099FF,transparent);bottom:-80px;left:-80px;animation-delay:-4s; }
.hero-blob-3 { width:300px;height:300px;background:radial-gradient(circle,#C864FF,transparent);top:40%;left:40%;opacity:0.08;animation-delay:-2s; }
 
.hero-grid {
  position: absolute; inset: 0;
  background-image: linear-gradient(var(--border) 1px,transparent 1px), linear-gradient(90deg,var(--border) 1px,transparent 1px);
  background-size: 60px 60px;
  mask-image: radial-gradient(ellipse 80% 80% at 50% 50%,black,transparent);
  opacity: 0.5;
}
.hero-noise { position: absolute; inset: 0; background-image: var(--hero-grain); pointer-events: none; }
 
.hero-inner {
  position: relative; z-index: 1;
  display: grid; grid-template-columns: 1fr 1fr;
  align-items: center; gap: 60px;
  padding: 80px 0;
}
 
/* ── Hero Badge — Space Grotesk uppercase ── */
.hero-badge {
  display: inline-flex; align-items: center; gap: 8px;
  background: var(--bg3); border: 1px solid var(--border-2);
  border-radius: 30px; padding: 7px 16px 7px 8px;
  font-family: var(--font-ui);
  font-size: 10px; font-weight: 600;
  letter-spacing: var(--ls-ui);
  text-transform: uppercase;
  color: var(--text-2);
  margin-bottom: 28px;
  animation: fadeUp 0.8s ease both;
}
.hero-badge-dot {
  width: 24px; height: 24px;
  background: var(--accent); border-radius: 50%;
  display: flex; align-items: center; justify-content: center;
  font-family: var(--font-display);
  font-size: 13px; color: #000; font-weight: 600; flex-shrink: 0;
}
 
/* ── Hero Headline — Cormorant Garamond, majestic scale ── */
.hero-headline {
  font-family: var(--font-display);
  font-size: clamp(52px, 7vw, 88px);
  font-weight: 600;
  line-height: 0.98;
  letter-spacing: var(--ls-display);
  margin-bottom: 28px;
  animation: fadeUp 0.8s 0.1s ease both;
}
 
.hero-headline .line-plain {
  display: block;
  color: var(--text);
}
 
/* Gradient accent text — Cormorant italic for elegance */
.hero-headline .line-accent {
  display: block;
  font-style: italic;
  font-weight: 300;
  background: linear-gradient(100deg, var(--accent) 0%, var(--accent-2) 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}
 
/* Subline — Inter, lighter weight */
.hero-sub {
  font-family: var(--font-body);
  font-size: 16px;
  font-weight: 400;
  color: var(--text-2);
  line-height: 1.75;
  max-width: 460px;
  margin-bottom: 36px;
  letter-spacing: var(--ls-body);
  animation: fadeUp 0.8s 0.2s ease both;
}
 
.hero-cta {
  display: flex; gap: 14px; flex-wrap: wrap;
  margin-bottom: 52px;
  animation: fadeUp 0.8s 0.3s ease both;
}
 
/* ── Stats — display numeral, ui label ── */
.hero-stats {
  display: flex; gap: 32px;
  padding-top: 32px; border-top: 1px solid var(--border);
  animation: fadeUp 0.8s 0.4s ease both;
}
 
.hero-stat-value {
  font-family: var(--font-display);
  font-size: 34px; font-weight: 600;
  line-height: 1; margin-bottom: 5px;
  letter-spacing: -0.03em;
}
.hero-stat-value span { color: var(--accent); font-style: italic; }
 
.hero-stat-label {
  font-family: var(--font-ui);
  font-size: 10px; font-weight: 500;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  color: var(--text-3);
}
 
/* Hero visual (unchanged structure, just typography-independent) */
.hero-visual { position: relative; animation: fadeUp 0.8s 0.2s ease both; }
 
.hero-visual-main {
  background: var(--bg3); border: 1px solid var(--border-2);
  border-radius: var(--radius-lg); overflow: hidden;
  position: relative; aspect-ratio: 4/3;
  display: flex; align-items: center; justify-content: center;
}
 
.hero-mockup {
  width: 90%; background: var(--bg2); border: 1px solid var(--border);
  border-radius: var(--radius); overflow: hidden;
  box-shadow: 0 20px 60px rgba(0,0,0,0.4);
}
 
.hero-mockup-bar {
  height: 36px; background: var(--bg3); border-bottom: 1px solid var(--border);
  display: flex; align-items: center; padding: 0 14px; gap: 7px;
}
 
.mockup-dot { width: 10px; height: 10px; border-radius: 50%; }
.mockup-dot-r { background: #FF5F57; }
.mockup-dot-y { background: #FEBC2E; }
.mockup-dot-g { background: #28C840; }
 
.mockup-url {
  flex: 1; background: var(--bg4); border-radius: 6px; height: 22px;
  margin-left: 10px; display: flex; align-items: center; padding: 0 10px;
  font-family: var(--font-ui); font-size: 10px; color: var(--text-3); gap: 6px;
  letter-spacing: 0.02em;
}
 
.hero-mockup-content { padding: 20px; display: flex; flex-direction: column; gap: 12px; }
.mockup-row { height: 10px; border-radius: 4px; background: var(--bg4); }
.mockup-grid-preview { display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-top: 4px; }
.mockup-card {
  background: var(--bg3); border: 1px solid var(--border);
  border-radius: 8px; height: 70px;
  display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 6px;
}
.mockup-card-dot { width: 28px; height: 28px; border-radius: 8px; }
.mockup-card-line { width: 50px; height: 6px; background: var(--bg5); border-radius: 4px; }
 
.hero-float-card {
  position: absolute; background: var(--bg2); border: 1px solid var(--border-2);
  border-radius: 14px; padding: 12px 16px;
  box-shadow: 0 12px 40px rgba(0,0,0,0.3);
  display: flex; align-items: center; gap: 10px;
  font-family: var(--font-ui); font-size: 11px; font-weight: 600;
  backdrop-filter: blur(10px);
  animation: floatCard 4s ease-in-out infinite;
  white-space: nowrap;
}
.hero-float-card:nth-child(2) { animation-delay: -2s; }
.float-card-icon { width:32px;height:32px;border-radius:8px;display:flex;align-items:center;justify-content:center;font-size:16px;flex-shrink:0; }
.hero-float-1 { top:-20px;left:-30px; }
.hero-float-2 { bottom:30px;right:-30px; }
 
/* ============================================================
   MARQUEE
   ============================================================ */
.marquee-section {
  padding: 32px 0;
  border-top: 1px solid var(--border); border-bottom: 1px solid var(--border);
  overflow: hidden; position: relative;
}
 
.marquee-label {
  text-align: center;
  font-family: var(--font-ui);
  font-size: 9px; font-weight: 600;
  letter-spacing: 0.16em; text-transform: uppercase;
  color: var(--text-3); margin-bottom: 20px;
}
 
.marquee-track {
  display: flex; gap: 48px;
  animation: marquee 30s linear infinite; width: max-content;
}
.marquee-track:hover { animation-play-state: paused; }
 
.marquee-item {
  display: flex; align-items: center; gap: 10px;
  color: var(--text-3);
  font-family: var(--font-ui);
  font-size: 13px; font-weight: 500; letter-spacing: 0.02em;
  white-space: nowrap; transition: color var(--transition);
}
.marquee-item:hover { color: var(--text-2); }
.marquee-item-icon { font-size: 18px; opacity: 0.6; }
.marquee-sep { width: 4px; height: 4px; border-radius: 50%; background: var(--bg5); flex-shrink: 0; }
 
/* ============================================================
   SERVICES
   ============================================================ */
.services-section { padding: 100px 0; }
.services-header { text-align: center; margin-bottom: 64px; }
.services-header .section-sub { margin: 0 auto; }
 
.services-grid { display: grid; grid-template-columns: repeat(4,1fr); gap: 20px; }
 
.service-card {
  background: var(--card-bg); border: 1px solid var(--border);
  border-radius: var(--radius); padding: 30px 26px;
  position: relative; overflow: hidden; transition: all var(--transition); cursor: default;
}
.service-card::before {
  content: ''; position: absolute; inset: 0;
  background: linear-gradient(135deg,var(--accent-dim),transparent 60%);
  opacity: 0; transition: opacity var(--transition);
}
.service-card:hover { border-color: rgba(0,229,190,0.25); transform: translateY(-4px); box-shadow: var(--card-shadow); }
.service-card:hover::before { opacity: 1; }
 
.service-icon {
  width: 52px; height: 52px; border-radius: 14px;
  display: flex; align-items: center; justify-content: center;
  font-size: 24px; margin-bottom: 22px;
  position: relative; transition: transform var(--transition);
}
.service-card:hover .service-icon { transform: scale(1.1) rotate(-4deg); }
 
.service-icon-bg-teal   { background: var(--accent-dim); }
.service-icon-bg-blue   { background: rgba(0,153,255,0.12); }
.service-icon-bg-purple { background: rgba(200,100,255,0.12); }
.service-icon-bg-orange { background: rgba(255,184,48,0.12); }
.service-icon-bg-green  { background: rgba(46,213,115,0.12); }
.service-icon-bg-red    { background: rgba(255,71,87,0.12); }
.service-icon-bg-cyan   { background: rgba(0,229,190,0.1); }
 
/* Service title — display serif at intimate scale */
.service-title {
  font-family: var(--font-display);
  font-size: 19px; font-weight: 600;
  letter-spacing: -0.02em;
  margin-bottom: 10px; position: relative;
  line-height: 1.15;
}
 
.service-desc {
  font-family: var(--font-body);
  font-size: 13px; color: var(--text-2);
  line-height: 1.7; position: relative;
}
 
.service-arrow {
  display: inline-flex; align-items: center; gap: 6px;
  font-family: var(--font-ui);
  font-size: 11px; font-weight: 600; letter-spacing: 0.04em;
  color: var(--accent); margin-top: 18px;
  opacity: 0; transform: translateX(-6px);
  transition: all var(--transition); position: relative;
}
.service-card:hover .service-arrow { opacity: 1; transform: translateX(0); }
 
/* ============================================================
   PORTFOLIO
   ============================================================ */
.portfolio-section {
  padding: 100px 0; background: var(--bg2);
  border-top: 1px solid var(--border); border-bottom: 1px solid var(--border);
}
.portfolio-header {
  display: flex; align-items: flex-end; justify-content: space-between;
  gap: 24px; margin-bottom: 48px; flex-wrap: wrap;
}
.portfolio-filters { display: flex; gap: 6px; flex-wrap: wrap; }
 
.filter-btn {
  padding: 7px 16px; border-radius: 30px;
  font-family: var(--font-ui); font-size: 11px; font-weight: 600;
  letter-spacing: 0.04em;
  border: 1px solid var(--border); background: transparent;
  color: var(--text-2); cursor: pointer; transition: all var(--transition);
}
.filter-btn:hover  { border-color: var(--accent); color: var(--accent); }
.filter-btn.active { background: var(--accent); color: #000; border-color: var(--accent); }
 
.portfolio-grid { display: grid; grid-template-columns: repeat(12,1fr); gap: 20px; }
.portfolio-item {
  border-radius: var(--radius); overflow: hidden; position: relative;
  cursor: pointer; background: var(--bg3); border: 1px solid var(--border);
  transition: all var(--transition);
}
.portfolio-item:hover { transform: translateY(-4px); box-shadow: 0 20px 60px rgba(0,0,0,0.4); }
 
.portfolio-item-1 { grid-column: span 7; }
.portfolio-item-2 { grid-column: span 5; }
.portfolio-item-3 { grid-column: span 4; }
.portfolio-item-4 { grid-column: span 4; }
.portfolio-item-5 { grid-column: span 4; }
 
.portfolio-thumb {
  width: 100%; aspect-ratio: 16/10;
  display: flex; align-items: center; justify-content: center;
  font-size: 52px; position: relative; overflow: hidden; background: var(--bg4);
}
.portfolio-item-2 .portfolio-thumb,
.portfolio-item-3 .portfolio-thumb,
.portfolio-item-4 .portfolio-thumb,
.portfolio-item-5 .portfolio-thumb { aspect-ratio: 4/3; }
 
.portfolio-thumb-overlay {
  position: absolute; inset: 0;
  background: linear-gradient(to bottom,transparent 30%,rgba(0,0,0,0.8));
  opacity: 0; transition: opacity var(--transition);
  display: flex; align-items: flex-end; padding: 20px;
}
.portfolio-item:hover .portfolio-thumb-overlay { opacity: 1; }
.portfolio-overlay-btns { display: flex; gap: 8px; }
.portfolio-overlay-btn {
  width: 38px; height: 38px; border-radius: 8px;
  background: rgba(255,255,255,0.15); backdrop-filter: blur(8px);
  border: 1px solid rgba(255,255,255,0.2); color: #fff;
  display: flex; align-items: center; justify-content: center;
  font-size: 16px; cursor: pointer; transition: all var(--transition);
}
.portfolio-overlay-btn:hover { background: var(--accent); border-color: var(--accent); color: #000; }
 
.portfolio-info { padding: 16px 18px; }
 
.portfolio-cat {
  font-family: var(--font-ui);
  font-size: 9px; font-weight: 600;
  letter-spacing: 0.12em; text-transform: uppercase;
  color: var(--accent); margin-bottom: 6px;
}
 
.portfolio-name {
  font-family: var(--font-display);
  font-size: 17px; font-weight: 600;
  letter-spacing: -0.02em; line-height: 1.2;
  margin-bottom: 4px;
}
 
.portfolio-client {
  font-family: var(--font-ui);
  font-size: 11px; color: var(--text-3);
  letter-spacing: 0.02em;
}
 
.portfolio-featured-badge {
  position: absolute; top: 14px; left: 14px;
  background: var(--accent); color: #000;
  font-family: var(--font-ui);
  font-size: 9px; font-weight: 700;
  letter-spacing: 0.08em; text-transform: uppercase;
  padding: 4px 10px; border-radius: 20px;
}
 
.thumb-brand  { background: linear-gradient(135deg,#1a1a2e,#16213e,#0f3460) !important; }
.thumb-ui     { background: linear-gradient(135deg,#0d1b2a,#1b2838,#2d4a8a) !important; }
.thumb-logo   { background: linear-gradient(135deg,#0a0a0a,#1a0a2e,#2d1457) !important; }
.thumb-social { background: linear-gradient(135deg,#1a0505,#3d0c02,#8b1a1a) !important; }
.thumb-pack   { background: linear-gradient(135deg,#0a1a0a,#1b4332,#2d6a4f) !important; }
 
/* ============================================================
   WHY CHOOSE US
   ============================================================ */
.why-section { padding: 100px 0; }
.why-inner { display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: center; }
.why-features { display: flex; flex-direction: column; gap: 20px; margin-top: 36px; }
 
.why-feature {
  display: flex; gap: 18px; align-items: flex-start;
  padding: 20px; border-radius: var(--radius);
  border: 1px solid transparent; transition: all var(--transition); cursor: default;
}
.why-feature:hover { background: var(--bg2); border-color: var(--border); }
 
.why-feature-icon {
  width: 44px; height: 44px; border-radius: 12px;
  background: var(--accent-dim); border: 1px solid rgba(0,229,190,0.2);
  color: var(--accent); display: flex; align-items: center; justify-content: center;
  font-size: 20px; flex-shrink: 0;
}
 
.why-feature-title {
  font-family: var(--font-display);
  font-size: 18px; font-weight: 600;
  letter-spacing: -0.02em; margin-bottom: 6px; line-height: 1.2;
}
 
.why-feature-desc { font-family: var(--font-body); font-size: 13px; color: var(--text-2); line-height: 1.7; }
 
.why-visual { position: relative; }
.why-visual-main {
  background: var(--bg2); border: 1px solid var(--border);
  border-radius: var(--radius-lg); padding: 32px; position: relative; overflow: hidden;
}
.why-visual-main::before {
  content: ''; position: absolute; top: -60px; right: -60px;
  width: 220px; height: 220px;
  background: radial-gradient(circle,var(--accent-glow-lg),transparent 70%);
  pointer-events: none;
}
 
.why-stats-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 28px; }
 
.why-stat-box {
  background: var(--bg3); border: 1px solid var(--border);
  border-radius: var(--radius-sm); padding: 20px; text-align: center;
  transition: all var(--transition);
}
.why-stat-box:hover { border-color: var(--accent); }
 
.why-stat-num {
  font-family: var(--font-display);
  font-size: 38px; font-weight: 600; font-style: italic;
  color: var(--accent); line-height: 1; margin-bottom: 6px;
  letter-spacing: -0.03em;
}
 
.why-stat-label {
  font-family: var(--font-ui);
  font-size: 9px; font-weight: 600;
  letter-spacing: 0.1em; text-transform: uppercase; color: var(--text-3);
}
 
.why-progress-list { display: flex; flex-direction: column; gap: 14px; }
 
.why-progress-top {
  display: flex; justify-content: space-between;
  font-family: var(--font-ui); font-size: 11px; font-weight: 500;
  letter-spacing: 0.02em; margin-bottom: 6px; color: var(--text-2);
}
.why-progress-val { color: var(--accent); font-weight: 600; }
 
.why-progress-bar { height: 4px; background: var(--bg4); border-radius: 6px; overflow: hidden; }
.why-progress-fill { height: 100%; border-radius: 6px; background: linear-gradient(90deg,var(--accent),var(--accent-2)); }
 
/* ============================================================
   PROCESS STEPS
   ============================================================ */
.process-section {
  padding: 100px 0; background: var(--bg2);
  border-top: 1px solid var(--border); border-bottom: 1px solid var(--border);
}
.process-header { text-align: center; margin-bottom: 64px; }
.process-header .section-sub { margin: 0 auto; }
 
.process-steps {
  display: grid; grid-template-columns: repeat(5,1fr);
  gap: 0; position: relative;
}
.process-steps::before {
  content: ''; position: absolute; top: 36px; left: 10%; right: 10%;
  height: 1px; background: linear-gradient(90deg,transparent,var(--accent),transparent); z-index: 0;
}
 
.process-step {
  display: flex; flex-direction: column; align-items: center;
  text-align: center; padding: 0 16px; position: relative; z-index: 1;
}
 
.step-num {
  width: 72px; height: 72px; border-radius: 50%;
  background: var(--bg3); border: 1px solid var(--border);
  display: flex; align-items: center; justify-content: center;
  font-size: 22px; color: var(--text-3);
  margin-bottom: 22px; transition: all var(--transition);
}
.step-num.active {
  background: var(--accent-dim); border-color: var(--accent); color: var(--accent);
  box-shadow: 0 0 30px var(--accent-glow);
}
.step-icon { font-size: 22px; }
 
.step-title {
  font-family: var(--font-display);
  font-size: 18px; font-weight: 600; letter-spacing: -0.02em;
  margin-bottom: 8px; line-height: 1.2;
}
.step-desc {
  font-family: var(--font-ui);
  font-size: 11px; color: var(--text-2); line-height: 1.65;
  font-weight: 400; letter-spacing: 0.01em;
}
 
/* ============================================================
   TESTIMONIALS
   ============================================================ */
.testimonials-section { padding: 100px 0; }
.testi-header { text-align: center; margin-bottom: 56px; }
.testi-header .section-sub { margin: 0 auto; }
 
.testi-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: 24px; margin-bottom: 40px; }
 
.testi-card {
  background: var(--card-bg); border: 1px solid var(--border);
  border-radius: var(--radius); padding: 28px;
  position: relative; overflow: hidden; transition: all var(--transition);
}
.testi-card:hover { border-color: rgba(0,229,190,0.25); transform: translateY(-3px); box-shadow: var(--card-shadow); }
 
/* Large Cormorant quotation mark as decoration */
.testi-card::before {
  content: '\201C';
  font-family: var(--font-display);
  font-size: 120px; line-height: 1;
  color: var(--accent); opacity: 0.07;
  position: absolute; top: -4px; left: 14px;
  pointer-events: none;
}
 
.testi-stars { color: var(--warning); font-size: 13px; letter-spacing: 3px; margin-bottom: 16px; }
 
/* Review text — Inter italic for elegance */
.testi-text {
  font-family: var(--font-body);
  font-size: 14px; color: var(--text-2);
  line-height: 1.8; margin-bottom: 24px;
  font-style: italic; position: relative;
  letter-spacing: var(--ls-body);
}
 
.testi-author { display: flex; align-items: center; gap: 12px; }
 
.testi-avatar {
  width: 44px; height: 44px; border-radius: 50%;
  display: flex; align-items: center; justify-content: center;
  font-family: var(--font-display);
  font-size: 18px; font-weight: 600;
  flex-shrink: 0; border: 1px solid var(--border-2);
}
.tav-green  { background: linear-gradient(135deg,#2ED573,#00E5BE); color:#000; }
.tav-blue   { background: linear-gradient(135deg,#4A90D9,#667eea); color:#fff; }
.tav-orange { background: linear-gradient(135deg,#FFB830,#FF6B6B); color:#000; }
.tav-purple { background: linear-gradient(135deg,#C864FF,#4A90D9); color:#fff; }
.tav-teal   { background: linear-gradient(135deg,#00E5BE,#0099FF); color:#000; }
.tav-red    { background: linear-gradient(135deg,#FF4757,#FFB830); color:#fff; }
 
.testi-name {
  font-family: var(--font-display);
  font-size: 15px; font-weight: 600;
  letter-spacing: -0.01em; margin-bottom: 2px;
}
.testi-company {
  font-family: var(--font-ui);
  font-size: 10px; color: var(--text-3); letter-spacing: 0.06em;
}
 
.testi-nav { display: flex; justify-content: center; gap: 8px; }
.testi-dot { width: 8px; height: 8px; border-radius: 50%; background: var(--bg5); cursor: pointer; transition: all var(--transition); }
.testi-dot.active { background: var(--accent); width: 24px; border-radius: 4px; }
 
/* ============================================================
   CTA BANNER
   ============================================================ */
.cta-section {
  padding: 80px 0; background: var(--bg2);
  border-top: 1px solid var(--border); border-bottom: 1px solid var(--border);
}
 
.cta-inner {
  background: var(--bg3); border: 1px solid var(--border-2);
  border-radius: var(--radius-xl); padding: 72px;
  text-align: center; position: relative; overflow: hidden;
}
.cta-inner::before {
  content: ''; position: absolute; top: -80px; left: 50%;
  transform: translateX(-50%);
  width: 400px; height: 300px;
  background: radial-gradient(ellipse,var(--accent-glow),transparent 70%);
  pointer-events: none;
}
.cta-grid-pattern {
  position: absolute; inset: 0;
  background-image: linear-gradient(var(--border) 1px,transparent 1px),
                    linear-gradient(90deg,var(--border) 1px,transparent 1px);
  background-size: 40px 40px; opacity: 0.5; border-radius: var(--radius-xl);
}
 
.cta-title {
  font-family: var(--font-display);
  font-size: clamp(36px,4.5vw,60px);
  font-weight: 600; line-height: 1.05;
  letter-spacing: var(--ls-display);
  margin-bottom: 18px; position: relative;
}
 
.cta-sub {
  font-family: var(--font-body);
  font-size: 16px; color: var(--text-2);
  max-width: 460px; margin: 0 auto 40px;
  line-height: 1.75; position: relative;
}
 
.cta-btns { display: flex; gap: 14px; justify-content: center; flex-wrap: wrap; position: relative; }
 
.cta-wa-btn {
  display: inline-flex; align-items: center; gap: 8px;
  padding: 14px 28px; border-radius: 12px;
  background: #25D366; color: #fff;
  font-family: var(--font-ui); font-size: 13px; font-weight: 600;
  letter-spacing: 0.03em;
  border: none; cursor: pointer; transition: all var(--transition);
  text-decoration: none;
}
.cta-wa-btn:hover { background: #1da855; box-shadow: 0 6px 28px rgba(37,211,102,0.3); transform: translateY(-2px); }
 
/* ============================================================
   CONTACT
   ============================================================ */
.contact-section { padding: 100px 0; }
.contact-inner { display: grid; grid-template-columns: 1fr 1fr; gap: 72px; align-items: start; }
 
.contact-info-list { display: flex; flex-direction: column; gap: 20px; margin-top: 36px; margin-bottom: 36px; }
 
.contact-info-item { display: flex; gap: 16px; align-items: flex-start; }
.contact-info-icon {
  width: 44px; height: 44px; border-radius: 12px;
  background: var(--accent-dim); border: 1px solid rgba(0,229,190,0.2);
  color: var(--accent); display: flex; align-items: center; justify-content: center;
  font-size: 18px; flex-shrink: 0;
}
.contact-info-label {
  font-family: var(--font-ui);
  font-size: 9px; font-weight: 600;
  letter-spacing: 0.12em; text-transform: uppercase;
  color: var(--text-3); margin-bottom: 4px;
}
.contact-info-val {
  font-family: var(--font-body);
  font-size: 14px; font-weight: 500; color: var(--text);
}
 
.contact-social { display: flex; gap: 10px; }
.social-btn {
  width: 42px; height: 42px; border-radius: 10px;
  background: var(--bg3); border: 1px solid var(--border);
  display: flex; align-items: center; justify-content: center;
  font-size: 18px; cursor: pointer; transition: all var(--transition);
  color: var(--text-2); text-decoration: none;
}
.social-btn:hover { border-color: var(--accent); color: var(--accent); background: var(--accent-dim); transform: translateY(-2px); }
 
.contact-form-card {
  background: var(--card-bg); border: 1px solid var(--border);
  border-radius: var(--radius-lg); padding: 36px;
}
 
.form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 16px; }
.form-group { display: flex; flex-direction: column; gap: 8px; margin-bottom: 16px; }
.form-group:last-child { margin-bottom: 0; }
 
.form-label {
  font-family: var(--font-ui);
  font-size: 9px; font-weight: 600;
  color: var(--text-2); letter-spacing: 0.1em; text-transform: uppercase;
}
 
.form-input, .form-textarea, .form-select-field {
  background: var(--bg3); border: 1px solid var(--border);
  border-radius: var(--radius-sm); padding: 13px 16px;
  color: var(--text); font-family: var(--font-body);
  font-size: 14px; outline: none;
  transition: all var(--transition); width: 100%;
  letter-spacing: var(--ls-body);
}
.form-input::placeholder, .form-textarea::placeholder { color: var(--text-3); }
.form-input:focus, .form-textarea:focus, .form-select-field:focus {
  border-color: var(--accent); background: var(--bg2);
  box-shadow: 0 0 0 3px var(--accent-dim);
}
.form-textarea { min-height: 130px; resize: vertical; }
 
.form-submit {
  width: 100%; padding: 15px;
  background: var(--accent); color: #000; border: none;
  border-radius: var(--radius-sm);
  font-family: var(--font-ui); font-size: 13px; font-weight: 700;
  letter-spacing: 0.06em; text-transform: uppercase;
  cursor: pointer; transition: all var(--transition);
  display: flex; align-items: center; justify-content: center; gap: 8px;
}
.form-submit:hover { background: #00cca9; box-shadow: 0 6px 28px var(--accent-glow); transform: translateY(-1px); }
 
/* ============================================================
   FOOTER
   ============================================================ */
.footer { background: var(--bg2); border-top: 1px solid var(--border); padding-top: 72px; }
 
.footer-main {
  display: grid; grid-template-columns: 1.6fr 1fr 1fr 1fr;
  gap: 48px; padding-bottom: 56px; border-bottom: 1px solid var(--border);
}
 
.footer-brand-logo { display: flex; align-items: center; gap: 10px; margin-bottom: 18px; }
 
.footer-logo-mark {
  width: 38px; height: 38px; background: var(--accent);
  border-radius: 10px; display: flex; align-items: center; justify-content: center;
  font-family: var(--font-display); font-weight: 700; font-size: 18px;
  color: #000; box-shadow: 0 0 18px var(--accent-glow); flex-shrink: 0;
}
 
.footer-brand-name {
  font-family: var(--font-display);
  font-weight: 600; font-size: 16px;
  line-height: 1.2; letter-spacing: -0.02em;
}
.footer-brand-name span {
  display: block;
  font-family: var(--font-ui);
  font-size: 9px; font-weight: 500;
  color: var(--text-3); letter-spacing: 0.14em; text-transform: uppercase;
  margin-top: 2px;
}
 
.footer-brand-desc {
  font-family: var(--font-body);
  font-size: 13px; color: var(--text-2);
  line-height: 1.75; margin-bottom: 24px; max-width: 280px;
}
 
.footer-col-title {
  font-family: var(--font-ui);
  font-size: 9px; font-weight: 700;
  letter-spacing: 0.14em; text-transform: uppercase;
  color: var(--text); margin-bottom: 20px;
}
 
.footer-links { display: flex; flex-direction: column; gap: 11px; }
 
.footer-link {
  font-family: var(--font-body);
  font-size: 13px; color: var(--text-2); cursor: pointer;
  transition: color var(--transition);
  display: flex; align-items: center; gap: 6px;
}
.footer-link:hover { color: var(--accent); }
.footer-link::before {
  content: '→'; font-size: 11px; opacity: 0;
  transition: opacity var(--transition), transform var(--transition);
  transform: translateX(-4px);
}
.footer-link:hover::before { opacity: 1; transform: translateX(0); }
 
.footer-contact-item { display: flex; gap: 10px; align-items: flex-start; margin-bottom: 14px; }
.footer-contact-icon { font-size: 14px; flex-shrink: 0; margin-top: 1px; color: var(--accent); }
.footer-contact-text { font-family: var(--font-body); font-size: 13px; color: var(--text-2); line-height: 1.55; }
 
.footer-bottom {
  padding: 22px 0; display: flex; align-items: center;
  justify-content: space-between; flex-wrap: wrap; gap: 12px;
}
.footer-copyright { font-family: var(--font-ui); font-size: 11px; color: var(--text-3); letter-spacing: 0.02em; }
.footer-copyright a { color: var(--accent); }
.footer-bottom-links { display: flex; gap: 20px; }
.footer-bottom-link {
  font-family: var(--font-ui); font-size: 11px;
  color: var(--text-3); cursor: pointer; letter-spacing: 0.02em;
  transition: color var(--transition);
}
.footer-bottom-link:hover { color: var(--accent); }
 
/* ============================================================
   SCROLL TO TOP
   ============================================================ */
.scroll-top {
  position: fixed; bottom: 28px; right: 28px;
  width: 44px; height: 44px; background: var(--accent); color: #000;
  border-radius: 12px; display: flex; align-items: center; justify-content: center;
  font-family: var(--font-ui); font-size: 16px; cursor: pointer; z-index: 500;
  opacity: 0; transform: translateY(20px); transition: all var(--transition);
  box-shadow: 0 4px 20px var(--accent-glow); border: none;
}
.scroll-top.visible { opacity: 1; transform: translateY(0); }
.scroll-top:hover   { background: #00cca9; transform: translateY(-3px); }
 
/* ============================================================
   SCROLL REVEAL
   ============================================================ */
.reveal { opacity: 0; transform: translateY(30px); transition: opacity 0.7s ease, transform 0.7s ease; }
.reveal.visible { opacity: 1; transform: translateY(0); }
.reveal-delay-1 { transition-delay: 0.1s; }
.reveal-delay-2 { transition-delay: 0.2s; }
.reveal-delay-3 { transition-delay: 0.3s; }
.reveal-delay-4 { transition-delay: 0.4s; }
 
/* ============================================================
   MODAL
   ============================================================ */
.modal-overlay {
  position: fixed; inset: 0;
  background: rgba(0,0,0,0.8); backdrop-filter: blur(10px);
  z-index: 9999; display: flex; align-items: center; justify-content: center;
  padding: 20px; opacity: 0; pointer-events: none; transition: opacity var(--transition);
}
.modal-overlay.open { opacity: 1; pointer-events: all; }
 
.modal {
  background: var(--bg2); border: 1px solid var(--border-2);
  border-radius: var(--radius-lg); width: 100%; max-width: 680px;
  max-height: 90vh; overflow-y: auto;
  transform: scale(0.9) translateY(30px);
  transition: transform 0.3s cubic-bezier(.4,0,.2,1);
}
.modal-overlay.open .modal { transform: scale(1) translateY(0); }
 
.modal-header {
  padding: 28px 32px; border-bottom: 1px solid var(--border);
  display: flex; align-items: center; justify-content: space-between;
}
.modal-title {
  font-family: var(--font-display);
  font-size: 24px; font-weight: 600;
  letter-spacing: var(--ls-display);
}
 
.modal-close {
  width: 36px; height: 36px; border-radius: 8px;
  background: var(--bg3); border: 1px solid var(--border);
  color: var(--text-2); font-size: 20px; cursor: pointer;
  display: flex; align-items: center; justify-content: center;
  transition: all var(--transition);
}
.modal-close:hover { border-color: var(--danger); color: var(--danger); }
 
.modal-body { padding: 32px; }
.modal-thumb {
  width: 100%; height: 240px; background: var(--bg3);
  border-radius: var(--radius); display: flex; align-items: center;
  justify-content: center; font-size: 72px; margin-bottom: 24px;
}
 
.modal-meta { display: flex; gap: 10px; flex-wrap: wrap; margin-bottom: 16px; }
.meta-pill { padding: 4px 12px; border-radius: 20px; font-family: var(--font-ui); font-size: 10px; font-weight: 600; letter-spacing: 0.04em; }
.meta-pill-teal { background: var(--accent-dim); color: var(--accent); }
.meta-pill-blue { background: rgba(0,153,255,0.12); color: var(--accent-2); }
 
.modal-desc { font-family: var(--font-body); font-size: 14px; color: var(--text-2); line-height: 1.75; margin-bottom: 24px; }
 
.modal-footer {
  padding: 20px 32px; border-top: 1px solid var(--border);
  display: flex; gap: 12px; justify-content: flex-end;
}
 
/* ============================================================
   TOAST
   ============================================================ */
.toast-wrap { position: fixed; bottom: 24px; left: 50%; transform: translateX(-50%); z-index: 9999; }
.toast {
  background: var(--bg2); border: 1px solid var(--border-2);
  border-radius: 10px; padding: 14px 22px;
  display: flex; align-items: center; gap: 10px;
  font-family: var(--font-ui); font-size: 13px; font-weight: 500;
  letter-spacing: 0.01em;
  box-shadow: 0 10px 40px rgba(0,0,0,0.3);
  white-space: nowrap; animation: toastIn 0.3s ease both;
}
.toast.success { border-left: 3px solid var(--success); }
.toast-icon { font-size: 18px; }
 
/* ============================================================
   ANIMATIONS
   ============================================================ */
@keyframes fadeUp { from { opacity:0; transform:translateY(24px); } to { opacity:1; transform:translateY(0); } }
@keyframes pulse { 0%,100% { opacity:1; transform:scale(1); } 50% { opacity:.5; transform:scale(.8); } }
@keyframes blobFloat { 0%,100% { transform:translate(0,0) scale(1); } 33% { transform:translate(20px,-30px) scale(1.05); } 66% { transform:translate(-15px,20px) scale(.95); } }
@keyframes slideDown { from { opacity:0; transform:translateY(-12px); } to { opacity:1; transform:translateY(0); } }
@keyframes marquee { from { transform:translateX(0); } to { transform:translateX(-50%); } }
@keyframes floatCard { 0%,100% { transform:translateY(0); } 50% { transform:translateY(-8px); } }
@keyframes toastIn { from { opacity:0; transform:translateY(20px); } to { opacity:1; transform:translateY(0); } }
 
/* ============================================================
   RESPONSIVE
   ============================================================ */
@media (max-width: 1100px) {
  .services-grid { grid-template-columns: repeat(2,1fr); }
  .portfolio-item-1 { grid-column: span 12; }
  .portfolio-item-2 { grid-column: span 6; }
  .portfolio-item-3 { grid-column: span 4; }
  .portfolio-item-4 { grid-column: span 4; }
  .portfolio-item-5 { grid-column: span 4; }
  .footer-main { grid-template-columns: 1fr 1fr; }
  .process-steps { grid-template-columns: 1fr 1fr; }
  .process-steps::before { display: none; }
}
 
@media (max-width: 900px) {
  .hero-inner { grid-template-columns: 1fr; text-align: center; }
  .hero-sub { max-width: 100%; }
  .hero-cta { justify-content: center; }
  .hero-stats { justify-content: center; }
  .hero-visual { display: none; }
  .why-inner { grid-template-columns: 1fr; }
  .contact-inner { grid-template-columns: 1fr; }
  .testi-grid { grid-template-columns: 1fr 1fr; }
  .nav-links { display: none; }
  .nav-hamburger { display: flex; }
  .nav-cta { display: none; }
  .portfolio-item-3 { grid-column: span 6; }
  .portfolio-item-4 { grid-column: span 6; }
  .portfolio-item-5 { grid-column: span 12; }
}
 
@media (max-width: 640px) {
  .services-grid { grid-template-columns: 1fr; }
  .testi-grid { grid-template-columns: 1fr; }
  .portfolio-item-2 { grid-column: span 12; }
  .portfolio-item-3 { grid-column: span 12; }
  .portfolio-item-4 { grid-column: span 12; }
  .portfolio-item-5 { grid-column: span 12; }
  .process-steps { grid-template-columns: 1fr; }
  .footer-main { grid-template-columns: 1fr; }
  .cta-inner { padding: 36px 24px; }
  .form-row { grid-template-columns: 1fr; }
  .contact-form-card { padding: 24px 20px; }
  .hero-stats { flex-direction: column; gap: 16px; }
}
 
@media (max-width: 400px) {
  .container { padding: 0 16px; }
}
</style>
</head>
<body>
 
<!-- NAVBAR -->
<nav class="navbar" id="navbar">
  <div class="container">
    <div class="navbar-inner">
      <a href="#" class="nav-logo">
        <div class="nav-logo-mark">B</div>
        <div class="nav-logo-text">
          Baseline IT
          <span>Development Studio</span>
        </div>
      </a>
      <div class="nav-links" id="navLinks">
        <a class="nav-link active" onclick="scrollToSection('home')">Home</a>
        <a class="nav-link" onclick="scrollToSection('services')">Services</a>
        <a class="nav-link" onclick="scrollToSection('portfolio')">Portfolio</a>
        <a class="nav-link" onclick="scrollToSection('about')">About</a>
        <a class="nav-link" onclick="scrollToSection('testimonials')">Reviews</a>
        <a class="nav-link" onclick="scrollToSection('contact')">Contact</a>
      </div>
      <div class="nav-actions">
        <button class="nav-theme-btn" id="themeBtn" onclick="toggleTheme()" title="Toggle theme">🌙</button>
        <button class="btn btn-primary nav-cta" onclick="scrollToSection('contact')">Get a Quote</button>
        <button class="nav-hamburger" id="hamburger" onclick="toggleMobileMenu()">
          <span></span><span></span><span></span>
        </button>
      </div>
    </div>
  </div>
</nav>
 
<!-- Mobile Menu -->
<div class="mobile-menu" id="mobileMenu">
  <a class="nav-link" onclick="scrollToSection('home');toggleMobileMenu()">Home</a>
  <a class="nav-link" onclick="scrollToSection('services');toggleMobileMenu()">Services</a>
  <a class="nav-link" onclick="scrollToSection('portfolio');toggleMobileMenu()">Portfolio</a>
  <a class="nav-link" onclick="scrollToSection('about');toggleMobileMenu()">About</a>
  <a class="nav-link" onclick="scrollToSection('testimonials');toggleMobileMenu()">Reviews</a>
  <a class="nav-link" onclick="scrollToSection('contact');toggleMobileMenu()">Contact</a>
  <div class="mobile-menu-footer">
    <button class="btn btn-primary" style="width:100%;justify-content:center" onclick="scrollToSection('contact');toggleMobileMenu()">Get a Quote</button>
  </div>
</div>
 
<!-- HERO -->
<section id="home" class="hero">
  <div class="hero-bg">
    <div class="hero-blob hero-blob-1"></div>
    <div class="hero-blob hero-blob-2"></div>
    <div class="hero-blob hero-blob-3"></div>
    <div class="hero-grid"></div>
    <div class="hero-noise"></div>
  </div>
  <div class="container">
    <div class="hero-inner">
      <div class="hero-content">
        <div class="hero-badge">
          <div class="hero-badge-dot">✦</div>
          Premier Design's
        </div>
        <h1 class="hero-headline">
          <span class="line-plain">We Craft</span>
          <span class="line-accent">Digital Identities</span>
          <span class="line-plain">That Convert.</span>
        </h1>
        <p class="hero-sub">From brand identities to full-stack web solutions — Baseline IT Development turns your vision into a premium digital presence that earns trust and drives results.</p>
        <div class="hero-cta">
          <button class="btn btn-primary btn-lg" onclick="scrollToSection('portfolio')">
            <svg class="btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
            View Portfolio
          </button>
          <button class="btn btn-outline btn-lg" onclick="scrollToSection('contact')">
            Let's Talk
            <svg class="btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
          </button>
        </div>
        <div class="hero-stats">
          <div><div class="hero-stat-value">900<span>+</span></div><div class="hero-stat-label">Projects Delivered</div></div>
          <div><div class="hero-stat-value">300<span>+</span></div><div class="hero-stat-label">Happy Clients</div></div>
          <div><div class="hero-stat-value">13<span>+</span></div><div class="hero-stat-label">Years Experience</div></div>
          <div><div class="hero-stat-value">98<span>%</span></div><div class="hero-stat-label">Client Satisfaction</div></div>
        </div>
      </div>
      <div class="hero-visual">
        <div class="hero-float-card hero-float-1">
          <div class="float-card-icon" style="background:rgba(46,213,115,0.15)">✅</div>
          <div>
            <div style="color:var(--text);font-size:11px;font-weight:700;font-family:var(--font-ui)">Project Delivered</div>
            <div style="color:var(--text-3);font-size:10px;margin-top:1px;font-family:var(--font-ui);letter-spacing:0.02em">Nexus Brand Identity</div>
          </div>
        </div>
        <div class="hero-visual-main">
          <div class="hero-mockup">
            <div class="hero-mockup-bar">
              <div class="mockup-dot mockup-dot-r"></div>
              <div class="mockup-dot mockup-dot-y"></div>
              <div class="mockup-dot mockup-dot-g"></div>
              <div class="mockup-url">
                <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 010 20M12 2a15.3 15.3 0 000 20"/></svg>
                baselineit.dev
              </div>
            </div>
            <div class="hero-mockup-content">
              <div class="mockup-row" style="width:60%;height:14px;background:linear-gradient(90deg,var(--accent),var(--accent-2));opacity:0.7"></div>
              <div class="mockup-row" style="width:90%"></div>
              <div class="mockup-row" style="width:75%"></div>
              <div class="mockup-grid-preview">
                <div class="mockup-card"><div class="mockup-card-dot" style="background:linear-gradient(135deg,var(--accent),var(--accent-2))"></div><div class="mockup-card-line"></div></div>
                <div class="mockup-card"><div class="mockup-card-dot" style="background:linear-gradient(135deg,#C864FF,#4A90D9)"></div><div class="mockup-card-line"></div></div>
                <div class="mockup-card"><div class="mockup-card-dot" style="background:linear-gradient(135deg,#FFB830,#FF6B6B)"></div><div class="mockup-card-line"></div></div>
                <div class="mockup-card"><div class="mockup-card-dot" style="background:linear-gradient(135deg,#2ED573,#00cca9)"></div><div class="mockup-card-line"></div></div>
              </div>
              <div class="mockup-row" style="width:55%"></div>
            </div>
          </div>
        </div>
        <div class="hero-float-card hero-float-2">
          <div class="float-card-icon" style="background:rgba(255,184,48,0.15);font-size:18px">⭐</div>
          <div>
            <div style="color:var(--text);font-size:11px;font-weight:700;font-family:var(--font-ui)">5.0 Avg Rating</div>
            <div style="color:var(--warning);font-size:11px;margin-top:2px;letter-spacing:3px">★★★★★</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
 
<!-- MARQUEE -->
<div class="marquee-section">
  <div class="container"><div class="marquee-label">Trusted tools &amp; technologies we work with</div></div>
  <div class="marquee-track" id="marqueeTrack">
    <div class="marquee-item"><span class="marquee-item-icon">🎨</span> Adobe Illustrator</div><div class="marquee-sep"></div>
    <div class="marquee-item"><span class="marquee-item-icon">🖼️</span> Photoshop</div><div class="marquee-sep"></div>
    <div class="marquee-item"><span class="marquee-item-icon">✏️</span> Figma</div><div class="marquee-sep"></div>
    <div class="marquee-item"><span class="marquee-item-icon">🌐</span> Laravel</div><div class="marquee-sep"></div>
    <div class="marquee-item"><span class="marquee-item-icon">💻</span> Adobe XD</div><div class="marquee-sep"></div>
    <div class="marquee-item"><span class="marquee-item-icon">📦</span> After Effects</div><div class="marquee-sep"></div>
    <div class="marquee-item"><span class="marquee-item-icon">🛒</span> WordPress</div><div class="marquee-sep"></div>
    <div class="marquee-item"><span class="marquee-item-icon">📱</span> Canva Pro</div><div class="marquee-sep"></div>
    <div class="marquee-item"><span class="marquee-item-icon">⚡</span> InDesign</div><div class="marquee-sep"></div>
    <div class="marquee-item"><span class="marquee-item-icon">🎨</span> Adobe Illustrator</div><div class="marquee-sep"></div>
    <div class="marquee-item"><span class="marquee-item-icon">🖼️</span> Photoshop</div><div class="marquee-sep"></div>
    <div class="marquee-item"><span class="marquee-item-icon">✏️</span> Figma</div><div class="marquee-sep"></div>
    <div class="marquee-item"><span class="marquee-item-icon">🌐</span> Laravel</div><div class="marquee-sep"></div>
    <div class="marquee-item"><span class="marquee-item-icon">💻</span> Adobe XD</div><div class="marquee-sep"></div>
    <div class="marquee-item"><span class="marquee-item-icon">📦</span> After Effects</div><div class="marquee-sep"></div>
    <div class="marquee-item"><span class="marquee-item-icon">🛒</span> WordPress</div><div class="marquee-sep"></div>
    <div class="marquee-item"><span class="marquee-item-icon">📱</span> Canva Pro</div><div class="marquee-sep"></div>
    <div class="marquee-item"><span class="marquee-item-icon">⚡</span> InDesign</div><div class="marquee-sep"></div>
  </div>
</div>
 
<!-- SERVICES -->
<section id="services" class="services-section">
  <div class="container">
    <div class="services-header">
      <div class="section-eyebrow">Our Services</div>
      <h2 class="section-title-lg">Everything Your Brand<br>Needs to Stand Out</h2>
      <p class="section-sub">From pixel-perfect logos to high-converting web experiences — we cover the full spectrum of digital design and development.</p>
    </div>
    <div class="services-grid reveal">
      <div class="service-card"><div class="service-icon service-icon-bg-blue">🔵</div><div class="service-title">Logo Design</div><div class="service-desc">Memorable, scalable logos built on strategic thinking. Vectorized and delivered in all formats.</div><div class="service-arrow"></div></div>
      <div class="service-card"><div class="service-icon service-icon-bg-orange">🎨</div><div class="service-title">Brand Identity</div><div class="service-desc">Complete brand systems: logo, typography, color palette, guidelines and collateral design.</div><div class="service-arrow"></div></div>
      <div class="service-card"><div class="service-icon service-icon-bg-teal">💻</div><div class="service-title">UI/UX Design</div><div class="service-desc">Intuitive interfaces and user flows that delight users and maximize engagement and conversion.</div><div class="service-arrow"></div></div>
      <div class="service-card"><div class="service-icon service-icon-bg-purple">📱</div><div class="service-title">Social Media Design</div><div class="service-desc">Scroll-stopping creatives, reels covers, story templates, and full campaign kits.</div><div class="service-arrow"></div></div>
      <div class="service-card"><div class="service-icon service-icon-bg-green">🌐</div><div class="service-title">Website Design</div><div class="service-desc">Custom website UI design from landing pages to full multi-page websites — pixel-perfect.</div><div class="service-arrow"></div></div>
      <div class="service-card"><div class="service-icon service-icon-bg-teal">⚙️</div><div class="service-title">Web Development</div><div class="service-desc">Laravel & PHP powered backends with Blade templates, MySQL databases and clean code.</div><div class="service-arrow"></div></div>
      <div class="service-card"><div class="service-icon service-icon-bg-red">📦</div><div class="service-title">Packaging Design</div><div class="service-desc">Product packaging that makes your items stand out on shelves and online stores.</div><div class="service-arrow"></div></div>
      <div class="service-card"><div class="service-icon service-icon-bg-cyan">🖨️</div><div class="service-title">Print & Ad Design</div><div class="service-desc">Banners, flyers, billboards, brochures — any print material designed for maximum impact.</div><div class="service-arrow"></div></div>
    </div>
  </div>
</section>
 
<!-- PORTFOLIO -->
<section id="portfolio" class="portfolio-section">
  <div class="container">
    <div class="portfolio-header">
      <div>
        <div class="section-eyebrow">Featured Work</div>
        <h2 class="section-title-lg" style="margin-bottom:0">Our Latest Projects</h2>
      </div>
      <div class="portfolio-filters">
        <button class="filter-btn active" onclick="filterPortfolio(this,'all')">All</button>
        <button class="filter-btn" onclick="filterPortfolio(this,'branding')">Branding</button>
        <button class="filter-btn" onclick="filterPortfolio(this,'ui')">UI/UX</button>
        <button class="filter-btn" onclick="filterPortfolio(this,'logo')">Logo</button>
        <button class="filter-btn" onclick="filterPortfolio(this,'social')">Social</button>
        <button class="filter-btn" onclick="filterPortfolio(this,'web')">Web</button>
      </div>
    </div>
    <div class="portfolio-grid reveal">
      <div class="portfolio-item portfolio-item-1" data-cat="branding" onclick="openProjectModal('nexus')">
        <div class="portfolio-featured-badge">⭐ Featured</div>
        <div class="portfolio-thumb thumb-brand">🎨</div>
        <div class="portfolio-thumb-overlay"><div class="portfolio-overlay-btns"><button class="portfolio-overlay-btn">👁</button><button class="portfolio-overlay-btn">🔗</button></div></div>
        <div class="portfolio-info"><div class="portfolio-cat">Branding · Identity</div><div class="portfolio-name">Nexus Brand Identity System</div><div class="portfolio-client">Client: Nexus Corp · Jun 2025</div></div>
      </div>
      <div class="portfolio-item portfolio-item-2" data-cat="ui" onclick="openProjectModal('techflow')">
        <div class="portfolio-thumb thumb-ui">💻</div>
        <div class="portfolio-thumb-overlay"><div class="portfolio-overlay-btns"><button class="portfolio-overlay-btn">👁</button></div></div>
        <div class="portfolio-info"><div class="portfolio-cat">UI/UX Design</div><div class="portfolio-name">TechFlow Dashboard</div><div class="portfolio-client">Client: TechFlow Ltd</div></div>
      </div>
      <div class="portfolio-item portfolio-item-3" data-cat="logo" onclick="openProjectModal('pureedge')">
        <div class="portfolio-thumb thumb-logo" style="font-size:38px">🔵</div>
        <div class="portfolio-thumb-overlay"><div class="portfolio-overlay-btns"><button class="portfolio-overlay-btn">👁</button></div></div>
        <div class="portfolio-info"><div class="portfolio-cat">Logo Design</div><div class="portfolio-name">PureEdge Logo Suite</div><div class="portfolio-client">PureEdge Inc</div></div>
      </div>
      <div class="portfolio-item portfolio-item-4" data-cat="social" onclick="openProjectModal('spark')">
        <div class="portfolio-thumb thumb-social" style="font-size:38px">📱</div>
        <div class="portfolio-thumb-overlay"><div class="portfolio-overlay-btns"><button class="portfolio-overlay-btn">👁</button></div></div>
        <div class="portfolio-info"><div class="portfolio-cat">Social Media</div><div class="portfolio-name">Spark Campaign Kit</div><div class="portfolio-client">Spark Agency</div></div>
      </div>
      <div class="portfolio-item portfolio-item-5" data-cat="branding" onclick="openProjectModal('bloom')">
        <div class="portfolio-thumb thumb-pack" style="font-size:38px">📦</div>
        <div class="portfolio-thumb-overlay"><div class="portfolio-overlay-btns"><button class="portfolio-overlay-btn">👁</button></div></div>
        <div class="portfolio-info"><div class="portfolio-cat">Packaging Design</div><div class="portfolio-name">Organic Bloom Box</div><div class="portfolio-client">Bloom Organics</div></div>
      </div>
    </div>
    <div style="text-align:center;margin-top:48px" class="reveal">
      <button class="btn btn-outline btn-lg">Explore All Projects <svg class="btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></button>
    </div>
  </div>
</section>
 
<!-- WHY CHOOSE US -->
<section id="about" class="why-section">
  <div class="container">
    <div class="why-inner">
      <div>
        <div class="section-eyebrow reveal">Why Choose Us</div>
        <h2 class="section-title-lg reveal">Design that Speaks.<br>Code that Performs.</h2>
        <p class="section-sub reveal" style="margin-bottom:0">We combine strategic design thinking with technical excellence to deliver solutions that look stunning and work flawlessly.</p>
        <div class="why-features">
          <div class="why-feature reveal"><div class="why-feature-icon">🎯</div><div><div class="why-feature-title">Results-Driven Design</div><div class="why-feature-desc">Every design decision is tied to your business goals — not just aesthetics. We craft for conversion.</div></div></div>
          <div class="why-feature reveal reveal-delay-1"><div class="why-feature-icon">⚡</div><div><div class="why-feature-title">Fast Turnaround</div><div class="why-feature-desc">Tight deadlines are our specialty. Most projects delivered ahead of schedule without compromising quality.</div></div></div>
          <div class="why-feature reveal reveal-delay-2"><div class="why-feature-icon">♾️</div><div><div class="why-feature-title">Unlimited Revisions</div><div class="why-feature-desc">We work until you're 100% happy. Your satisfaction is the only measure of project completion.</div></div></div>
          <div class="why-feature reveal reveal-delay-3"><div class="why-feature-icon">📁</div><div><div class="why-feature-title">Full File Delivery</div><div class="why-feature-desc">You own everything. Source files, assets, and all formats are delivered and yours forever.</div></div></div>
        </div>
      </div>
      <div class="why-visual reveal">
        <div class="why-visual-main">
          <div class="why-stats-grid">
            <div class="why-stat-box"><div class="why-stat-num">900+</div><div class="why-stat-label">Projects Completed</div></div>
            <div class="why-stat-box"><div class="why-stat-num">98%</div><div class="why-stat-label">Satisfaction Rate</div></div>
            <div class="why-stat-box"><div class="why-stat-num">300+</div><div class="why-stat-label">Happy Clients</div></div>
            <div class="why-stat-box"><div class="why-stat-num">13+</div><div class="why-stat-label">Years Active</div></div>
          </div>
          <div class="why-progress-list">
            <div class="why-progress-item"><div class="why-progress-top"><span>Graphic Design</span><span class="why-progress-val">98%</span></div><div class="why-progress-bar"><div class="why-progress-fill" style="width:98%"></div></div></div>
            <div class="why-progress-item"><div class="why-progress-top"><span>UI/UX Design</span><span class="why-progress-val">92%</span></div><div class="why-progress-bar"><div class="why-progress-fill" style="width:92%"></div></div></div>
            <div class="why-progress-item"><div class="why-progress-top"><span>Web Development</span><span class="why-progress-val">85%</span></div><div class="why-progress-bar"><div class="why-progress-fill" style="width:85%"></div></div></div>
            <div class="why-progress-item"><div class="why-progress-top"><span>Branding Strategy</span><span class="why-progress-val">90%</span></div><div class="why-progress-bar"><div class="why-progress-fill" style="width:90%"></div></div></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
 
<!-- PROCESS -->
<section class="process-section">
  <div class="container">
    <div class="process-header">
      <div class="section-eyebrow reveal">Our Process</div>
      <h2 class="section-title-lg reveal">How We Bring Your Vision to Life</h2>
      <p class="section-sub reveal" style="margin:0 auto">A clear, collaborative process from discovery to delivery — designed for efficiency and exceptional results.</p>
    </div>
    <div class="process-steps">
      <div class="process-step reveal"><div class="step-num active"><span class="step-icon">🔍</span></div><div class="step-title">Discovery</div><div class="step-desc">We learn about your business, goals, target audience, and competition.</div></div>
      <div class="process-step reveal reveal-delay-1"><div class="step-num"><span class="step-icon">💡</span></div><div class="step-title">Strategy</div><div class="step-desc">We build a creative brief and define the direction, style, and deliverables.</div></div>
      <div class="process-step reveal reveal-delay-2"><div class="step-num"><span class="step-icon">✏️</span></div><div class="step-title">Design</div><div class="step-desc">Our designers craft the initial concepts with precision and creativity.</div></div>
      <div class="process-step reveal reveal-delay-3"><div class="step-num"><span class="step-icon">🔄</span></div><div class="step-title">Revisions</div><div class="step-desc">You provide feedback. We refine until every detail is perfect.</div></div>
      <div class="process-step reveal reveal-delay-4"><div class="step-num"><span class="step-icon">🚀</span></div><div class="step-title">Delivery</div><div class="step-desc">Final files in all formats, fully organized and ready to use.</div></div>
    </div>
  </div>
</section>
 
<!-- TESTIMONIALS -->
<section id="testimonials" class="testimonials-section">
  <div class="container">
    <div class="testi-header">
      <div class="section-eyebrow reveal">Client Reviews</div>
      <h2 class="section-title-lg reveal">What Our Clients Say</h2>
      <p class="section-sub reveal" style="margin:0 auto">Real feedback from real clients — we let our work and relationships speak for themselves.</p>
    </div>
    <div class="testi-grid">
      <div class="testi-card reveal"><div class="testi-stars">★★★★★</div><div class="testi-text">Baseline IT delivered exactly what we envisioned. The brand identity exceeded expectations — clean, modern, and truly represents who we are as a company.</div><div class="testi-author"><div class="testi-avatar tav-green">S</div><div><div class="testi-name">Sara</div><div class="testi-company">CEO, Nexus Corp</div></div></div></div>
      <div class="testi-card reveal reveal-delay-1"><div class="testi-stars">★★★★★</div><div class="testi-text">Exceptional UI/UX work. Our app conversion rate improved by 40% after the redesign. The team truly understands both aesthetics and user psychology.</div><div class="testi-author"><div class="testi-avatar tav-blue">R</div><div><div class="testi-name">Rahul Mehta</div><div class="testi-company">Product Manager, TechFlow</div></div></div></div>
      <div class="testi-card reveal reveal-delay-2"><div class="testi-stars">★★★★★</div><div class="testi-text">Our packaging now stands out on shelves. The creativity and attention to detail is impressive. Turnaround was fast and the files were pristine.</div><div class="testi-author"><div class="testi-avatar tav-orange">M</div><div><div class="testi-name">Maria Lopez</div><div class="testi-company">Founder, Bloom Organics</div></div></div></div>
      <div class="testi-card reveal"><div class="testi-stars">★★★★★</div><div class="testi-text">Social media engagement tripled after deploying the new creative kit. Stunning visuals, professional team, and they delivered 3 days ahead of schedule.</div><div class="testi-author"><div class="testi-avatar tav-purple">K</div><div><div class="testi-name">Hem Mishra</div><div class="testi-company">Marketing Dir, Spark Agency</div></div></div></div>
      <div class="testi-card reveal reveal-delay-1"><div class="testi-stars">★★★★★</div><div class="testi-text">Best logo designer I've worked with. They asked all the right questions, understood our vision immediately, and delivered a logo that perfectly represents us.</div><div class="testi-author"><div class="testi-avatar tav-teal">A</div><div><div class="testi-name">Rohit</div><div class="testi-company">Founder, PureEdge Inc</div></div></div></div>
      <div class="testi-card reveal reveal-delay-2"><div class="testi-stars">★★★★☆</div><div class="testi-text">Working with Baseline IT was an absolute pleasure. They're responsive, talented, and genuinely care about your project. Will absolutely hire again.</div><div class="testi-author"><div class="testi-avatar tav-red">N</div><div><div class="testi-name">Nadia Sheikh</div><div class="testi-company">Director, Bloom Brand Co</div></div></div></div>
    </div>
    <div class="testi-nav"><div class="testi-dot active"></div><div class="testi-dot"></div><div class="testi-dot"></div></div>
  </div>
</section>
 
<!-- CTA BANNER -->
<section class="cta-section">
  <div class="container">
    <div class="cta-inner reveal">
      <div class="cta-grid-pattern"></div>
      <div class="section-eyebrow" style="margin:0 auto 20px">Ready to Start?</div>
      <h2 class="cta-title">Let's Build Something<br><span class="text-accent" style="font-style:italic">Extraordinary Together</span></h2>
      <p class="cta-sub">Get a free consultation and quote for your next project. We respond within 2 hours.</p>
      <div class="cta-btns">
        <button class="btn btn-primary btn-lg" onclick="scrollToSection('contact')">
          <svg class="btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
          Start a Project
        </button>
        <a class="cta-wa-btn" href="" target="_blank" rel="noopener">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
          Chat on WhatsApp
        </a>
      </div>
    </div>
  </div>
</section>
 
<!-- CONTACT -->
<section id="contact" class="contact-section">
  <div class="container">
    <div class="contact-inner">
      <div>
        <div class="section-eyebrow reveal">Geeet in Touch</div>
        <h2 class="section-title-lg reveal">Let's Discuss Your<br>Next Project</h2>
        <p class="section-sub reveal">Ready to take your brand to the next level? Tell us about your project and we'll get back to you with a detailed proposal.</p>
        <div class="contact-info-list">
          <div class="contact-info-item reveal"><div class="contact-info-icon">📧</div><div><div class="contact-info-label">Email Us</div><div class="contact-info-val">info@baselineit.dev</div></div></div>
          <div class="contact-info-item reveal reveal-delay-1"><div class="contact-info-icon">📱</div><div><div class="contact-info-label">WhatsApp</div><div class="contact-info-val">+91 98765 43210</div></div></div>
          <div class="contact-info-item reveal reveal-delay-2"><div class="contact-info-icon">📍</div><div><div class="contact-info-label">Location</div><div class="contact-info-val">Mohali, Punjab</div></div></div>
          <div class="contact-info-item reveal reveal-delay-3"><div class="contact-info-icon">⏰</div><div><div class="contact-info-label">Response Time</div><div class="contact-info-val">Within 2 hours</div></div></div>
        </div>
        <div class="contact-social reveal">
          <a class="social-btn" title="LinkedIn" href="#">💼</a>
          <a class="social-btn" title="Instagram" href="#">📸</a>
          <a class="social-btn" title="Behance" href="#">🎨</a>
          <a class="social-btn" title="GitHub" href="#">💻</a>
        </div>
      </div>
      <div class="reveal">
        <div class="contact-form-card">
          <div style="margin-bottom:28px">
            <div style="font-family:var(--font-display);font-size:22px;font-weight:600;letter-spacing:-0.02em;margin-bottom:6px">Send us a Message</div>
            <div style="font-family:var(--font-body);font-size:13px;color:var(--text-2)">Fill out the form and we'll get back to you within 2 hours.</div>
          </div>
          <div class="form-row">
            <div class="form-group" style="margin-bottom:0"><label class="form-label">Full Name <span style="color:#FF4757">*</span></label><input type="text" class="form-input" placeholder="Hem Mishra"></div>
            <div class="form-group" style="margin-bottom:0"><label class="form-label">Email Address <span style="color:#FF4757">*</span></label><input type="email" class="form-input" placeholder="Hem@email.com"></div>
          </div>
          <div class="form-row" style="margin-top:16px">
            <div class="form-group" style="margin-bottom:0"><label class="form-label">Phone / WhatsApp</label><input type="text" class="form-input" placeholder="+91 ..."></div>
            <div class="form-group" style="margin-bottom:0"><label class="form-label">Service Needed</label>
              <select class="form-input form-select-field"><option value="">Select a service...</option><option>Logo Design</option><option>Brand Identity</option><option>UI/UX Design</option><option>Social Media Design</option><option>Website Design</option><option>Web Development</option><option>Packaging Design</option><option>Other</option></select>
            </div>
          </div>
          <div class="form-group" style="margin-top:16px"><label class="form-label">Project Budget</label>
            <select class="form-input form-select-field"><option value="">Select budget range...</option><option>Under $200</option><option>$200 – $500</option><option>$500 – $1,000</option><option>$1,000 – $5,000</option><option>$5,000+</option></select>
          </div>
          <div class="form-group"><label class="form-label">Project Details <span style="color:#FF4757">*</span></label><textarea class="form-textarea" placeholder="Tell us about your project, goals, timeline, and any references you have in mind..."></textarea></div>
          <button class="form-submit" onclick="submitForm()">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
            Send Message
          </button>
          <div style="margin-top:16px;text-align:center;font-family:var(--font-ui);font-size:11px;color:var(--text-3);letter-spacing:0.02em">
            Or reach us on <a href="https://wa.me/919876543210" target="_blank" style="color:#25D366;font-weight:600;">WhatsApp</a> · We reply within 2 hours
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
 
<!-- FOOTER -->
<footer class="footer">
  <div class="container">
    <div class="footer-main">
      <div>
        <div class="footer-brand-logo">
          <div class="footer-logo-mark">B</div>
          <div class="footer-brand-name">Baseline IT<span>Development Studio</span></div>
        </div>
        <p class="footer-brand-desc">Professional graphic design and web development agency crafting premium digital identities since 2021.</p>
        <div class="contact-social" style="margin-bottom:0">
          <a class="social-btn" href="#" style="width:36px;height:36px;font-size:15px">💼</a>
          <a class="social-btn" href="#" style="width:36px;height:36px;font-size:15px">📸</a>
          <a class="social-btn" href="#" style="width:36px;height:36px;font-size:15px">🎨</a>
          <a class="social-btn" href="#" style="width:36px;height:36px;font-size:15px">💻</a>
        </div>
      </div>
      <div>
        <div class="footer-col-title">Services</div>
        <ul class="footer-links">
          <li><a class="footer-link">Logo Design</a></li><li><a class="footer-link">Brand Identity</a></li>
          <li><a class="footer-link">UI/UX Design</a></li><li><a class="footer-link">Social Media Design</a></li>
          <li><a class="footer-link">Web Development</a></li><li><a class="footer-link">Packaging Design</a></li>
          <li><a class="footer-link">Print & Ad Design</a></li>
        </ul>
      </div>
      <div>
        <div class="footer-col-title">Company</div>
        <ul class="footer-links">
          <li><a class="footer-link" onclick="scrollToSection('home')">Home</a></li>
          <li><a class="footer-link" onclick="scrollToSection('about')">About Us</a></li>
          <li><a class="footer-link" onclick="scrollToSection('portfolio')">Portfolio</a></li>
          <li><a class="footer-link" onclick="scrollToSection('testimonials')">Testimonials</a></li>
          <li><a class="footer-link" onclick="scrollToSection('contact')">Contact</a></li>
          <li><a class="footer-link" href="/admin">Admin Panel</a></li>
        </ul>
      </div>
      <div>
        <div class="footer-col-title">Get in Touch</div>
        <div class="footer-contact-item"><div class="footer-contact-icon">📧</div><div class="footer-contact-text">info@baselineit.dev</div></div>
        <div class="footer-contact-item"><div class="footer-contact-icon">📱</div><div class="footer-contact-text">+91 98765 43210</div></div>
        <div class="footer-contact-item"><div class="footer-contact-icon">📍</div><div class="footer-contact-text">Mohali, Punjab<br>India</div></div>
        <div style="margin-top:18px">
          <a class="cta-wa-btn" href="https://wa.me/919876543210" target="_blank" style="padding:10px 18px;font-size:12px;border-radius:8px">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
            Chat Now
          </a>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="footer-copyright">© 2025 <a href="#">Baseline IT Development</a>. All rights reserved. Crafted with ❤️ in Punjab, India.</div>
      <div class="footer-bottom-links">
        <a class="footer-bottom-link">Privacy Policy</a>
        <a class="footer-bottom-link">Terms of Service</a>
        <a class="footer-bottom-link">Sitemap</a>
      </div>
    </div>
  </div>
</footer>
 
<button class="scroll-top" id="scrollTopBtn" onclick="window.scrollTo({top:0,behavior:'smooth'})">↑</button>
<div class="toast-wrap" id="toastWrap"></div>
 
<!-- MODAL -->
<div class="modal-overlay" id="projectModal">
  <div class="modal">
    <div class="modal-header">
      <div class="modal-title" id="modalTitle">Project Name</div>
      <button class="modal-close" onclick="closeModal()">×</button>
    </div>
    <div class="modal-body">
      <div class="modal-thumb" id="modalThumb">🎨</div>
      <div class="modal-meta" id="modalMeta"></div>
      <div class="modal-desc" id="modalDesc"></div>
    </div>
    <div class="modal-footer">
      <button class="btn btn-outline" onclick="closeModal()">Close</button>
      <button class="btn btn-primary" onclick="scrollToSection('contact');closeModal()">Get Similar Project</button>
    </div>
  </div>
</div>
 
<script>
const themeBtn = document.getElementById('themeBtn');
function toggleTheme() {
  const html = document.documentElement;
  if (html.dataset.theme === 'dark') { html.dataset.theme = 'light'; themeBtn.textContent = '🌙'; }
  else { html.dataset.theme = 'dark'; themeBtn.textContent = '☀️'; }
}
 
const navbar = document.getElementById('navbar');
window.addEventListener('scroll', () => {
  navbar.classList.toggle('scrolled', window.scrollY > 20);
  document.getElementById('scrollTopBtn').classList.toggle('visible', window.scrollY > 400);
  updateActiveNavLink();
});
 
const sections = ['home','services','portfolio','about','testimonials','contact'];
function updateActiveNavLink() {
  const scrollY = window.scrollY + 120;
  sections.forEach(id => {
    const el = document.getElementById(id);
    if (!el) return;
    if (el.offsetTop <= scrollY && el.offsetTop + el.offsetHeight > scrollY) {
      document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active'));
      document.querySelectorAll('.nav-link').forEach(l => {
        if (l.getAttribute('onclick') && l.getAttribute('onclick').includes(id)) l.classList.add('active');
      });
    }
  });
}
 
function scrollToSection(id) {
  const el = document.getElementById(id);
  if (el) el.scrollIntoView({ behavior: 'smooth', block: 'start' });
}
 
function toggleMobileMenu() { document.getElementById('mobileMenu').classList.toggle('open'); }
document.addEventListener('click', function(e) {
  if (!e.target.closest('.navbar') && !e.target.closest('.mobile-menu'))
    document.getElementById('mobileMenu').classList.remove('open');
});
 
function filterPortfolio(btn, cat) {
  document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
  btn.classList.add('active');
  document.querySelectorAll('.portfolio-item').forEach(item => {
    item.style.transition = 'all 0.3s ease';
    if (cat === 'all' || item.dataset.cat === cat) { item.style.opacity = '1'; item.style.transform = ''; }
    else { item.style.opacity = '0.2'; item.style.transform = 'scale(0.97)'; }
  });
}
 
const projects = {
  nexus:    { title:'Nexus Brand Identity System', thumb:'🎨', thumbClass:'thumb-brand',  tags:['Branding','Identity','Figma','Illustrator','Featured'],  desc:'A comprehensive brand identity system for Nexus Corp — a leading technology consultancy. Delivered full logo suite, color system, typography, brand guidelines (50+ pages), stationery, and digital templates. The project took 3 weeks and included unlimited revisions.' },
  techflow: { title:'TechFlow Dashboard UI',       thumb:'💻', thumbClass:'thumb-ui',     tags:['UI/UX','Figma','Adobe XD','Dashboard'],                  desc:'A full SaaS dashboard redesign for TechFlow Ltd. Included user research, wireframing, high-fidelity prototyping, and design system creation. The redesign led to a 40% improvement in user conversion.' },
  pureedge: { title:'PureEdge Logo Suite',          thumb:'🔵', thumbClass:'thumb-logo',   tags:['Logo Design','Illustrator','Vector'],                    desc:'A minimal, geometric logo suite for PureEdge Inc — delivered in 15+ file formats. The wordmark, icon, and lockup variants were crafted to work at any size from favicon to billboard.' },
  spark:    { title:'Spark Campaign Kit',           thumb:'📱', thumbClass:'thumb-social', tags:['Social Media','Photoshop','Canva Pro','Campaign'],        desc:"A complete social media campaign kit for Spark Agency's Q1 2025 product launch. Included 40+ templates across Instagram, Facebook, LinkedIn, and TikTok formats." },
  bloom:    { title:'Organic Bloom Box Packaging',  thumb:'📦', thumbClass:'thumb-pack',   tags:['Packaging','Photoshop','Illustrator','Print-ready'],      desc:"Sustainable packaging design for Bloom Organics' premium skincare line. Included dieline creation, print-ready artwork, and mockup renders." }
};
 
function openProjectModal(id) {
  const p = projects[id]; if (!p) return;
  document.getElementById('modalTitle').textContent = p.title;
  const thumb = document.getElementById('modalThumb');
  thumb.textContent = p.thumb; thumb.className = 'modal-thumb ' + p.thumbClass;
  document.getElementById('modalMeta').innerHTML = p.tags.map((t,i) => `<span class="meta-pill ${i===0?'meta-pill-teal':'meta-pill-blue'}">${t}</span>`).join('');
  document.getElementById('modalDesc').textContent = p.desc;
  document.getElementById('projectModal').classList.add('open');
  document.body.style.overflow = 'hidden';
}
function closeModal() { document.getElementById('projectModal').classList.remove('open'); document.body.style.overflow = ''; }
document.getElementById('projectModal').addEventListener('click', function(e) { if (e.target === this) closeModal(); });
document.addEventListener('keydown', e => { if (e.key === 'Escape') closeModal(); });
 
function submitForm() { showToast("✅ Message sent! We'll reply within 2 hours."); }
 
function showToast(msg) {
  const wrap = document.getElementById('toastWrap');
  const toast = document.createElement('div');
  toast.className = 'toast success';
  toast.innerHTML = `<span class="toast-icon">✅</span> ${msg}`;
  wrap.appendChild(toast);
  setTimeout(() => { toast.style.opacity='0'; toast.style.transform='translateY(20px)'; toast.style.transition='all 0.3s ease'; setTimeout(() => toast.remove(), 300); }, 3500);
}
 
const revealObserver = new IntersectionObserver((entries) => {
  entries.forEach(entry => { if (entry.isIntersecting) { entry.target.classList.add('visible'); revealObserver.unobserve(entry.target); } });
}, { threshold: 0.1 });
document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));
 
document.querySelectorAll('.testi-dot').forEach((dot) => {
  dot.addEventListener('click', () => { document.querySelectorAll('.testi-dot').forEach(d => d.classList.remove('active')); dot.classList.add('active'); });
});
</script>
 
</body>
</html>
 



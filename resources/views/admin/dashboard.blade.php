<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Baseline IT — Admin Panel</title>
<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
<style>
/* ============================================================
   CSS CUSTOM PROPERTIES — THEME SYSTEM
   ============================================================ */
:root {
  --accent: #00E5BE;
  --accent-dim: rgba(0,229,190,0.12);
  --accent-glow: rgba(0,229,190,0.3);
  --danger: #FF4757;
  --warning: #FFB830;
  --info: #4A90D9;
  --success: #2ED573;
  --font-head: 'Syne', sans-serif;
  --font-body: 'DM Sans', sans-serif;
  --radius: 14px;
  --radius-sm: 8px;
  --radius-lg: 20px;
  --sidebar-w: 260px;
  --transition: 0.22s cubic-bezier(.4,0,.2,1);
}

[data-theme="dark"] {
  --bg: #0C0D10;
  --bg2: #131418;
  --bg3: #1A1B21;
  --bg4: #22232C;
  --border: rgba(255,255,255,0.07);
  --border-hover: rgba(0,229,190,0.3);
  --text: #F0F1F5;
  --text-2: #9A9BAA;
  --text-3: #5C5D6E;
  --card-shadow: 0 4px 30px rgba(0,0,0,0.4);
  --sidebar-bg: #0E0F13;
}

[data-theme="light"] {
  --bg: #F2F4F8;
  --bg2: #FFFFFF;
  --bg3: #EAEDF2;
  --bg4: #DDE1EA;
  --border: rgba(0,0,0,0.08);
  --border-hover: rgba(0,229,190,0.5);
  --text: #111216;
  --text-2: #5A5C6E;
  --text-3: #9A9BAA;
  --card-shadow: 0 4px 24px rgba(0,0,0,0.08);
  --sidebar-bg: #FFFFFF;
}

/* ============================================================
   RESET & BASE
   ============================================================ */
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
html { font-size: 15px; scroll-behavior: smooth; }
body {
  font-family: var(--font-body);
  background: var(--bg);
  color: var(--text);
  min-height: 100vh;
  overflow-x: hidden;
  transition: background var(--transition), color var(--transition);
}
a { text-decoration: none; color: inherit; }
button { cursor: pointer; font-family: var(--font-body); }
input, textarea, select { font-family: var(--font-body); }
ul { list-style: none; }
img { max-width: 100%; display: block; }

/* ============================================================
   SCROLLBAR
   ============================================================ */
::-webkit-scrollbar { width: 5px; height: 5px; }
::-webkit-scrollbar-track { background: var(--bg); }
::-webkit-scrollbar-thumb { background: var(--bg4); border-radius: 10px; }
::-webkit-scrollbar-thumb:hover { background: var(--accent); }

/* ============================================================
   LAYOUT SHELL
   ============================================================ */
.app-shell {
  display: flex;
  min-height: 100vh;
}

/* ============================================================
   SIDEBAR
   ============================================================ */
.sidebar {
  width: var(--sidebar-w);
  background: var(--sidebar-bg);
  border-right: 1px solid var(--border);
  display: flex;
  flex-direction: column;
  position: fixed;
  top: 0; left: 0;
  height: 100vh;
  z-index: 100;
  transition: transform var(--transition), background var(--transition);
  overflow-y: auto;
  overflow-x: hidden;
}

.sidebar-logo {
  padding: 28px 24px 24px;
  border-bottom: 1px solid var(--border);
  display: flex;
  align-items: center;
  gap: 12px;
}

.logo-mark {
  width: 38px; height: 38px;
  background: var(--accent);
  border-radius: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: var(--font-head);
  font-weight: 800;
  font-size: 16px;
  color: #000;
  flex-shrink: 0;
  box-shadow: 0 0 20px var(--accent-glow);
}

.logo-text {
  font-family: var(--font-head);
  font-weight: 700;
  font-size: 15px;
  line-height: 1.2;
  color: var(--text);
}
.logo-text span {
  display: block;
  font-size: 10px;
  font-weight: 400;
  color: var(--text-2);
  letter-spacing: 0.08em;
  text-transform: uppercase;
}

.sidebar-nav {
  padding: 16px 12px;
  flex: 1;
}

.nav-section-label {
  font-size: 10px;
  font-weight: 600;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--text-3);
  padding: 12px 12px 6px;
  margin-top: 8px;
}

.nav-item {
  display: flex;
  align-items: center;
  gap: 11px;
  padding: 11px 14px;
  border-radius: var(--radius-sm);
  color: var(--text-2);
  font-size: 14px;
  font-weight: 500;
  cursor: pointer;
  transition: all var(--transition);
  position: relative;
  margin-bottom: 2px;
  border: 1px solid transparent;
}

.nav-item:hover {
  background: var(--bg3);
  color: var(--text);
  border-color: var(--border);
}

.nav-item.active {
  background: var(--accent-dim);
  color: var(--accent);
  border-color: rgba(0,229,190,0.15);
}

.nav-item.active .nav-icon {
  color: var(--accent);
}

.nav-item .nav-badge {
  margin-left: auto;
  background: var(--danger);
  color: #fff;
  font-size: 10px;
  font-weight: 700;
  padding: 2px 7px;
  border-radius: 20px;
  min-width: 20px;
  text-align: center;
}

.nav-item .nav-badge.accent {
  background: var(--accent);
  color: #000;
}

.nav-icon {
  width: 18px;
  height: 18px;
  flex-shrink: 0;
  opacity: 0.85;
}

.sidebar-footer {
  padding: 16px 12px;
  border-top: 1px solid var(--border);
}

.user-card {
  display: flex;
  align-items: center;
  gap: 10px;
  padding: 10px 12px;
  border-radius: var(--radius-sm);
  cursor: pointer;
  transition: background var(--transition);
}
.user-card:hover { background: var(--bg3); }

.user-avatar {
  width: 36px; height: 36px;
  border-radius: 50%;
  background: linear-gradient(135deg, var(--accent), #0099FF);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 13px;
  font-weight: 700;
  color: #000;
  flex-shrink: 0;
}

.user-info { flex: 1; overflow: hidden; }
.user-name { font-size: 13px; font-weight: 600; color: var(--text); white-space: nowrap; overflow: hidden; text-overflow: ellipsis; }
.user-role { font-size: 11px; color: var(--text-3); }

/* ============================================================
   MAIN CONTENT AREA
   ============================================================ */
.main-area {
  margin-left: var(--sidebar-w);
  flex: 1;
  display: flex;
  flex-direction: column;
  min-height: 100vh;
  transition: margin var(--transition);
}

/* ============================================================
   TOPBAR
   ============================================================ */
.topbar {
  height: 66px;
  background: var(--bg2);
  border-bottom: 1px solid var(--border);
  display: flex;
  align-items: center;
  padding: 0 28px;
  gap: 16px;
  position: sticky;
  top: 0;
  z-index: 50;
  transition: background var(--transition);
}

.topbar-title {
  font-family: var(--font-head);
  font-size: 18px;
  font-weight: 700;
  flex: 1;
  display: flex;
  align-items: center;
  gap: 8px;
}

.breadcrumb {
  font-size: 12px;
  color: var(--text-3);
  font-weight: 400;
  font-family: var(--font-body);
}
.breadcrumb span { color: var(--accent); }

.topbar-actions {
  display: flex;
  align-items: center;
  gap: 10px;
}

.icon-btn {
  width: 38px; height: 38px;
  border-radius: var(--radius-sm);
  border: 1px solid var(--border);
  background: var(--bg3);
  color: var(--text-2);
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: all var(--transition);
  position: relative;
}
.icon-btn:hover { border-color: var(--border-hover); color: var(--accent); background: var(--accent-dim); }

.notif-dot {
  position: absolute;
  top: 7px; right: 7px;
  width: 7px; height: 7px;
  background: var(--danger);
  border-radius: 50%;
  border: 2px solid var(--bg2);
}

.theme-toggle {
  width: 38px; height: 38px;
  border-radius: var(--radius-sm);
  border: 1px solid var(--border);
  background: var(--bg3);
  color: var(--text-2);
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: all var(--transition);
  font-size: 17px;
}
.theme-toggle:hover { border-color: var(--border-hover); background: var(--accent-dim); }

.hamburger {
  display: none;
  width: 38px; height: 38px;
  border-radius: var(--radius-sm);
  border: 1px solid var(--border);
  background: var(--bg3);
  color: var(--text-2);
  align-items: center;
  justify-content: center;
  cursor: pointer;
  flex-direction: column;
  gap: 5px;
  padding: 10px;
}
.hamburger span {
  display: block;
  height: 2px;
  background: var(--text-2);
  border-radius: 2px;
  transition: all var(--transition);
}

/* ============================================================
   PAGE CONTENT
   ============================================================ */
.page-content {
  padding: 28px;
  flex: 1;
}

.page { display: none; }
.page.active { display: block; animation: fadeIn 0.28s ease; }

@keyframes fadeIn {
  from { opacity: 0; transform: translateY(10px); }
  to { opacity: 1; transform: translateY(0); }
}

/* ============================================================
   STAT CARDS
   ============================================================ */
.stats-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 18px;
  margin-bottom: 28px;
}

.stat-card {
  background: var(--bg2);
  border: 1px solid var(--border);
  border-radius: var(--radius);
  padding: 22px 22px;
  position: relative;
  overflow: hidden;
  transition: all var(--transition);
  cursor: default;
}

.stat-card::before {
  content: '';
  position: absolute;
  top: 0; left: 0; right: 0;
  height: 3px;
  border-radius: var(--radius) var(--radius) 0 0;
}

.stat-card.teal::before { background: var(--accent); }
.stat-card.blue::before { background: var(--info); }
.stat-card.orange::before { background: var(--warning); }
.stat-card.red::before { background: var(--danger); }

.stat-card:hover {
  border-color: var(--border-hover);
  transform: translateY(-2px);
  box-shadow: var(--card-shadow);
}

.stat-card-top {
  display: flex;
  align-items: flex-start;
  justify-content: space-between;
  margin-bottom: 16px;
}

.stat-icon {
  width: 42px; height: 42px;
  border-radius: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 20px;
}

.stat-icon.teal { background: var(--accent-dim); color: var(--accent); }
.stat-icon.blue { background: rgba(74,144,217,0.12); color: var(--info); }
.stat-icon.orange { background: rgba(255,184,48,0.12); color: var(--warning); }
.stat-icon.red { background: rgba(255,71,87,0.12); color: var(--danger); }

.stat-change {
  font-size: 11px;
  font-weight: 600;
  padding: 3px 8px;
  border-radius: 20px;
  display: flex;
  align-items: center;
  gap: 3px;
}
.stat-change.up { background: rgba(46,213,115,0.12); color: var(--success); }
.stat-change.down { background: rgba(255,71,87,0.12); color: var(--danger); }

.stat-value {
  font-family: var(--font-head);
  font-size: 30px;
  font-weight: 800;
  line-height: 1;
  margin-bottom: 4px;
}

.stat-label {
  font-size: 12px;
  color: var(--text-2);
  font-weight: 500;
}

/* ============================================================
   SECTION HEADER
   ============================================================ */
.section-header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 18px;
}

.section-title {
  font-family: var(--font-head);
  font-size: 16px;
  font-weight: 700;
  display: flex;
  align-items: center;
  gap: 8px;
}

.section-title::before {
  content: '';
  display: block;
  width: 3px;
  height: 16px;
  background: var(--accent);
  border-radius: 2px;
}

/* ============================================================
   BUTTONS
   ============================================================ */
.btn {
  display: inline-flex;
  align-items: center;
  gap: 7px;
  padding: 9px 18px;
  border-radius: var(--radius-sm);
  font-size: 13px;
  font-weight: 600;
  border: 1px solid transparent;
  cursor: pointer;
  transition: all var(--transition);
  white-space: nowrap;
  font-family: var(--font-body);
}

.btn-primary {
  background: var(--accent);
  color: #000;
  border-color: var(--accent);
}
.btn-primary:hover { background: #00cca9; box-shadow: 0 4px 20px var(--accent-glow); transform: translateY(-1px); }

.btn-secondary {
  background: var(--bg3);
  color: var(--text);
  border-color: var(--border);
}
.btn-secondary:hover { border-color: var(--border-hover); background: var(--bg4); }

.btn-danger {
  background: rgba(255,71,87,0.1);
  color: var(--danger);
  border-color: rgba(255,71,87,0.2);
}
.btn-danger:hover { background: var(--danger); color: #fff; }

.btn-ghost {
  background: transparent;
  color: var(--text-2);
  border-color: transparent;
}
.btn-ghost:hover { background: var(--bg3); color: var(--text); }

.btn-sm {
  padding: 6px 12px;
  font-size: 12px;
}

.btn-lg {
  padding: 13px 28px;
  font-size: 15px;
}

/* ============================================================
   CARDS
   ============================================================ */
.card {
  background: var(--bg2);
  border: 1px solid var(--border);
  border-radius: var(--radius);
  transition: background var(--transition), border-color var(--transition);
}

.card-header {
  padding: 20px 22px;
  border-bottom: 1px solid var(--border);
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.card-body { padding: 22px; }

/* ============================================================
   DASHBOARD GRID
   ============================================================ */
.dash-grid {
  display: grid;
  grid-template-columns: 1fr 340px;
  gap: 20px;
  margin-bottom: 24px;
}

/* ============================================================
   CHART PLACEHOLDER
   ============================================================ */
.chart-area {
  background: var(--bg2);
  border: 1px solid var(--border);
  border-radius: var(--radius);
  padding: 22px;
}

.chart-bars {
  display: flex;
  align-items: flex-end;
  gap: 10px;
  height: 160px;
  margin-top: 20px;
  padding-bottom: 10px;
  border-bottom: 1px solid var(--border);
}

.chart-bar-group {
  flex: 1;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 4px;
  height: 100%;
  justify-content: flex-end;
}

.chart-bar {
  width: 100%;
  border-radius: 6px 6px 0 0;
  transition: height 0.6s cubic-bezier(.4,0,.2,1);
  position: relative;
  cursor: pointer;
}
.chart-bar:hover { opacity: 0.85; }
.chart-bar.primary { background: linear-gradient(to top, #00E5BE55, var(--accent)); }
.chart-bar.secondary { background: linear-gradient(to top, #4A90D922, var(--info)); }

.chart-label { font-size: 10px; color: var(--text-3); margin-top: 6px; }

.chart-legend {
  display: flex;
  gap: 16px;
  margin-top: 14px;
}

.legend-item {
  display: flex;
  align-items: center;
  gap: 6px;
  font-size: 12px;
  color: var(--text-2);
}

.legend-dot {
  width: 8px; height: 8px;
  border-radius: 50%;
}

/* ============================================================
   ACTIVITY FEED
   ============================================================ */
.activity-feed {
  background: var(--bg2);
  border: 1px solid var(--border);
  border-radius: var(--radius);
  overflow: hidden;
}

.activity-item {
  display: flex;
  align-items: flex-start;
  gap: 12px;
  padding: 14px 18px;
  border-bottom: 1px solid var(--border);
  transition: background var(--transition);
}
.activity-item:last-child { border-bottom: none; }
.activity-item:hover { background: var(--bg3); }

.activity-icon {
  width: 32px; height: 32px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 14px;
  flex-shrink: 0;
}

.activity-content { flex: 1; }
.activity-text { font-size: 13px; color: var(--text); line-height: 1.4; }
.activity-text strong { color: var(--accent); }
.activity-time { font-size: 11px; color: var(--text-3); margin-top: 2px; }

/* ============================================================
   QUICK PROJECTS (Dashboard)
   ============================================================ */
.projects-mini {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 14px;
}

.project-mini-card {
  background: var(--bg2);
  border: 1px solid var(--border);
  border-radius: var(--radius);
  overflow: hidden;
  cursor: pointer;
  transition: all var(--transition);
}
.project-mini-card:hover { border-color: var(--border-hover); transform: translateY(-2px); box-shadow: var(--card-shadow); }

.project-mini-thumb {
  height: 110px;
  background: var(--bg3);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 36px;
  position: relative;
  overflow: hidden;
}

.project-mini-thumb::after {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(to bottom, transparent 40%, rgba(0,0,0,0.5));
}

.project-mini-info { padding: 12px; }
.project-mini-cat {
  font-size: 10px;
  font-weight: 600;
  color: var(--accent);
  text-transform: uppercase;
  letter-spacing: 0.08em;
  margin-bottom: 4px;
}
.project-mini-title { font-size: 13px; font-weight: 600; }
.project-mini-date { font-size: 11px; color: var(--text-3); margin-top: 4px; }

/* ============================================================
   TABLE
   ============================================================ */
.table-wrapper {
  background: var(--bg2);
  border: 1px solid var(--border);
  border-radius: var(--radius);
  overflow: hidden;
}

.table-controls {
  padding: 16px 20px;
  display: flex;
  align-items: center;
  gap: 12px;
  border-bottom: 1px solid var(--border);
  flex-wrap: wrap;
}

.search-input-wrap {
  position: relative;
  flex: 1;
  min-width: 200px;
}
.search-input-wrap svg {
  position: absolute;
  left: 11px; top: 50%;
  transform: translateY(-50%);
  color: var(--text-3);
  width: 15px; height: 15px;
  pointer-events: none;
}
.search-input {
  width: 100%;
  background: var(--bg3);
  border: 1px solid var(--border);
  border-radius: var(--radius-sm);
  padding: 9px 12px 9px 34px;
  color: var(--text);
  font-size: 13px;
  outline: none;
  transition: border-color var(--transition);
}
.search-input::placeholder { color: var(--text-3); }
.search-input:focus { border-color: var(--accent); }

.filter-select {
  background: var(--bg3);
  border: 1px solid var(--border);
  border-radius: var(--radius-sm);
  padding: 9px 12px;
  color: var(--text);
  font-size: 13px;
  outline: none;
  cursor: pointer;
  transition: border-color var(--transition);
}
.filter-select:focus { border-color: var(--accent); }

table {
  width: 100%;
  border-collapse: collapse;
}

thead th {
  padding: 12px 16px;
  text-align: left;
  font-size: 11px;
  font-weight: 600;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  color: var(--text-3);
  background: var(--bg3);
  border-bottom: 1px solid var(--border);
  white-space: nowrap;
}

tbody tr {
  border-bottom: 1px solid var(--border);
  transition: background var(--transition);
}
tbody tr:last-child { border-bottom: none; }
tbody tr:hover { background: var(--bg3); }

tbody td {
  padding: 13px 16px;
  font-size: 13px;
  color: var(--text);
  vertical-align: middle;
}

.table-thumb {
  width: 44px; height: 36px;
  border-radius: 6px;
  background: var(--bg4);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 18px;
  flex-shrink: 0;
}

.table-project-info { display: flex; align-items: center; gap: 10px; }

.project-name-cell { font-weight: 600; font-size: 13px; }
.project-cat-cell { font-size: 11px; color: var(--text-3); margin-top: 2px; }

/* ============================================================
   BADGES / STATUS PILLS
   ============================================================ */
.badge {
  display: inline-flex;
  align-items: center;
  gap: 4px;
  padding: 3px 10px;
  border-radius: 20px;
  font-size: 11px;
  font-weight: 600;
  white-space: nowrap;
}

.badge-published { background: rgba(46,213,115,0.12); color: var(--success); }
.badge-draft { background: rgba(255,184,48,0.12); color: var(--warning); }
.badge-featured { background: var(--accent-dim); color: var(--accent); }
.badge-logo { background: rgba(74,144,217,0.12); color: var(--info); }
.badge-brand { background: rgba(255,184,48,0.12); color: var(--warning); }
.badge-web { background: rgba(46,213,115,0.12); color: var(--success); }
.badge-ui { background: rgba(200,100,255,0.12); color: #C864FF; }
.badge-social { background: rgba(255,71,87,0.12); color: var(--danger); }
.badge-print { background: rgba(74,144,217,0.12); color: var(--info); }

.dot {
  width: 6px; height: 6px;
  border-radius: 50%;
}
.dot-green { background: var(--success); }
.dot-orange { background: var(--warning); }

/* ============================================================
   TABLE ACTIONS
   ============================================================ */
.table-actions {
  display: flex;
  align-items: center;
  gap: 6px;
}

.tbl-btn {
  width: 30px; height: 30px;
  border-radius: 6px;
  border: 1px solid var(--border);
  background: var(--bg3);
  color: var(--text-2);
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: all var(--transition);
  font-size: 13px;
}
.tbl-btn:hover { border-color: var(--accent); color: var(--accent); background: var(--accent-dim); }
.tbl-btn.danger:hover { border-color: var(--danger); color: var(--danger); background: rgba(255,71,87,0.1); }

/* ============================================================
   PAGINATION
   ============================================================ */
.pagination {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 14px 20px;
  border-top: 1px solid var(--border);
  flex-wrap: wrap;
  gap: 10px;
}

.page-info { font-size: 12px; color: var(--text-3); }

.page-buttons {
  display: flex;
  gap: 4px;
}

.page-btn {
  width: 32px; height: 32px;
  border-radius: 6px;
  border: 1px solid var(--border);
  background: var(--bg3);
  color: var(--text-2);
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  font-size: 12px;
  font-weight: 600;
  transition: all var(--transition);
}
.page-btn:hover, .page-btn.active { background: var(--accent); color: #000; border-color: var(--accent); }

/* ============================================================
   FORMS
   ============================================================ */
.form-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 18px;
}

.form-group {
  display: flex;
  flex-direction: column;
  gap: 7px;
}

.form-group.full { grid-column: 1 / -1; }

.form-label {
  font-size: 12px;
  font-weight: 600;
  color: var(--text-2);
  letter-spacing: 0.04em;
}

.form-label .required { color: var(--danger); margin-left: 3px; }

.form-input,
.form-textarea,
.form-select {
  background: var(--bg3);
  border: 1px solid var(--border);
  border-radius: var(--radius-sm);
  padding: 11px 14px;
  color: var(--text);
  font-size: 14px;
  outline: none;
  transition: all var(--transition);
  width: 100%;
}
.form-input::placeholder,
.form-textarea::placeholder { color: var(--text-3); }

.form-input:focus,
.form-textarea:focus,
.form-select:focus {
  border-color: var(--accent);
  background: var(--bg2);
  box-shadow: 0 0 0 3px var(--accent-dim);
}

.form-textarea {
  min-height: 120px;
  resize: vertical;
}

.form-hint { font-size: 11px; color: var(--text-3); margin-top: 2px; }

/* ============================================================
   FILE UPLOAD
   ============================================================ */
.upload-zone {
  border: 2px dashed var(--border);
  border-radius: var(--radius);
  padding: 36px 24px;
  text-align: center;
  cursor: pointer;
  transition: all var(--transition);
  background: var(--bg3);
}
.upload-zone:hover, .upload-zone.drag-over {
  border-color: var(--accent);
  background: var(--accent-dim);
}

.upload-icon { font-size: 40px; margin-bottom: 12px; }
.upload-title { font-size: 14px; font-weight: 600; margin-bottom: 4px; }
.upload-sub { font-size: 12px; color: var(--text-3); }

/* ============================================================
   IMAGE PREVIEW GRID
   ============================================================ */
.image-preview-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(90px, 1fr));
  gap: 10px;
  margin-top: 14px;
}

.preview-img {
  aspect-ratio: 1;
  border-radius: var(--radius-sm);
  background: var(--bg4);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 26px;
  border: 1px solid var(--border);
  position: relative;
  overflow: hidden;
  cursor: pointer;
  transition: all var(--transition);
}

.preview-img:hover { border-color: var(--danger); }

.preview-remove {
  position: absolute;
  top: 4px; right: 4px;
  width: 20px; height: 20px;
  background: var(--danger);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 10px;
  color: #fff;
  opacity: 0;
  transition: opacity var(--transition);
}
.preview-img:hover .preview-remove { opacity: 1; }

/* ============================================================
   TOGGLE SWITCH
   ============================================================ */
.toggle-wrap {
  display: flex;
  align-items: center;
  gap: 10px;
}

.toggle {
  position: relative;
  width: 44px; height: 24px;
}

.toggle input { opacity: 0; width: 0; height: 0; }

.toggle-slider {
  position: absolute;
  inset: 0;
  background: var(--bg4);
  border-radius: 24px;
  cursor: pointer;
  transition: all var(--transition);
  border: 1px solid var(--border);
}

.toggle-slider::before {
  content: '';
  position: absolute;
  width: 18px; height: 18px;
  left: 2px; top: 2px;
  background: var(--text-3);
  border-radius: 50%;
  transition: all var(--transition);
}

.toggle input:checked + .toggle-slider {
  background: var(--accent);
  border-color: var(--accent);
}

.toggle input:checked + .toggle-slider::before {
  transform: translateX(20px);
  background: #000;
}

.toggle-label { font-size: 13px; font-weight: 500; }

/* ============================================================
   MODAL
   ============================================================ */
.modal-overlay {
  position: fixed;
  inset: 0;
  background: rgba(0,0,0,0.7);
  backdrop-filter: blur(6px);
  z-index: 200;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 20px;
  opacity: 0;
  pointer-events: none;
  transition: opacity var(--transition);
}

.modal-overlay.open {
  opacity: 1;
  pointer-events: all;
}

.modal {
  background: var(--bg2);
  border: 1px solid var(--border);
  border-radius: var(--radius-lg);
  width: 100%;
  max-width: 640px;
  max-height: 90vh;
  overflow-y: auto;
  transform: scale(0.92) translateY(20px);
  transition: transform 0.28s cubic-bezier(.4,0,.2,1);
}

.modal-overlay.open .modal {
  transform: scale(1) translateY(0);
}

.modal-header {
  padding: 24px 28px;
  border-bottom: 1px solid var(--border);
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.modal-title {
  font-family: var(--font-head);
  font-size: 17px;
  font-weight: 700;
}

.modal-close {
  width: 32px; height: 32px;
  border-radius: var(--radius-sm);
  border: 1px solid var(--border);
  background: var(--bg3);
  color: var(--text-2);
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  font-size: 18px;
  line-height: 1;
  transition: all var(--transition);
}
.modal-close:hover { border-color: var(--danger); color: var(--danger); }

.modal-body { padding: 28px; }

.modal-footer {
  padding: 18px 28px;
  border-top: 1px solid var(--border);
  display: flex;
  justify-content: flex-end;
  gap: 10px;
}

/* ============================================================
   TESTIMONIALS
   ============================================================ */
.testimonial-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
  gap: 18px;
}

.testimonial-card {
  background: var(--bg2);
  border: 1px solid var(--border);
  border-radius: var(--radius);
  padding: 22px;
  transition: all var(--transition);
  position: relative;
}
.testimonial-card:hover { border-color: var(--border-hover); transform: translateY(-2px); box-shadow: var(--card-shadow); }

.testimonial-card::before {
  content: '"';
  font-family: var(--font-head);
  font-size: 80px;
  line-height: 1;
  color: var(--accent);
  opacity: 0.15;
  position: absolute;
  top: 10px; left: 18px;
}

.testimonial-text {
  font-size: 13px;
  color: var(--text-2);
  line-height: 1.7;
  margin-bottom: 18px;
  padding-top: 14px;
  font-style: italic;
}

.testimonial-author {
  display: flex;
  align-items: center;
  gap: 10px;
}

.author-avatar {
  width: 38px; height: 38px;
  border-radius: 50%;
  background: var(--bg4);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 15px;
  font-weight: 700;
  color: var(--accent);
  border: 2px solid var(--border);
  flex-shrink: 0;
}

.author-name { font-size: 13px; font-weight: 600; }
.author-company { font-size: 11px; color: var(--text-3); }

.stars {
  color: var(--warning);
  font-size: 13px;
  margin-bottom: 10px;
  letter-spacing: 1px;
}

.testimonial-actions {
  position: absolute;
  top: 14px; right: 14px;
  display: flex;
  gap: 6px;
}

/* ============================================================
   INQUIRIES (Contact)
   ============================================================ */
.inquiry-item {
  background: var(--bg2);
  border: 1px solid var(--border);
  border-radius: var(--radius);
  padding: 18px 20px;
  display: flex;
  align-items: flex-start;
  gap: 14px;
  cursor: pointer;
  transition: all var(--transition);
  margin-bottom: 10px;
}
.inquiry-item:hover { border-color: var(--border-hover); background: var(--bg3); }
.inquiry-item.unread { border-left: 3px solid var(--accent); }

.inquiry-avatar {
  width: 40px; height: 40px;
  border-radius: 50%;
  background: linear-gradient(135deg, var(--accent), var(--info));
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 14px;
  font-weight: 700;
  color: #000;
  flex-shrink: 0;
}

.inquiry-content { flex: 1; }
.inquiry-name { font-size: 14px; font-weight: 600; margin-bottom: 2px; }
.inquiry-email { font-size: 11px; color: var(--text-3); margin-bottom: 6px; }
.inquiry-msg { font-size: 13px; color: var(--text-2); line-height: 1.5; }

.inquiry-meta {
  text-align: right;
  flex-shrink: 0;
}
.inquiry-time { font-size: 11px; color: var(--text-3); margin-bottom: 6px; }
.new-badge {
  background: var(--accent);
  color: #000;
  font-size: 10px;
  font-weight: 700;
  padding: 2px 8px;
  border-radius: 20px;
}

/* ============================================================
   SETTINGS
   ============================================================ */
.settings-tabs {
  display: flex;
  gap: 0;
  border-bottom: 1px solid var(--border);
  margin-bottom: 24px;
}

.settings-tab {
  padding: 12px 20px;
  font-size: 13px;
  font-weight: 600;
  color: var(--text-3);
  cursor: pointer;
  border-bottom: 2px solid transparent;
  transition: all var(--transition);
  white-space: nowrap;
}
.settings-tab:hover { color: var(--text); }
.settings-tab.active { color: var(--accent); border-bottom-color: var(--accent); }

.settings-section {
  background: var(--bg2);
  border: 1px solid var(--border);
  border-radius: var(--radius);
  margin-bottom: 18px;
  overflow: hidden;
}

.settings-section-head {
  padding: 16px 22px;
  border-bottom: 1px solid var(--border);
  display: flex;
  align-items: center;
  gap: 10px;
}

.settings-section-title {
  font-size: 14px;
  font-weight: 700;
  font-family: var(--font-head);
}

.settings-icon {
  width: 30px; height: 30px;
  border-radius: 7px;
  background: var(--accent-dim);
  color: var(--accent);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 14px;
}

.settings-body { padding: 22px; }

.settings-row {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 14px 0;
  border-bottom: 1px solid var(--border);
}
.settings-row:last-child { border-bottom: none; }

.settings-row-info { flex: 1; }
.settings-row-label { font-size: 14px; font-weight: 500; margin-bottom: 2px; }
.settings-row-sub { font-size: 12px; color: var(--text-3); }

/* ============================================================
   CATEGORY TAGS MANAGER
   ============================================================ */
.category-chips {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
  margin-bottom: 16px;
}

.cat-chip {
  display: flex;
  align-items: center;
  gap: 8px;
  padding: 8px 14px;
  background: var(--bg3);
  border: 1px solid var(--border);
  border-radius: 30px;
  font-size: 13px;
  font-weight: 500;
  cursor: pointer;
  transition: all var(--transition);
}
.cat-chip:hover { border-color: var(--border-hover); }
.cat-chip .cat-count {
  background: var(--bg4);
  border-radius: 20px;
  padding: 1px 7px;
  font-size: 11px;
  color: var(--text-3);
}
.cat-chip .cat-del {
  color: var(--text-3);
  font-size: 14px;
  transition: color var(--transition);
}
.cat-chip:hover .cat-del { color: var(--danger); }

/* ============================================================
   LOGIN PAGE
   ============================================================ */
.login-page {
  display: none;
  min-height: 100vh;
  background: var(--bg);
  align-items: center;
  justify-content: center;
  padding: 24px;
  position: fixed;
  inset: 0;
  z-index: 9999;
}
.login-page.show { display: flex; }

.login-card {
  background: var(--bg2);
  border: 1px solid var(--border);
  border-radius: 24px;
  padding: 44px 44px;
  width: 100%;
  max-width: 420px;
  position: relative;
  overflow: hidden;
  box-shadow: 0 20px 60px rgba(0,0,0,0.3);
}

.login-card::before {
  content: '';
  position: absolute;
  top: -80px; right: -80px;
  width: 200px; height: 200px;
  background: radial-gradient(circle, var(--accent-glow), transparent 70%);
  pointer-events: none;
}

.login-logo {
  display: flex;
  align-items: center;
  gap: 12px;
  margin-bottom: 32px;
}

.login-mark {
  width: 44px; height: 44px;
  background: var(--accent);
  border-radius: 12px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: var(--font-head);
  font-weight: 800;
  font-size: 18px;
  color: #000;
  box-shadow: 0 0 30px var(--accent-glow);
}

.login-title {
  font-family: var(--font-head);
  font-size: 24px;
  font-weight: 800;
  margin-bottom: 6px;
}

.login-sub {
  font-size: 13px;
  color: var(--text-3);
  margin-bottom: 28px;
}

.login-form { display: flex; flex-direction: column; gap: 16px; }

.input-icon-wrap {
  position: relative;
}
.input-icon-wrap svg {
  position: absolute;
  left: 13px; top: 50%;
  transform: translateY(-50%);
  color: var(--text-3);
  width: 16px; height: 16px;
  pointer-events: none;
}
.input-icon-wrap input {
  padding-left: 40px;
}

.login-options {
  display: flex;
  align-items: center;
  justify-content: space-between;
  font-size: 12px;
}

.checkbox-label {
  display: flex;
  align-items: center;
  gap: 7px;
  color: var(--text-2);
  cursor: pointer;
}

.checkbox-label input[type="checkbox"] {
  accent-color: var(--accent);
  width: 14px; height: 14px;
}

.forgot-link {
  color: var(--accent);
  font-weight: 600;
  font-size: 12px;
  cursor: pointer;
}
.forgot-link:hover { text-decoration: underline; }

.login-btn {
  width: 100%;
  padding: 13px;
  background: var(--accent);
  color: #000;
  border: none;
  border-radius: var(--radius-sm);
  font-size: 15px;
  font-weight: 700;
  font-family: var(--font-head);
  cursor: pointer;
  transition: all var(--transition);
  letter-spacing: 0.02em;
}
.login-btn:hover { background: #00cca9; box-shadow: 0 6px 24px var(--accent-glow); transform: translateY(-1px); }

.login-footer {
  margin-top: 24px;
  text-align: center;
  font-size: 12px;
  color: var(--text-3);
}

/* ============================================================
   SIDEBAR OVERLAY (mobile)
   ============================================================ */
.sidebar-overlay {
  position: fixed;
  inset: 0;
  background: rgba(0,0,0,0.6);
  z-index: 99;
  display: none;
}
.sidebar-overlay.show { display: block; }

/* ============================================================
   EMPTY STATE
   ============================================================ */
.empty-state {
  text-align: center;
  padding: 60px 20px;
  color: var(--text-3);
}
.empty-state .empty-icon { font-size: 52px; margin-bottom: 14px; opacity: 0.5; }
.empty-state .empty-title { font-size: 16px; font-weight: 600; color: var(--text-2); margin-bottom: 6px; }
.empty-state .empty-sub { font-size: 13px; }

/* ============================================================
   RESPONSIVE BREAKPOINTS
   ============================================================ */
@media (max-width: 1100px) {
  .stats-grid { grid-template-columns: repeat(2, 1fr); }
  .dash-grid { grid-template-columns: 1fr; }
}

@media (max-width: 768px) {
  :root { --sidebar-w: 260px; }

  .sidebar {
    transform: translateX(-100%);
  }
  .sidebar.open {
    transform: translateX(0);
  }
  .main-area { margin-left: 0; }

  .hamburger { display: flex; }

  .topbar { padding: 0 16px; }
  .page-content { padding: 16px; }

  .stats-grid { grid-template-columns: 1fr 1fr; gap: 12px; }
  .form-grid { grid-template-columns: 1fr; }
  .dash-grid { grid-template-columns: 1fr; }
  .projects-mini { grid-template-columns: 1fr; }
  .testimonial-grid { grid-template-columns: 1fr; }

  .login-card { padding: 28px 22px; }

  .settings-tabs { overflow-x: auto; }

  table { min-width: 700px; }
  .table-wrapper { overflow-x: auto; }
}

@media (max-width: 480px) {
  .stats-grid { grid-template-columns: 1fr; }
  .stat-value { font-size: 26px; }
}

/* ============================================================
   COLOR DOT INDICATORS
   ============================================================ */
.color-swatch {
  display: inline-block;
  width: 12px; height: 12px;
  border-radius: 50%;
  margin-right: 6px;
  vertical-align: middle;
}

/* ============================================================
   NOTIFICATION PANEL
   ============================================================ */
.notif-panel {
  position: absolute;
  top: 54px; right: 0;
  width: 320px;
  background: var(--bg2);
  border: 1px solid var(--border);
  border-radius: var(--radius);
  box-shadow: var(--card-shadow);
  z-index: 60;
  display: none;
  overflow: hidden;
}
.notif-panel.open { display: block; animation: fadeIn 0.2s ease; }

.notif-head {
  padding: 14px 18px;
  font-weight: 700;
  font-size: 13px;
  border-bottom: 1px solid var(--border);
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.notif-clear { font-size: 11px; color: var(--accent); cursor: pointer; font-weight: 600; }

.notif-entry {
  display: flex;
  align-items: flex-start;
  gap: 10px;
  padding: 12px 18px;
  border-bottom: 1px solid var(--border);
  cursor: pointer;
  transition: background var(--transition);
}
.notif-entry:hover { background: var(--bg3); }
.notif-entry:last-child { border-bottom: none; }
.notif-entry-icon {
  width: 30px; height: 30px;
  border-radius: 50%;
  background: var(--accent-dim);
  color: var(--accent);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 14px;
  flex-shrink: 0;
}
.notif-entry-text { font-size: 12px; color: var(--text-2); line-height: 1.5; }
.notif-entry-time { font-size: 10px; color: var(--text-3); margin-top: 2px; }
.notif-panel-pos { position: relative; }

/* ============================================================
   AVATAR COLORS
   ============================================================ */
.av-green { background: linear-gradient(135deg, #2ED573, #00E5BE) !important; color: #000 !important; }
.av-blue { background: linear-gradient(135deg, #4A90D9, #667eea) !important; color: #fff !important; }
.av-orange { background: linear-gradient(135deg, #FFB830, #FF6B6B) !important; color: #000 !important; }
.av-purple { background: linear-gradient(135deg, #C864FF, #4A90D9) !important; color: #fff !important; }

/* ============================================================
   PROGRESS BAR
   ============================================================ */
.progress-bar {
  height: 6px;
  background: var(--bg4);
  border-radius: 6px;
  overflow: hidden;
  margin-top: 6px;
}
.progress-fill {
  height: 100%;
  border-radius: 6px;
  transition: width 0.8s cubic-bezier(.4,0,.2,1);
}
.progress-fill.accent { background: var(--accent); }
.progress-fill.blue { background: var(--info); }
.progress-fill.orange { background: var(--warning); }

/* ============================================================
   TOAST NOTIFICATION
   ============================================================ */
.toast-container {
  position: fixed;
  bottom: 24px; right: 24px;
  z-index: 9999;
  display: flex;
  flex-direction: column;
  gap: 10px;
}

.toast {
  background: var(--bg2);
  border: 1px solid var(--border);
  border-radius: 10px;
  padding: 14px 18px;
  display: flex;
  align-items: center;
  gap: 10px;
  min-width: 280px;
  box-shadow: 0 8px 30px rgba(0,0,0,0.25);
  animation: toastIn 0.3s cubic-bezier(.4,0,.2,1);
}

.toast.success { border-left: 3px solid var(--success); }
.toast.error { border-left: 3px solid var(--danger); }
.toast.info { border-left: 3px solid var(--accent); }

.toast-icon { font-size: 18px; flex-shrink: 0; }
.toast-msg { font-size: 13px; color: var(--text); flex: 1; }

@keyframes toastIn {
  from { opacity: 0; transform: translateX(30px); }
  to { opacity: 1; transform: translateX(0); }
}

/* ============================================================
   MISC UTILITY
   ============================================================ */
.text-accent { color: var(--accent); }
.text-muted { color: var(--text-3); }
.text-danger { color: var(--danger); }
.fw-600 { font-weight: 600; }
.mt-4 { margin-top: 4px; }
.mt-8 { margin-top: 8px; }
.mt-16 { margin-top: 16px; }
.mt-24 { margin-top: 24px; }
.mb-16 { margin-bottom: 16px; }
.mb-24 { margin-bottom: 24px; }
.flex { display: flex; }
.flex-center { display: flex; align-items: center; justify-content: center; }
.gap-8 { gap: 8px; }
.gap-12 { gap: 12px; }
.d-none { display: none; }
.w-full { width: 100%; }

hr.divider {
  border: none;
  border-top: 1px solid var(--border);
  margin: 20px 0;
}

.color-bar-row {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  gap: 8px;
  margin-top: 8px;
}

.color-option {
  height: 32px;
  border-radius: 6px;
  cursor: pointer;
  border: 2px solid transparent;
  transition: border-color var(--transition);
}
.color-option:hover, .color-option.selected { border-color: var(--text); }
</style>
</head>
<body>

<!-- ============================================================
     LOGIN PAGE
     ============================================================ -->
<div class="login-page show" id="loginPage">
  <div class="login-card">
    <div class="login-logo">
      <div class="login-mark">B</div>
      <div>
        <div style="font-family:var(--font-head);font-weight:800;font-size:16px">Baseline IT</div>
        <div style="font-size:11px;color:var(--text-3);letter-spacing:0.06em;text-transform:uppercase">Admin Panel</div>
      </div>
    </div>
    <div class="login-title">Welcome back 👋</div>
    <div class="login-sub">Sign in to manage your portfolio</div>
    <div class="login-form">
      <div class="form-group">
        <label class="form-label">Email Address</label>
        <div class="input-icon-wrap">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="4" width="20" height="16" rx="2"/><polyline points="2,4 12,13 22,4"/></svg>
          <input type="email" class="form-input" placeholder="admin@baselineit.com" value="admin@baselineit.com">
        </div>
      </div>
      <div class="form-group">
        <label class="form-label">Password</label>
        <div class="input-icon-wrap">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>
          <input type="password" class="form-input" placeholder="••••••••" value="password">
        </div>
      </div>
      <div class="login-options">
        <label class="checkbox-label">
          <input type="checkbox" checked>
          Remember me
        </label>
        <span class="forgot-link">Forgot password?</span>
      </div>
      <button class="login-btn" onclick="doLogin()">Sign In to Dashboard</button>
    </div>
    <div class="login-footer">
      Baseline IT Development &copy; 2025 &mdash; Admin v2.0
    </div>
  </div>
</div>

<!-- ============================================================
     MAIN APP SHELL
     ============================================================ -->
<div class="app-shell" id="appShell">

  <!-- SIDEBAR OVERLAY (mobile) -->
  <div class="sidebar-overlay" id="sidebarOverlay" onclick="closeSidebar()"></div>

  <!-- SIDEBAR -->
  <aside class="sidebar" id="sidebar">
    <div class="sidebar-logo">
      <div class="logo-mark">B</div>
      <div class="logo-text">
        Baseline IT
        <span>Development Studio</span>
      </div>
    </div>

    <nav class="sidebar-nav">
      <div class="nav-item active" onclick="showPage('dashboard', this)">
        <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg>
        Dashboard
      </div>

      <div class="nav-section-label">Portfolio</div>

      <div class="nav-item" onclick="showPage('projects', this)">
        <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
        Projects
        <span class="nav-badge accent">24</span>
      </div>

      <div class="nav-item" onclick="showPage('categories', this)">
        <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 6h18M3 12h18M3 18h18"/><circle cx="7" cy="6" r="1" fill="currentColor"/><circle cx="7" cy="12" r="1" fill="currentColor"/><circle cx="7" cy="18" r="1" fill="currentColor"/></svg>
        Categories
      </div>

      <div class="nav-section-label">Content</div>

      <div class="nav-item" onclick="showPage('testimonials', this)">
        <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
        Testimonials
      </div>

      <div class="nav-item" onclick="showPage('inquiries', this)">
        <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
        Contact Inquiries
        <span class="nav-badge">5</span>
      </div>

      <div class="nav-section-label">System</div>

      <div class="nav-item" onclick="showPage('settings', this)">
        <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 010 2.83 2 2 0 01-2.83 0l-.06-.06A1.65 1.65 0 0015 19.4a1.65 1.65 0 00-1.65 1.5V21a2 2 0 01-4 0v-.09A1.65 1.65 0 008 19.4a1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 01-2.83-2.83l.06-.06A1.65 1.65 0 004.6 15a1.65 1.65 0 00-1.5-1.65H3a2 2 0 010-4h.09A1.65 1.65 0 004.6 9a1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 012.83-2.83l.06.06A1.65 1.65 0 009 4.6a1.65 1.65 0 001.65-1.5V3a2 2 0 014 0v.09A1.65 1.65 0 0016 4.6a1.65 1.65 0 001.82-.33l.06-.06a2 2 0 012.83 2.83l-.06.06A1.65 1.65 0 0019.4 9a1.65 1.65 0 001.5 1.65H21a2 2 0 010 4h-.09a1.65 1.65 0 00-1.51 1z"/></svg>
        Website Settings
      </div>

      <div class="nav-item" onclick="showPage('add-project', this)">
        <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="16"/><line x1="8" y1="12" x2="16" y2="12"/></svg>
        Add New Project
      </div>
    </nav>

    <div class="sidebar-footer">
      <div class="user-card">
        <div class="user-avatar">A</div>
        <div class="user-info">
          <div class="user-name">Admin User</div>
          <div class="user-role">Super Administrator</div>
        </div>
        <svg onclick="doLogout()" style="color:var(--text-3);cursor:pointer;width:16px;height:16px;flex-shrink:0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 21H5a2 2 0 01-2-2V5a2 2 0 012-2h4M16 17l5-5-5-5M21 12H9"/></svg>
      </div>
    </div>
  </aside>

  <!-- MAIN AREA -->
  <main class="main-area">

    <!-- TOPBAR -->
    <header class="topbar">
      <button class="hamburger" id="hamburger" onclick="toggleSidebar()">
        <span></span><span></span><span></span>
      </button>
      <div class="topbar-title" id="topbarTitle">
        Dashboard
        <span class="breadcrumb">/ <span>Overview</span></span>
      </div>
      <div class="topbar-actions">
        <button class="theme-toggle" onclick="toggleTheme()" title="Toggle theme">🌙</button>
        <div class="notif-panel-pos">
          <div class="icon-btn" onclick="toggleNotif()">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8A6 6 0 006 8c0 7-3 9-3 9h18s-3-2-3-9M13.73 21a2 2 0 01-3.46 0"/></svg>
            <div class="notif-dot"></div>
          </div>
          <div class="notif-panel" id="notifPanel">
            <div class="notif-head">
              Notifications
              <span class="notif-clear">Mark all read</span>
            </div>
            <div class="notif-entry">
              <div class="notif-entry-icon">📩</div>
              <div>
                <div class="notif-entry-text">New inquiry from <strong>Ahmed Khan</strong></div>
                <div class="notif-entry-time">2 minutes ago</div>
              </div>
            </div>
            <div class="notif-entry">
              <div class="notif-entry-icon">⭐</div>
              <div>
                <div class="notif-entry-text">New testimonial submitted</div>
                <div class="notif-entry-time">1 hour ago</div>
              </div>
            </div>
            <div class="notif-entry">
              <div class="notif-entry-icon">🚀</div>
              <div>
                <div class="notif-entry-text">Project "Nexus Branding" published</div>
                <div class="notif-entry-time">3 hours ago</div>
              </div>
            </div>
            <div class="notif-entry">
              <div class="notif-entry-icon">📊</div>
              <div>
                <div class="notif-entry-text">Monthly report is ready to view</div>
                <div class="notif-entry-time">Yesterday</div>
              </div>
            </div>
          </div>
        </div>
        <button class="btn btn-primary btn-sm" onclick="showPage('add-project', null)">
          <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
          New Project
        </button>
      </div>
    </header>

    <!-- PAGE CONTENT -->
    <div class="page-content">

      <!-- ======================================================
           PAGE: DASHBOARD
           ====================================================== -->
      <div class="page active" id="page-dashboard">

        <!-- Stats Grid -->
        <div class="stats-grid">
          <div class="stat-card teal">
            <div class="stat-card-top">
              <div class="stat-icon teal">🖼️</div>
              <div class="stat-change up">↑ 12%</div>
            </div>
            <div class="stat-value">24</div>
            <div class="stat-label">Total Projects</div>
          </div>
          <div class="stat-card blue">
            <div class="stat-card-top">
              <div class="stat-icon blue">💬</div>
              <div class="stat-change up">↑ 8%</div>
            </div>
            <div class="stat-value">18</div>
            <div class="stat-label">Testimonials</div>
          </div>
          <div class="stat-card orange">
            <div class="stat-card-top">
              <div class="stat-icon orange">📩</div>
              <div class="stat-change up">↑ 24%</div>
            </div>
            <div class="stat-value">5</div>
            <div class="stat-label">New Inquiries</div>
          </div>
          <div class="stat-card red">
            <div class="stat-card-top">
              <div class="stat-icon red">📂</div>
              <div class="stat-change down">↓ 2%</div>
            </div>
            <div class="stat-value">8</div>
            <div class="stat-label">Categories</div>
          </div>
        </div>

        <!-- Chart + Activity -->
        <div class="dash-grid">
          <!-- Chart -->
          <div class="chart-area">
            <div class="section-header" style="margin-bottom:0">
              <div class="section-title">Project Activity</div>
              <select class="filter-select" style="font-size:12px;padding:6px 10px">
                <option>Last 6 Months</option>
                <option>Last Year</option>
              </select>
            </div>
            <div class="chart-bars">
              <div class="chart-bar-group">
                <div class="chart-bar primary" style="height:60%"></div>
                <div class="chart-label">Jan</div>
              </div>
              <div class="chart-bar-group">
                <div class="chart-bar primary" style="height:80%"></div>
                <div class="chart-label">Feb</div>
              </div>
              <div class="chart-bar-group">
                <div class="chart-bar primary" style="height:50%"></div>
                <div class="chart-label">Mar</div>
              </div>
              <div class="chart-bar-group">
                <div class="chart-bar primary" style="height:90%"></div>
                <div class="chart-label">Apr</div>
              </div>
              <div class="chart-bar-group">
                <div class="chart-bar primary" style="height:70%"></div>
                <div class="chart-label">May</div>
              </div>
              <div class="chart-bar-group">
                <div class="chart-bar primary" style="height:100%"></div>
                <div class="chart-label">Jun</div>
              </div>
            </div>
            <div class="chart-legend">
              <div class="legend-item"><div class="legend-dot" style="background:var(--accent)"></div> Projects Published</div>
              <div class="legend-item"><div class="legend-dot" style="background:var(--info)"></div> Inquiries</div>
            </div>

            <!-- Category breakdown -->
            <div style="margin-top:24px">
              <div class="fw-600" style="font-size:13px;margin-bottom:14px;color:var(--text-2)">Category Breakdown</div>
              <div style="display:flex;flex-direction:column;gap:12px">
                <div>
                  <div style="display:flex;justify-content:space-between;font-size:12px;margin-bottom:4px">
                    <span>Logo Design</span><span class="text-accent fw-600">8 projects</span>
                  </div>
                  <div class="progress-bar"><div class="progress-fill accent" style="width:75%"></div></div>
                </div>
                <div>
                  <div style="display:flex;justify-content:space-between;font-size:12px;margin-bottom:4px">
                    <span>UI/UX Design</span><span style="color:var(--info)" class="fw-600">6 projects</span>
                  </div>
                  <div class="progress-bar"><div class="progress-fill blue" style="width:55%"></div></div>
                </div>
                <div>
                  <div style="display:flex;justify-content:space-between;font-size:12px;margin-bottom:4px">
                    <span>Social Media</span><span style="color:var(--warning)" class="fw-600">5 projects</span>
                  </div>
                  <div class="progress-bar"><div class="progress-fill orange" style="width:40%"></div></div>
                </div>
              </div>
            </div>
          </div>

          <!-- Activity Feed -->
          <div class="activity-feed">
            <div class="card-header">
              <div class="section-title">Recent Activity</div>
              <button class="btn btn-ghost btn-sm">View All</button>
            </div>
            <div class="activity-item">
              <div class="activity-icon" style="background:var(--accent-dim)">🚀</div>
              <div class="activity-content">
                <div class="activity-text">Project <strong>Nexus Brand Identity</strong> published</div>
                <div class="activity-time">2 mins ago</div>
              </div>
            </div>
            <div class="activity-item">
              <div class="activity-icon" style="background:rgba(74,144,217,0.12)">📩</div>
              <div class="activity-content">
                <div class="activity-text">New inquiry from <strong>Ahmed Khan</strong></div>
                <div class="activity-time">15 mins ago</div>
              </div>
            </div>
            <div class="activity-item">
              <div class="activity-icon" style="background:rgba(255,184,48,0.12)">⭐</div>
              <div class="activity-content">
                <div class="activity-text">Testimonial added by <strong>Sara Ahmed</strong></div>
                <div class="activity-time">1 hour ago</div>
              </div>
            </div>
            <div class="activity-item">
              <div class="activity-icon" style="background:rgba(46,213,115,0.12)">✏️</div>
              <div class="activity-content">
                <div class="activity-text">Project <strong>TechFlow UI</strong> updated</div>
                <div class="activity-time">3 hours ago</div>
              </div>
            </div>
            <div class="activity-item">
              <div class="activity-icon" style="background:rgba(200,100,255,0.12)">🗂️</div>
              <div class="activity-content">
                <div class="activity-text">Category <strong>Packaging Design</strong> created</div>
                <div class="activity-time">Yesterday</div>
              </div>
            </div>
            <div class="activity-item">
              <div class="activity-icon" style="background:rgba(255,71,87,0.12)">🗑️</div>
              <div class="activity-content">
                <div class="activity-text">Draft project <strong>Old Campaign</strong> deleted</div>
                <div class="activity-time">2 days ago</div>
              </div>
            </div>
          </div>
        </div>

        <!-- Featured Projects Quick View -->
        <div class="section-header">
          <div class="section-title">Recent Projects</div>
          <button class="btn btn-secondary btn-sm" onclick="showPage('projects', null)">View All →</button>
        </div>
        <div class="projects-mini">
          <div class="project-mini-card">
            <div class="project-mini-thumb" style="background:linear-gradient(135deg,#1a1a2e,#16213e)">🎨</div>
            <div class="project-mini-info">
              <div class="project-mini-cat">Branding</div>
              <div class="project-mini-title">Nexus Brand Identity</div>
              <div class="project-mini-date">Jun 2025 &middot; <span class="text-accent">Featured</span></div>
            </div>
          </div>
          <div class="project-mini-card">
            <div class="project-mini-thumb" style="background:linear-gradient(135deg,#0f3460,#533483)">💻</div>
            <div class="project-mini-info">
              <div class="project-mini-cat">UI/UX Design</div>
              <div class="project-mini-title">TechFlow Dashboard</div>
              <div class="project-mini-date">May 2025</div>
            </div>
          </div>
          <div class="project-mini-card">
            <div class="project-mini-thumb" style="background:linear-gradient(135deg,#1b4332,#2d6a4f)">📦</div>
            <div class="project-mini-info">
              <div class="project-mini-cat">Packaging</div>
              <div class="project-mini-title">Organic Bloom Box</div>
              <div class="project-mini-date">Apr 2025 &middot; <span class="text-accent">Featured</span></div>
            </div>
          </div>
          <div class="project-mini-card">
            <div class="project-mini-thumb" style="background:linear-gradient(135deg,#3d0c02,#8b1a1a)">📱</div>
            <div class="project-mini-info">
              <div class="project-mini-cat">Social Media</div>
              <div class="project-mini-title">Spark Campaign Kit</div>
              <div class="project-mini-date">Mar 2025</div>
            </div>
          </div>
        </div>
      </div>

      <!-- ======================================================
           PAGE: PROJECTS
           ====================================================== -->
      <div class="page" id="page-projects">
        <div class="section-header" style="margin-bottom:20px">
          <div class="section-title">All Projects</div>
          <button class="btn btn-primary" onclick="openModal('addProjectModal')">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
            Add Project
          </button>
        </div>

        <div class="table-wrapper">
          <div class="table-controls">
            <div class="search-input-wrap">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
              <input class="search-input" type="text" placeholder="Search projects...">
            </div>
            <select class="filter-select">
              <option>All Categories</option>
              <option>Logo Design</option>
              <option>Branding</option>
              <option>UI/UX Design</option>
              <option>Social Media</option>
              <option>Packaging</option>
              <option>Web Design</option>
            </select>
            <select class="filter-select">
              <option>All Status</option>
              <option>Published</option>
              <option>Draft</option>
            </select>
          </div>

          <div style="overflow-x:auto">
          <table>
            <thead>
              <tr>
                <th style="width:44px"><input type="checkbox"></th>
                <th>Project</th>
                <th>Category</th>
                <th>Status</th>
                <th>Featured</th>
                <th>Client</th>
                <th>Date</th>
                <th style="text-align:right">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><input type="checkbox"></td>
                <td>
                  <div class="table-project-info">
                    <div class="table-thumb">🎨</div>
                    <div>
                      <div class="project-name-cell">Nexus Brand Identity</div>
                      <div class="project-cat-cell">Tools: Illustrator, Figma</div>
                    </div>
                  </div>
                </td>
                <td><span class="badge badge-brand">Branding</span></td>
                <td><span class="badge badge-published"><div class="dot dot-green"></div> Published</span></td>
                <td><span class="badge badge-featured">⭐ Yes</span></td>
                <td style="color:var(--text-2);font-size:12px">Nexus Corp</td>
                <td style="color:var(--text-3);font-size:12px">Jun 2025</td>
                <td>
                  <div class="table-actions" style="justify-content:flex-end">
                    <button class="tbl-btn" title="View">👁</button>
                    <button class="tbl-btn" title="Edit" onclick="openModal('editProjectModal')">✏️</button>
                    <button class="tbl-btn danger" title="Delete" onclick="openModal('deleteModal')">🗑</button>
                  </div>
                </td>
              </tr>
              <tr>
                <td><input type="checkbox"></td>
                <td>
                  <div class="table-project-info">
                    <div class="table-thumb">💻</div>
                    <div>
                      <div class="project-name-cell">TechFlow Dashboard</div>
                      <div class="project-cat-cell">Tools: Figma, Adobe XD</div>
                    </div>
                  </div>
                </td>
                <td><span class="badge badge-ui">UI/UX</span></td>
                <td><span class="badge badge-published"><div class="dot dot-green"></div> Published</span></td>
                <td><span style="color:var(--text-3);font-size:12px">—</span></td>
                <td style="color:var(--text-2);font-size:12px">TechFlow Ltd</td>
                <td style="color:var(--text-3);font-size:12px">May 2025</td>
                <td>
                  <div class="table-actions" style="justify-content:flex-end">
                    <button class="tbl-btn" title="View">👁</button>
                    <button class="tbl-btn" title="Edit" onclick="openModal('editProjectModal')">✏️</button>
                    <button class="tbl-btn danger" title="Delete" onclick="openModal('deleteModal')">🗑</button>
                  </div>
                </td>
              </tr>
              <tr>
                <td><input type="checkbox"></td>
                <td>
                  <div class="table-project-info">
                    <div class="table-thumb">📦</div>
                    <div>
                      <div class="project-name-cell">Organic Bloom Box</div>
                      <div class="project-cat-cell">Tools: Photoshop, Illustrator</div>
                    </div>
                  </div>
                </td>
                <td><span class="badge badge-print">Packaging</span></td>
                <td><span class="badge badge-published"><div class="dot dot-green"></div> Published</span></td>
                <td><span class="badge badge-featured">⭐ Yes</span></td>
                <td style="color:var(--text-2);font-size:12px">Bloom Organics</td>
                <td style="color:var(--text-3);font-size:12px">Apr 2025</td>
                <td>
                  <div class="table-actions" style="justify-content:flex-end">
                    <button class="tbl-btn" title="View">👁</button>
                    <button class="tbl-btn" title="Edit" onclick="openModal('editProjectModal')">✏️</button>
                    <button class="tbl-btn danger" title="Delete" onclick="openModal('deleteModal')">🗑</button>
                  </div>
                </td>
              </tr>
              <tr>
                <td><input type="checkbox"></td>
                <td>
                  <div class="table-project-info">
                    <div class="table-thumb">📱</div>
                    <div>
                      <div class="project-name-cell">Spark Campaign Kit</div>
                      <div class="project-cat-cell">Tools: Photoshop, Canva Pro</div>
                    </div>
                  </div>
                </td>
                <td><span class="badge badge-social">Social Media</span></td>
                <td><span class="badge badge-draft"><div class="dot dot-orange"></div> Draft</span></td>
                <td><span style="color:var(--text-3);font-size:12px">—</span></td>
                <td style="color:var(--text-2);font-size:12px">Spark Agency</td>
                <td style="color:var(--text-3);font-size:12px">Mar 2025</td>
                <td>
                  <div class="table-actions" style="justify-content:flex-end">
                    <button class="tbl-btn" title="View">👁</button>
                    <button class="tbl-btn" title="Edit" onclick="openModal('editProjectModal')">✏️</button>
                    <button class="tbl-btn danger" title="Delete" onclick="openModal('deleteModal')">🗑</button>
                  </div>
                </td>
              </tr>
              <tr>
                <td><input type="checkbox"></td>
                <td>
                  <div class="table-project-info">
                    <div class="table-thumb">🔵</div>
                    <div>
                      <div class="project-name-cell">PureEdge Logo Suite</div>
                      <div class="project-cat-cell">Tools: Illustrator</div>
                    </div>
                  </div>
                </td>
                <td><span class="badge badge-logo">Logo</span></td>
                <td><span class="badge badge-published"><div class="dot dot-green"></div> Published</span></td>
                <td><span style="color:var(--text-3);font-size:12px">—</span></td>
                <td style="color:var(--text-2);font-size:12px">PureEdge Inc</td>
                <td style="color:var(--text-3);font-size:12px">Feb 2025</td>
                <td>
                  <div class="table-actions" style="justify-content:flex-end">
                    <button class="tbl-btn" title="View">👁</button>
                    <button class="tbl-btn" title="Edit" onclick="openModal('editProjectModal')">✏️</button>
                    <button class="tbl-btn danger" title="Delete" onclick="openModal('deleteModal')">🗑</button>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
          </div>

          <div class="pagination">
            <div class="page-info">Showing 1–5 of 24 projects</div>
            <div class="page-buttons">
              <div class="page-btn">‹</div>
              <div class="page-btn active">1</div>
              <div class="page-btn">2</div>
              <div class="page-btn">3</div>
              <div class="page-btn">›</div>
            </div>
          </div>
        </div>
      </div>

      <!-- ======================================================
           PAGE: CATEGORIES
           ====================================================== -->
      <div class="page" id="page-categories">
        <div class="section-header" style="margin-bottom:20px">
          <div class="section-title">Categories</div>
          <button class="btn btn-primary" onclick="openModal('addCatModal')">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
            Add Category
          </button>
        </div>

        <div class="card mb-24">
          <div class="card-header">
            <div style="font-size:13px;font-weight:600">Active Categories</div>
            <span style="font-size:12px;color:var(--text-3)">8 total</span>
          </div>
          <div class="card-body">
            <div class="category-chips">
              <div class="cat-chip">
                <span>🔵</span> Logo Design
                <span class="cat-count">8</span>
                <span class="cat-del" onclick="openModal('deleteModal')">✕</span>
              </div>
              <div class="cat-chip">
                <span>📱</span> Social Media Design
                <span class="cat-count">5</span>
                <span class="cat-del" onclick="openModal('deleteModal')">✕</span>
              </div>
              <div class="cat-chip">
                <span>🎨</span> Branding
                <span class="cat-count">4</span>
                <span class="cat-del" onclick="openModal('deleteModal')">✕</span>
              </div>
              <div class="cat-chip">
                <span>💻</span> UI/UX Design
                <span class="cat-count">6</span>
                <span class="cat-del" onclick="openModal('deleteModal')">✕</span>
              </div>
              <div class="cat-chip">
                <span>🌐</span> Website Design
                <span class="cat-count">3</span>
                <span class="cat-del" onclick="openModal('deleteModal')">✕</span>
              </div>
              <div class="cat-chip">
                <span>📦</span> Packaging Design
                <span class="cat-count">2</span>
                <span class="cat-del" onclick="openModal('deleteModal')">✕</span>
              </div>
              <div class="cat-chip">
                <span>📢</span> Advertisement Design
                <span class="cat-count">1</span>
                <span class="cat-del" onclick="openModal('deleteModal')">✕</span>
              </div>
              <div class="cat-chip">
                <span>🖨️</span> Print Design
                <span class="cat-count">2</span>
                <span class="cat-del" onclick="openModal('deleteModal')">✕</span>
              </div>
            </div>
          </div>
        </div>

        <div class="table-wrapper">
          <div class="table-controls">
            <div class="search-input-wrap">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
              <input class="search-input" type="text" placeholder="Search categories...">
            </div>
          </div>
          <table>
            <thead>
              <tr>
                <th>#</th>
                <th>Category Name</th>
                <th>Slug</th>
                <th>Projects</th>
                <th>Created</th>
                <th style="text-align:right">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td style="color:var(--text-3)">01</td>
                <td><span>🔵</span> <strong>Logo Design</strong></td>
                <td style="font-family:monospace;font-size:12px;color:var(--text-3)">logo-design</td>
                <td><span class="badge badge-logo">8 projects</span></td>
                <td style="color:var(--text-3);font-size:12px">Jan 2025</td>
                <td>
                  <div class="table-actions" style="justify-content:flex-end">
                    <button class="tbl-btn" onclick="openModal('addCatModal')">✏️</button>
                    <button class="tbl-btn danger" onclick="openModal('deleteModal')">🗑</button>
                  </div>
                </td>
              </tr>
              <tr>
                <td style="color:var(--text-3)">02</td>
                <td><span>💻</span> <strong>UI/UX Design</strong></td>
                <td style="font-family:monospace;font-size:12px;color:var(--text-3)">ui-ux-design</td>
                <td><span class="badge badge-ui">6 projects</span></td>
                <td style="color:var(--text-3);font-size:12px">Jan 2025</td>
                <td>
                  <div class="table-actions" style="justify-content:flex-end">
                    <button class="tbl-btn" onclick="openModal('addCatModal')">✏️</button>
                    <button class="tbl-btn danger" onclick="openModal('deleteModal')">🗑</button>
                  </div>
                </td>
              </tr>
              <tr>
                <td style="color:var(--text-3)">03</td>
                <td><span>📱</span> <strong>Social Media Design</strong></td>
                <td style="font-family:monospace;font-size:12px;color:var(--text-3)">social-media-design</td>
                <td><span class="badge badge-social">5 projects</span></td>
                <td style="color:var(--text-3);font-size:12px">Feb 2025</td>
                <td>
                  <div class="table-actions" style="justify-content:flex-end">
                    <button class="tbl-btn" onclick="openModal('addCatModal')">✏️</button>
                    <button class="tbl-btn danger" onclick="openModal('deleteModal')">🗑</button>
                  </div>
                </td>
              </tr>
              <tr>
                <td style="color:var(--text-3)">04</td>
                <td><span>🎨</span> <strong>Branding</strong></td>
                <td style="font-family:monospace;font-size:12px;color:var(--text-3)">branding</td>
                <td><span class="badge badge-brand">4 projects</span></td>
                <td style="color:var(--text-3);font-size:12px">Jan 2025</td>
                <td>
                  <div class="table-actions" style="justify-content:flex-end">
                    <button class="tbl-btn" onclick="openModal('addCatModal')">✏️</button>
                    <button class="tbl-btn danger" onclick="openModal('deleteModal')">🗑</button>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- ======================================================
           PAGE: TESTIMONIALS
           ====================================================== -->
      <div class="page" id="page-testimonials">
        <div class="section-header" style="margin-bottom:20px">
          <div class="section-title">Testimonials</div>
          <button class="btn btn-primary" onclick="openModal('addTestiModal')">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
            Add Testimonial
          </button>
        </div>

        <div class="testimonial-grid">
          <div class="testimonial-card">
            <div class="testimonial-actions">
              <button class="tbl-btn" onclick="openModal('addTestiModal')">✏️</button>
              <button class="tbl-btn danger" onclick="openModal('deleteModal')">🗑</button>
            </div>
            <div class="stars">★★★★★</div>
            <div class="testimonial-text">Baseline IT delivered exactly what we envisioned. The brand identity exceeded our expectations — clean, modern, and truly represents our company.</div>
            <div class="testimonial-author">
              <div class="author-avatar av-green">S</div>
              <div>
                <div class="author-name">Sara Ahmed</div>
                <div class="author-company">CEO, Nexus Corp</div>
              </div>
            </div>
          </div>
          <div class="testimonial-card">
            <div class="testimonial-actions">
              <button class="tbl-btn" onclick="openModal('addTestiModal')">✏️</button>
              <button class="tbl-btn danger" onclick="openModal('deleteModal')">🗑</button>
            </div>
            <div class="stars">★★★★★</div>
            <div class="testimonial-text">Exceptional UI/UX work. Our app conversion rate improved by 40% after the redesign. The team understands both aesthetics and user psychology.</div>
            <div class="testimonial-author">
              <div class="author-avatar av-blue">R</div>
              <div>
                <div class="author-name">Rahul Mehta</div>
                <div class="author-company">Product Manager, TechFlow</div>
              </div>
            </div>
          </div>
          <div class="testimonial-card">
            <div class="testimonial-actions">
              <button class="tbl-btn" onclick="openModal('addTestiModal')">✏️</button>
              <button class="tbl-btn danger" onclick="openModal('deleteModal')">🗑</button>
            </div>
            <div class="stars">★★★★☆</div>
            <div class="testimonial-text">Our packaging now stands out on shelves. The creativity and attention to detail is impressive. Would definitely recommend to any brand.</div>
            <div class="testimonial-author">
              <div class="author-avatar av-orange">M</div>
              <div>
                <div class="author-name">Maria Lopez</div>
                <div class="author-company">Founder, Bloom Organics</div>
              </div>
            </div>
          </div>
          <div class="testimonial-card">
            <div class="testimonial-actions">
              <button class="tbl-btn" onclick="openModal('addTestiModal')">✏️</button>
              <button class="tbl-btn danger" onclick="openModal('deleteModal')">🗑</button>
            </div>
            <div class="stars">★★★★★</div>
            <div class="testimonial-text">Fast turnaround, professional team, and stunning visuals. Our social media engagement tripled after the new creative kit was deployed.</div>
            <div class="testimonial-author">
              <div class="author-avatar av-purple">K</div>
              <div>
                <div class="author-name">Khalid Hassan</div>
                <div class="author-company">Marketing Dir, Spark Agency</div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- ======================================================
           PAGE: INQUIRIES
           ====================================================== -->
      <div class="page" id="page-inquiries">
        <div class="section-header" style="margin-bottom:20px">
          <div class="section-title">Contact Inquiries</div>
          <div style="display:flex;gap:8px">
            <button class="btn btn-secondary btn-sm">Export CSV</button>
            <select class="filter-select">
              <option>All Messages</option>
              <option>Unread</option>
              <option>Read</option>
            </select>
          </div>
        </div>

        <div class="inquiry-item unread" onclick="openModal('replyModal')">
          <div class="inquiry-avatar">A</div>
          <div class="inquiry-content">
            <div class="inquiry-name">Ahmed Khan</div>
            <div class="inquiry-email">ahmed.khan@email.com &middot; +92 300 1234567</div>
            <div class="inquiry-msg">Hi, I need a complete brand identity package for my startup. Can you share your pricing and availability for next month?</div>
          </div>
          <div class="inquiry-meta">
            <div class="inquiry-time">2 min ago</div>
            <span class="new-badge">New</span>
          </div>
        </div>

        <div class="inquiry-item unread" onclick="openModal('replyModal')">
          <div class="inquiry-avatar av-blue">F</div>
          <div class="inquiry-content">
            <div class="inquiry-name">Fatima Malik</div>
            <div class="inquiry-email">fatima@company.pk &middot; fatima.malik@gmail.com</div>
            <div class="inquiry-msg">We're looking for social media creatives for our Ramadan campaign. Timeline is tight — 2 weeks. Please get back ASAP.</div>
          </div>
          <div class="inquiry-meta">
            <div class="inquiry-time">1 hr ago</div>
            <span class="new-badge">New</span>
          </div>
        </div>

        <div class="inquiry-item" onclick="openModal('replyModal')">
          <div class="inquiry-avatar av-orange">Z</div>
          <div class="inquiry-content">
            <div class="inquiry-name">Zain Raza</div>
            <div class="inquiry-email">zain@techstartup.io</div>
            <div class="inquiry-msg">I saw your portfolio on LinkedIn. Loved the UI/UX work. Would love to discuss a potential long-term collaboration.</div>
          </div>
          <div class="inquiry-meta">
            <div class="inquiry-time">Yesterday</div>
          </div>
        </div>

        <div class="inquiry-item" onclick="openModal('replyModal')">
          <div class="inquiry-avatar av-purple">N</div>
          <div class="inquiry-content">
            <div class="inquiry-name">Nadia Sheikh</div>
            <div class="inquiry-email">nadia@bloombrand.com</div>
            <div class="inquiry-msg">Following up on our packaging design discussion. Could you send the final invoice when ready? Great work by the way!</div>
          </div>
          <div class="inquiry-meta">
            <div class="inquiry-time">2 days ago</div>
          </div>
        </div>

        <div class="inquiry-item" onclick="openModal('replyModal')">
          <div class="inquiry-avatar">T</div>
          <div class="inquiry-content">
            <div class="inquiry-name">Tariq Usman</div>
            <div class="inquiry-email">tariq.usman@retailpk.com</div>
            <div class="inquiry-msg">Hello, we need flyer and banner designs for our seasonal sale. Around 10 designs needed. What's your rate per design?</div>
          </div>
          <div class="inquiry-meta">
            <div class="inquiry-time">3 days ago</div>
          </div>
        </div>
      </div>

      <!-- ======================================================
           PAGE: SETTINGS
           ====================================================== -->
      <div class="page" id="page-settings">
        <div class="section-header" style="margin-bottom:20px">
          <div class="section-title">Website Settings</div>
          <button class="btn btn-primary" onclick="showToast('Settings saved!', 'success')">Save Changes</button>
        </div>

        <div class="settings-tabs">
          <div class="settings-tab active" onclick="switchSettingsTab(this)">General</div>
          <div class="settings-tab" onclick="switchSettingsTab(this)">SEO</div>
          <div class="settings-tab" onclick="switchSettingsTab(this)">Contact Info</div>
          <div class="settings-tab" onclick="switchSettingsTab(this)">Social Links</div>
          <div class="settings-tab" onclick="switchSettingsTab(this)">Security</div>
        </div>

        <!-- General Settings -->
        <div class="settings-section">
          <div class="settings-section-head">
            <div class="settings-icon">🏢</div>
            <div class="settings-section-title">Company Information</div>
          </div>
          <div class="settings-body">
            <div class="form-grid">
              <div class="form-group">
                <label class="form-label">Company Name <span class="required">*</span></label>
                <input type="text" class="form-input" value="Baseline IT Development">
              </div>
              <div class="form-group">
                <label class="form-label">Tagline</label>
                <input type="text" class="form-input" value="Crafting Digital Excellence">
              </div>
              <div class="form-group">
                <label class="form-label">Contact Email</label>
                <input type="email" class="form-input" value="info@baselineit.dev">
              </div>
              <div class="form-group">
                <label class="form-label">WhatsApp Number</label>
                <input type="text" class="form-input" value="+92 300 123 4567">
              </div>
              <div class="form-group full">
                <label class="form-label">Company Description</label>
                <textarea class="form-textarea">We are a professional graphic design and web development agency specializing in brand identity, UI/UX design, and digital solutions.</textarea>
              </div>
            </div>
          </div>
        </div>

        <div class="settings-section">
          <div class="settings-section-head">
            <div class="settings-icon">🎨</div>
            <div class="settings-section-title">Appearance</div>
          </div>
          <div class="settings-body">
            <div class="settings-row">
              <div class="settings-row-info">
                <div class="settings-row-label">Accent Color</div>
                <div class="settings-row-sub">Primary brand color used throughout the website</div>
              </div>
              <div class="color-bar-row" style="grid-template-columns:repeat(5,32px)">
                <div class="color-option selected" style="background:#00E5BE"></div>
                <div class="color-option" style="background:#4A90D9"></div>
                <div class="color-option" style="background:#C864FF"></div>
                <div class="color-option" style="background:#FF6B6B"></div>
                <div class="color-option" style="background:#FFB830"></div>
              </div>
            </div>
            <div class="settings-row">
              <div class="settings-row-info">
                <div class="settings-row-label">Dark Mode Default</div>
                <div class="settings-row-sub">Set the default theme for visitors</div>
              </div>
              <label class="toggle">
                <input type="checkbox" checked>
                <span class="toggle-slider"></span>
              </label>
            </div>
            <div class="settings-row">
              <div class="settings-row-info">
                <div class="settings-row-label">Animations</div>
                <div class="settings-row-sub">Enable smooth scroll and entrance animations</div>
              </div>
              <label class="toggle">
                <input type="checkbox" checked>
                <span class="toggle-slider"></span>
              </label>
            </div>
          </div>
        </div>

        <div class="settings-section">
          <div class="settings-section-head">
            <div class="settings-icon">⚙️</div>
            <div class="settings-section-title">Features</div>
          </div>
          <div class="settings-body">
            <div class="settings-row">
              <div class="settings-row-info">
                <div class="settings-row-label">Portfolio Search</div>
                <div class="settings-row-sub">Allow visitors to search through projects</div>
              </div>
              <label class="toggle">
                <input type="checkbox" checked>
                <span class="toggle-slider"></span>
              </label>
            </div>
            <div class="settings-row">
              <div class="settings-row-info">
                <div class="settings-row-label">Contact Form</div>
                <div class="settings-row-sub">Show contact form on the contact page</div>
              </div>
              <label class="toggle">
                <input type="checkbox" checked>
                <span class="toggle-slider"></span>
              </label>
            </div>
            <div class="settings-row">
              <div class="settings-row-info">
                <div class="settings-row-label">Book a Meeting Button</div>
                <div class="settings-row-sub">Show Calendly/booking CTA on homepage</div>
              </div>
              <label class="toggle">
                <input type="checkbox">
                <span class="toggle-slider"></span>
              </label>
            </div>
            <div class="settings-row">
              <div class="settings-row-info">
                <div class="settings-row-label">Show Testimonials</div>
                <div class="settings-row-sub">Display client reviews on homepage</div>
              </div>
              <label class="toggle">
                <input type="checkbox" checked>
                <span class="toggle-slider"></span>
              </label>
            </div>
            <div class="settings-row">
              <div class="settings-row-info">
                <div class="settings-row-label">Maintenance Mode</div>
                <div class="settings-row-sub">Show maintenance page to visitors</div>
              </div>
              <label class="toggle">
                <input type="checkbox">
                <span class="toggle-slider"></span>
              </label>
            </div>
          </div>
        </div>
      </div>

      <!-- ======================================================
           PAGE: ADD/EDIT PROJECT
           ====================================================== -->
      <div class="page" id="page-add-project">
        <div class="section-header" style="margin-bottom:20px">
          <div class="section-title">Add New Project</div>
          <div style="display:flex;gap:8px">
            <button class="btn btn-secondary">Save as Draft</button>
            <button class="btn btn-primary" onclick="showToast('Project published!', 'success')">Publish Project</button>
          </div>
        </div>

        <div style="display:grid;grid-template-columns:1fr 340px;gap:20px">
          <!-- Main Form -->
          <div style="display:flex;flex-direction:column;gap:20px">
            <div class="card">
              <div class="card-header">
                <div class="section-title" style="font-size:14px">Project Details</div>
              </div>
              <div class="card-body">
                <div class="form-grid">
                  <div class="form-group full">
                    <label class="form-label">Project Title <span class="required">*</span></label>
                    <input type="text" class="form-input" placeholder="e.g. Nexus Brand Identity">
                  </div>
                  <div class="form-group">
                    <label class="form-label">Category <span class="required">*</span></label>
                    <select class="form-select">
                      <option>Select Category</option>
                      <option>Logo Design</option>
                      <option>Branding</option>
                      <option>UI/UX Design</option>
                      <option>Social Media Design</option>
                      <option>Packaging Design</option>
                      <option>Website Design</option>
                      <option>Advertisement Design</option>
                      <option>Print Design</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="form-label">Client Name</label>
                    <input type="text" class="form-input" placeholder="e.g. Nexus Corp (optional)">
                  </div>
                  <div class="form-group">
                    <label class="form-label">Client Industry</label>
                    <input type="text" class="form-input" placeholder="e.g. Technology, Healthcare">
                  </div>
                  <div class="form-group">
                    <label class="form-label">Completion Date</label>
                    <input type="date" class="form-input">
                  </div>
                  <div class="form-group full">
                    <label class="form-label">Project Description <span class="required">*</span></label>
                    <textarea class="form-textarea" placeholder="Describe the project, goals, and outcome..."></textarea>
                  </div>
                  <div class="form-group full">
                    <label class="form-label">Tools / Technologies Used</label>
                    <input type="text" class="form-input" placeholder="e.g. Figma, Illustrator, Photoshop">
                    <div class="form-hint">Separate with commas</div>
                  </div>
                  <div class="form-group full">
                    <label class="form-label">Figma Preview Link</label>
                    <input type="url" class="form-input" placeholder="https://figma.com/file/...">
                  </div>
                </div>
              </div>
            </div>

            <!-- Image Upload -->
            <div class="card">
              <div class="card-header">
                <div class="section-title" style="font-size:14px">Project Images</div>
              </div>
              <div class="card-body">
                <div class="form-group mb-16">
                  <label class="form-label">Thumbnail Image <span class="required">*</span></label>
                  <div class="upload-zone" onclick="showToast('File picker opened', 'info')">
                    <div class="upload-icon">🖼️</div>
                    <div class="upload-title">Click to upload thumbnail</div>
                    <div class="upload-sub">JPG, PNG or WEBP · Max 2MB · 1:1 ratio recommended</div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="form-label">Gallery Images</label>
                  <div class="upload-zone" onclick="showToast('Gallery picker opened', 'info')">
                    <div class="upload-icon">📸</div>
                    <div class="upload-title">Click or drag images here</div>
                    <div class="upload-sub">Upload multiple images · JPG, PNG, WEBP, MP4</div>
                  </div>
                  <div class="image-preview-grid">
                    <div class="preview-img">🎨<div class="preview-remove">✕</div></div>
                    <div class="preview-img">💻<div class="preview-remove">✕</div></div>
                    <div class="preview-img">📱<div class="preview-remove">✕</div></div>
                    <div class="preview-img" style="border:2px dashed var(--border);cursor:pointer;font-size:20px">+</div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Sidebar Options -->
          <div style="display:flex;flex-direction:column;gap:16px">
            <div class="card">
              <div class="card-header">
                <div style="font-size:13px;font-weight:700">Publish Options</div>
              </div>
              <div class="card-body">
                <div class="form-group mb-16">
                  <label class="form-label">Status</label>
                  <select class="form-select">
                    <option>Draft</option>
                    <option>Published</option>
                  </select>
                </div>
                <div style="padding:12px 0;border-top:1px solid var(--border)">
                  <div class="toggle-wrap">
                    <label class="toggle">
                      <input type="checkbox">
                      <span class="toggle-slider"></span>
                    </label>
                    <span class="toggle-label">Mark as Featured</span>
                  </div>
                </div>
                <div style="padding:12px 0;border-top:1px solid var(--border)">
                  <div class="toggle-wrap">
                    <label class="toggle">
                      <input type="checkbox" checked>
                      <span class="toggle-slider"></span>
                    </label>
                    <span class="toggle-label">Show on Homepage</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <div style="font-size:13px;font-weight:700">SEO Meta</div>
              </div>
              <div class="card-body">
                <div class="form-group mb-16">
                  <label class="form-label">Meta Title</label>
                  <input type="text" class="form-input" placeholder="SEO title...">
                </div>
                <div class="form-group">
                  <label class="form-label">Meta Description</label>
                  <textarea class="form-textarea" style="min-height:80px" placeholder="SEO description..."></textarea>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <div style="font-size:13px;font-weight:700">Project Links</div>
              </div>
              <div class="card-body">
                <div class="form-group mb-16">
                  <label class="form-label">Live URL</label>
                  <input type="url" class="form-input" placeholder="https://...">
                </div>
                <div class="form-group">
                  <label class="form-label">GitHub / Source</label>
                  <input type="url" class="form-input" placeholder="https://github.com/...">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div><!-- /page-content -->
  </main>
</div><!-- /app-shell -->

<!-- ============================================================
     TOAST CONTAINER
     ============================================================ -->
<div class="toast-container" id="toastContainer"></div>

<!-- ============================================================
     MODALS
     ============================================================ -->

<!-- Delete Confirm Modal -->
<div class="modal-overlay" id="deleteModal">
  <div class="modal" style="max-width:420px">
    <div class="modal-header">
      <div class="modal-title">⚠️ Confirm Delete</div>
      <button class="modal-close" onclick="closeModal('deleteModal')">×</button>
    </div>
    <div class="modal-body">
      <p style="color:var(--text-2);font-size:14px;line-height:1.7">Are you sure you want to delete this item? This action <strong style="color:var(--danger)">cannot be undone</strong> and all associated data will be permanently removed.</p>
    </div>
    <div class="modal-footer">
      <button class="btn btn-secondary" onclick="closeModal('deleteModal')">Cancel</button>
      <button class="btn btn-danger" onclick="closeModal('deleteModal');showToast('Item deleted','error')">Delete Permanently</button>
    </div>
  </div>
</div>

<!-- Add Category Modal -->
<div class="modal-overlay" id="addCatModal">
  <div class="modal" style="max-width:480px">
    <div class="modal-header">
      <div class="modal-title">Add Category</div>
      <button class="modal-close" onclick="closeModal('addCatModal')">×</button>
    </div>
    <div class="modal-body">
      <div class="form-group mb-16">
        <label class="form-label">Category Name <span class="required">*</span></label>
        <input type="text" class="form-input" placeholder="e.g. Logo Design">
      </div>
      <div class="form-group mb-16">
        <label class="form-label">Icon / Emoji</label>
        <input type="text" class="form-input" placeholder="e.g. 🔵">
      </div>
      <div class="form-group">
        <label class="form-label">Description</label>
        <textarea class="form-textarea" style="min-height:80px" placeholder="Short category description..."></textarea>
      </div>
    </div>
    <div class="modal-footer">
      <button class="btn btn-secondary" onclick="closeModal('addCatModal')">Cancel</button>
      <button class="btn btn-primary" onclick="closeModal('addCatModal');showToast('Category created!','success')">Create Category</button>
    </div>
  </div>
</div>

<!-- Edit Project Modal (quick) -->
<div class="modal-overlay" id="editProjectModal">
  <div class="modal">
    <div class="modal-header">
      <div class="modal-title">Edit Project</div>
      <button class="modal-close" onclick="closeModal('editProjectModal')">×</button>
    </div>
    <div class="modal-body">
      <div class="form-grid">
        <div class="form-group full">
          <label class="form-label">Project Title</label>
          <input type="text" class="form-input" value="Nexus Brand Identity">
        </div>
        <div class="form-group">
          <label class="form-label">Category</label>
          <select class="form-select">
            <option selected>Branding</option>
            <option>Logo Design</option>
            <option>UI/UX Design</option>
          </select>
        </div>
        <div class="form-group">
          <label class="form-label">Status</label>
          <select class="form-select">
            <option selected>Published</option>
            <option>Draft</option>
          </select>
        </div>
        <div class="form-group full">
          <label class="form-label">Description</label>
          <textarea class="form-textarea">Complete brand identity for Nexus Corp including logo, colors, and brand guidelines.</textarea>
        </div>
        <div class="form-group">
          <label class="form-label">Client</label>
          <input type="text" class="form-input" value="Nexus Corp">
        </div>
        <div class="form-group">
          <label class="form-label">Date</label>
          <input type="date" class="form-input" value="2025-06-01">
        </div>
      </div>
    </div>
    <div class="modal-footer">
      <button class="btn btn-secondary" onclick="closeModal('editProjectModal')">Cancel</button>
      <button class="btn btn-primary" onclick="closeModal('editProjectModal');showToast('Project updated!','success')">Save Changes</button>
    </div>
  </div>
</div>

<!-- Add Testimonial Modal -->
<div class="modal-overlay" id="addTestiModal">
  <div class="modal">
    <div class="modal-header">
      <div class="modal-title">Add Testimonial</div>
      <button class="modal-close" onclick="closeModal('addTestiModal')">×</button>
    </div>
    <div class="modal-body">
      <div class="form-grid">
        <div class="form-group">
          <label class="form-label">Client Name <span class="required">*</span></label>
          <input type="text" class="form-input" placeholder="e.g. Sara Ahmed">
        </div>
        <div class="form-group">
          <label class="form-label">Company</label>
          <input type="text" class="form-input" placeholder="e.g. CEO, Nexus Corp">
        </div>
        <div class="form-group">
          <label class="form-label">Rating</label>
          <select class="form-select">
            <option>⭐⭐⭐⭐⭐ — 5 Stars</option>
            <option>⭐⭐⭐⭐ — 4 Stars</option>
            <option>⭐⭐⭐ — 3 Stars</option>
          </select>
        </div>
        <div class="form-group">
          <label class="form-label">Avatar Initial</label>
          <input type="text" class="form-input" placeholder="e.g. S" maxlength="1">
        </div>
        <div class="form-group full">
          <label class="form-label">Testimonial Text <span class="required">*</span></label>
          <textarea class="form-textarea" placeholder="Write the client's review..."></textarea>
        </div>
      </div>
    </div>
    <div class="modal-footer">
      <button class="btn btn-secondary" onclick="closeModal('addTestiModal')">Cancel</button>
      <button class="btn btn-primary" onclick="closeModal('addTestiModal');showToast('Testimonial added!','success')">Add Testimonial</button>
    </div>
  </div>
</div>

<!-- Reply Inquiry Modal -->
<div class="modal-overlay" id="replyModal">
  <div class="modal">
    <div class="modal-header">
      <div class="modal-title">📩 Inquiry Details</div>
      <button class="modal-close" onclick="closeModal('replyModal')">×</button>
    </div>
    <div class="modal-body">
      <div style="background:var(--bg3);border-radius:var(--radius-sm);padding:16px;margin-bottom:18px;border:1px solid var(--border)">
        <div style="display:flex;gap:10px;margin-bottom:10px">
          <div class="inquiry-avatar">A</div>
          <div>
            <div style="font-weight:600;font-size:14px">Ahmed Khan</div>
            <div style="font-size:12px;color:var(--text-3)">ahmed.khan@email.com &middot; +92 300 1234567</div>
            <div style="font-size:11px;color:var(--text-3);margin-top:2px">Received: 2 minutes ago</div>
          </div>
        </div>
        <p style="font-size:13px;color:var(--text-2);line-height:1.7">Hi, I need a complete brand identity package for my startup. Can you share your pricing and availability for next month?</p>
      </div>
      <div class="form-group mb-16">
        <label class="form-label">Reply Message</label>
        <textarea class="form-textarea" placeholder="Type your reply here..."></textarea>
      </div>
      <div style="display:flex;gap:12px">
        <button class="btn btn-secondary" style="flex:1" onclick="closeModal('replyModal');showToast('Marked as read','info')">Mark as Read</button>
        <a href="https://wa.me/923001234567" class="btn btn-primary" style="flex:1;justify-content:center;background:#25D366;border-color:#25D366;color:#fff">💬 Reply on WhatsApp</a>
      </div>
    </div>
    <div class="modal-footer">
      <button class="btn btn-secondary" onclick="closeModal('replyModal')">Close</button>
      <button class="btn btn-primary" onclick="closeModal('replyModal');showToast('Reply sent via email!','success')">Send Email Reply</button>
    </div>
  </div>
</div>

<!-- ============================================================
     JAVASCRIPT
     ============================================================ -->
<script>
// ========== LOGIN ===========
function doLogin() {
  document.getElementById('loginPage').classList.remove('show');
  showToast('Welcome back, Admin! 👋', 'success');
}
function doLogout() {
  document.getElementById('loginPage').classList.add('show');
}

// ========== PAGE NAVIGATION ===========
const pageTitles = {
  'dashboard': ['Dashboard', 'Overview'],
  'projects': ['Projects', 'Manage Projects'],
  'categories': ['Categories', 'Manage Categories'],
  'testimonials': ['Testimonials', 'Client Reviews'],
  'inquiries': ['Contact Inquiries', 'Messages'],
  'settings': ['Website Settings', 'Configuration'],
  'add-project': ['Add New Project', 'Create'],
};

function showPage(id, navEl) {
  // Hide all pages
  document.querySelectorAll('.page').forEach(p => p.classList.remove('active'));
  document.getElementById('page-' + id).classList.add('active');

  // Update nav
  if (navEl) {
    document.querySelectorAll('.nav-item').forEach(n => n.classList.remove('active'));
    navEl.classList.add('active');
  }

  // Update topbar title
  const titles = pageTitles[id] || [id, ''];
  document.getElementById('topbarTitle').innerHTML =
    titles[0] + ' <span class="breadcrumb">/ <span>' + titles[1] + '</span></span>';

  // Close sidebar on mobile
  closeSidebar();
}

// ========== SIDEBAR (mobile) ===========
function toggleSidebar() {
  const sidebar = document.getElementById('sidebar');
  const overlay = document.getElementById('sidebarOverlay');
  sidebar.classList.toggle('open');
  overlay.classList.toggle('show');
}
function closeSidebar() {
  document.getElementById('sidebar').classList.remove('open');
  document.getElementById('sidebarOverlay').classList.remove('show');
}

// ========== THEME ===========
const themeBtn = document.querySelector('.theme-toggle');
function toggleTheme() {
  const html = document.documentElement;
  if (html.dataset.theme === 'dark') {
    html.dataset.theme = 'light';
    themeBtn.textContent = '🌙';
  } else {
    html.dataset.theme = 'dark';
    themeBtn.textContent = '☀️';
  }
}

// ========== NOTIFICATIONS ===========
function toggleNotif() {
  const panel = document.getElementById('notifPanel');
  panel.classList.toggle('open');
}
document.addEventListener('click', function(e) {
  const panel = document.getElementById('notifPanel');
  if (!e.target.closest('.notif-panel-pos')) panel.classList.remove('open');
});

// ========== MODALS ===========
function openModal(id) {
  document.getElementById(id).classList.add('open');
}
function closeModal(id) {
  document.getElementById(id).classList.remove('open');
}
// Close on overlay click
document.querySelectorAll('.modal-overlay').forEach(overlay => {
  overlay.addEventListener('click', function(e) {
    if (e.target === this) this.classList.remove('open');
  });
});

// ========== SETTINGS TABS ===========
function switchSettingsTab(el) {
  document.querySelectorAll('.settings-tab').forEach(t => t.classList.remove('active'));
  el.classList.add('active');
}

// ========== TOAST ===========
function showToast(msg, type = 'info') {
  const container = document.getElementById('toastContainer');
  const icons = { success: '✅', error: '❌', info: '💡' };
  const toast = document.createElement('div');
  toast.className = `toast ${type}`;
  toast.innerHTML = `<span class="toast-icon">${icons[type]}</span><span class="toast-msg">${msg}</span>`;
  container.appendChild(toast);
  setTimeout(() => {
    toast.style.opacity = '0';
    toast.style.transform = 'translateX(30px)';
    toast.style.transition = 'all 0.3s ease';
    setTimeout(() => toast.remove(), 300);
  }, 3000);
}

// ========== UPLOAD ZONE DRAG ===========
document.querySelectorAll('.upload-zone').forEach(zone => {
  zone.addEventListener('dragover', e => { e.preventDefault(); zone.classList.add('drag-over'); });
  zone.addEventListener('dragleave', () => zone.classList.remove('drag-over'));
  zone.addEventListener('drop', e => { e.preventDefault(); zone.classList.remove('drag-over'); showToast('File uploaded!', 'success'); });
});

// ========== COLOR OPTION SELECT ===========
document.querySelectorAll('.color-option').forEach(opt => {
  opt.addEventListener('click', function() {
    document.querySelectorAll('.color-option').forEach(o => o.classList.remove('selected'));
    this.classList.add('selected');
    showToast('Accent color updated', 'info');
  });
});

// ========== ESCAPE KEY ===========
document.addEventListener('keydown', function(e) {
  if (e.key === 'Escape') {
    document.querySelectorAll('.modal-overlay.open').forEach(m => m.classList.remove('open'));
    document.getElementById('notifPanel').classList.remove('open');
    closeSidebar();
  }
});

// ========== INIT ===========
// Animate stat bars on load
setTimeout(() => {
  document.querySelectorAll('.chart-bar').forEach(bar => {
    const h = bar.style.height;
    bar.style.height = '0%';
    setTimeout(() => bar.style.height = h, 100);
  });
}, 300);
</script>
</body>
</html>
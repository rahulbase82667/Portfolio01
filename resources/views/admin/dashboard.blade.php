<!DOCTYPE html>
<html lang="en" data-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baseline IT — Admin Panel</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&family=DM+Sans:wght@300;400;500;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">

</head>

<body>

    

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
                    <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2">
                        <rect x="3" y="3" width="7" height="7" rx="1" />
                        <rect x="14" y="3" width="7" height="7" rx="1" />
                        <rect x="3" y="14" width="7" height="7" rx="1" />
                        <rect x="14" y="14" width="7" height="7" rx="1" />
                    </svg>
                    Dashboard
                </div>

                <div class="nav-section-label">Portfolio</div>

                <div class="nav-item" onclick="showPage('projects', this)">
                    <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2">
                        <rect x="2" y="3" width="20" height="14" rx="2" />
                        <path d="M8 21h8M12 17v4" />
                    </svg>
                    Projects
                    <span class="nav-badge accent">24</span>
                </div>

                <div class="nav-item" onclick="showPage('categories', this)">
                    <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2">
                        <path d="M3 6h18M3 12h18M3 18h18" />
                        <circle cx="7" cy="6" r="1" fill="currentColor" />
                        <circle cx="7" cy="12" r="1" fill="currentColor" />
                        <circle cx="7" cy="18" r="1" fill="currentColor" />
                    </svg>
                    Categories
                </div>

                <div class="nav-section-label">Content</div>

                <div class="nav-item" onclick="showPage('testimonials', this)">
                    <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2">
                        <path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z" />
                    </svg>
                    Testimonials
                </div>

                <div class="nav-item" onclick="showPage('inquiries', this)">
                    <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                        <polyline points="22,6 12,13 2,6" />
                    </svg>
                    Contact Inquiries
                    <span class="nav-badge">5</span>
                </div>

                <div class="nav-section-label">System</div>

                <div class="nav-item" onclick="showPage('settings', this)">
                    <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="3" />
                        <path
                            d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 010 2.83 2 2 0 01-2.83 0l-.06-.06A1.65 1.65 0 0015 19.4a1.65 1.65 0 00-1.65 1.5V21a2 2 0 01-4 0v-.09A1.65 1.65 0 008 19.4a1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 01-2.83-2.83l.06-.06A1.65 1.65 0 004.6 15a1.65 1.65 0 00-1.5-1.65H3a2 2 0 010-4h.09A1.65 1.65 0 004.6 9a1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 012.83-2.83l.06.06A1.65 1.65 0 009 4.6a1.65 1.65 0 001.65-1.5V3a2 2 0 014 0v.09A1.65 1.65 0 0016 4.6a1.65 1.65 0 001.82-.33l.06-.06a2 2 0 012.83 2.83l-.06.06A1.65 1.65 0 0019.4 9a1.65 1.65 0 001.5 1.65H21a2 2 0 010 4h-.09a1.65 1.65 0 00-1.51 1z" />
                    </svg>
                    Website Settings
                </div>

                <div class="nav-item" onclick="showPage('add-project', this)">
                    <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10" />
                        <line x1="12" y1="8" x2="12" y2="16" />
                        <line x1="8" y1="12" x2="16" y2="12" />
                    </svg>
                    Add New Project
                </div>
            </nav>

            <div class="sidebar-footer">
                <div class="user-card">
                    <div class="user-avatar">{{ substr(auth()->user()->name, 0, 1) }}</div>
                    <div class="user-info">
                        <div class="user-name">{{ auth()->user()->name }}</div>
                        <div class="user-role">Super Administrator</div>
                    </div>
                    <form method="POST" action="{{ route('admin.logout') }}" style="display:contents">
                        @csrf
                        <button type="submit" title="Logout"
                            style="background:none;border:none;padding:0;margin:0;color:var(--text-3);cursor:pointer;width:16px;height:16px;flex-shrink:0;display:flex">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M9 21H5a2 2 0 01-2-2V5a2 2 0 012-2h4M16 17l5-5-5-5M21 12H9" />
                            </svg>
                        </button>
                    </form>
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
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <path d="M18 8A6 6 0 006 8c0 7-3 9-3 9h18s-3-2-3-9M13.73 21a2 2 0 01-3.46 0" />
                            </svg>
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
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.5">
                            <line x1="12" y1="5" x2="12" y2="19" />
                            <line x1="5" y1="12" x2="19" y2="12" />
                        </svg>
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
                                <div class="legend-item">
                                    <div class="legend-dot" style="background:var(--accent)"></div> Projects Published
                                </div>
                                <div class="legend-item">
                                    <div class="legend-dot" style="background:var(--info)"></div> Inquiries
                                </div>
                            </div>

                            <!-- Category breakdown -->
                            <div style="margin-top:24px">
                                <div class="fw-600" style="font-size:13px;margin-bottom:14px;color:var(--text-2)">
                                    Category Breakdown</div>
                                <div style="display:flex;flex-direction:column;gap:12px">
                                    <div>
                                        <div
                                            style="display:flex;justify-content:space-between;font-size:12px;margin-bottom:4px">
                                            <span>Logo Design</span><span class="text-accent fw-600">8 projects</span>
                                        </div>
                                        <div class="progress-bar">
                                            <div class="progress-fill accent" style="width:75%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div
                                            style="display:flex;justify-content:space-between;font-size:12px;margin-bottom:4px">
                                            <span>UI/UX Design</span><span style="color:var(--info)" class="fw-600">6
                                                projects</span>
                                        </div>
                                        <div class="progress-bar">
                                            <div class="progress-fill blue" style="width:55%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div
                                            style="display:flex;justify-content:space-between;font-size:12px;margin-bottom:4px">
                                            <span>Social Media</span><span style="color:var(--warning)" class="fw-600">5
                                                projects</span>
                                        </div>
                                        <div class="progress-bar">
                                            <div class="progress-fill orange" style="width:40%"></div>
                                        </div>
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
                                    <div class="activity-text">Project <strong>Nexus Brand Identity</strong> published
                                    </div>
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
                        <button class="btn btn-secondary btn-sm" onclick="showPage('projects', null)">View All
                            →</button>
                    </div>
                    <div class="projects-mini">
                        <div class="project-mini-card">
                            <div class="project-mini-thumb" style="background:linear-gradient(135deg,#1a1a2e,#16213e)">
                                🎨</div>
                            <div class="project-mini-info">
                                <div class="project-mini-cat">Branding</div>
                                <div class="project-mini-title">Nexus Brand Identity</div>
                                <div class="project-mini-date">Jun 2025 &middot; <span
                                        class="text-accent">Featured</span></div>
                            </div>
                        </div>
                        <div class="project-mini-card">
                            <div class="project-mini-thumb" style="background:linear-gradient(135deg,#0f3460,#533483)">
                                💻</div>
                            <div class="project-mini-info">
                                <div class="project-mini-cat">UI/UX Design</div>
                                <div class="project-mini-title">TechFlow Dashboard</div>
                                <div class="project-mini-date">May 2025</div>
                            </div>
                        </div>
                        <div class="project-mini-card">
                            <div class="project-mini-thumb" style="background:linear-gradient(135deg,#1b4332,#2d6a4f)">
                                📦</div>
                            <div class="project-mini-info">
                                <div class="project-mini-cat">Packaging</div>
                                <div class="project-mini-title">Organic Bloom Box</div>
                                <div class="project-mini-date">Apr 2025 &middot; <span
                                        class="text-accent">Featured</span></div>
                            </div>
                        </div>
                        <div class="project-mini-card">
                            <div class="project-mini-thumb" style="background:linear-gradient(135deg,#3d0c02,#8b1a1a)">
                                📱</div>
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
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5">
                                <line x1="12" y1="5" x2="12" y2="19" />
                                <line x1="5" y1="12" x2="19" y2="12" />
                            </svg>
                            Add Project
                        </button>
                    </div>

                    <div class="table-wrapper">
                        <div class="table-controls">
                            <div class="search-input-wrap">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2">
                                    <circle cx="11" cy="11" r="8" />
                                    <path d="m21 21-4.35-4.35" />
                                </svg>
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
                                        <td><span class="badge badge-published">
                                                <div class="dot dot-green"></div> Published
                                            </span></td>
                                        <td><span class="badge badge-featured">⭐ Yes</span></td>
                                        <td style="color:var(--text-2);font-size:12px">Nexus Corp</td>
                                        <td style="color:var(--text-3);font-size:12px">Jun 2025</td>
                                        <td>
                                            <div class="table-actions" style="justify-content:flex-end">
                                                <button class="tbl-btn" title="View">👁</button>
                                                <button class="tbl-btn" title="Edit"
                                                    onclick="openModal('editProjectModal')">✏️</button>
                                                <button class="tbl-btn danger" title="Delete"
                                                    onclick="openModal('deleteModal')">🗑</button>
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
                                        <td><span class="badge badge-published">
                                                <div class="dot dot-green"></div> Published
                                            </span></td>
                                        <td><span style="color:var(--text-3);font-size:12px">—</span></td>
                                        <td style="color:var(--text-2);font-size:12px">TechFlow Ltd</td>
                                        <td style="color:var(--text-3);font-size:12px">May 2025</td>
                                        <td>
                                            <div class="table-actions" style="justify-content:flex-end">
                                                <button class="tbl-btn" title="View">👁</button>
                                                <button class="tbl-btn" title="Edit"
                                                    onclick="openModal('editProjectModal')">✏️</button>
                                                <button class="tbl-btn danger" title="Delete"
                                                    onclick="openModal('deleteModal')">🗑</button>
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
                                        <td><span class="badge badge-published">
                                                <div class="dot dot-green"></div> Published
                                            </span></td>
                                        <td><span class="badge badge-featured">⭐ Yes</span></td>
                                        <td style="color:var(--text-2);font-size:12px">Bloom Organics</td>
                                        <td style="color:var(--text-3);font-size:12px">Apr 2025</td>
                                        <td>
                                            <div class="table-actions" style="justify-content:flex-end">
                                                <button class="tbl-btn" title="View">👁</button>
                                                <button class="tbl-btn" title="Edit"
                                                    onclick="openModal('editProjectModal')">✏️</button>
                                                <button class="tbl-btn danger" title="Delete"
                                                    onclick="openModal('deleteModal')">🗑</button>
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
                                        <td><span class="badge badge-draft">
                                                <div class="dot dot-orange"></div> Draft
                                            </span></td>
                                        <td><span style="color:var(--text-3);font-size:12px">—</span></td>
                                        <td style="color:var(--text-2);font-size:12px">Spark Agency</td>
                                        <td style="color:var(--text-3);font-size:12px">Mar 2025</td>
                                        <td>
                                            <div class="table-actions" style="justify-content:flex-end">
                                                <button class="tbl-btn" title="View">👁</button>
                                                <button class="tbl-btn" title="Edit"
                                                    onclick="openModal('editProjectModal')">✏️</button>
                                                <button class="tbl-btn danger" title="Delete"
                                                    onclick="openModal('deleteModal')">🗑</button>
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
                                        <td><span class="badge badge-published">
                                                <div class="dot dot-green"></div> Published
                                            </span></td>
                                        <td><span style="color:var(--text-3);font-size:12px">—</span></td>
                                        <td style="color:var(--text-2);font-size:12px">PureEdge Inc</td>
                                        <td style="color:var(--text-3);font-size:12px">Feb 2025</td>
                                        <td>
                                            <div class="table-actions" style="justify-content:flex-end">
                                                <button class="tbl-btn" title="View">👁</button>
                                                <button class="tbl-btn" title="Edit"
                                                    onclick="openModal('editProjectModal')">✏️</button>
                                                <button class="tbl-btn danger" title="Delete"
                                                    onclick="openModal('deleteModal')">🗑</button>
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
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5">
                                <line x1="12" y1="5" x2="12" y2="19" />
                                <line x1="5" y1="12" x2="19" y2="12" />
                            </svg>
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
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2">
                                    <circle cx="11" cy="11" r="8" />
                                    <path d="m21 21-4.35-4.35" />
                                </svg>
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
                                    <td style="font-family:monospace;font-size:12px;color:var(--text-3)">logo-design
                                    </td>
                                    <td><span class="badge badge-logo">8 projects</span></td>
                                    <td style="color:var(--text-3);font-size:12px">Jan 2025</td>
                                    <td>
                                        <div class="table-actions" style="justify-content:flex-end">
                                            <button class="tbl-btn" onclick="openModal('addCatModal')">✏️</button>
                                            <button class="tbl-btn danger"
                                                onclick="openModal('deleteModal')">🗑</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="color:var(--text-3)">02</td>
                                    <td><span>💻</span> <strong>UI/UX Design</strong></td>
                                    <td style="font-family:monospace;font-size:12px;color:var(--text-3)">ui-ux-design
                                    </td>
                                    <td><span class="badge badge-ui">6 projects</span></td>
                                    <td style="color:var(--text-3);font-size:12px">Jan 2025</td>
                                    <td>
                                        <div class="table-actions" style="justify-content:flex-end">
                                            <button class="tbl-btn" onclick="openModal('addCatModal')">✏️</button>
                                            <button class="tbl-btn danger"
                                                onclick="openModal('deleteModal')">🗑</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="color:var(--text-3)">03</td>
                                    <td><span>📱</span> <strong>Social Media Design</strong></td>
                                    <td style="font-family:monospace;font-size:12px;color:var(--text-3)">
                                        social-media-design</td>
                                    <td><span class="badge badge-social">5 projects</span></td>
                                    <td style="color:var(--text-3);font-size:12px">Feb 2025</td>
                                    <td>
                                        <div class="table-actions" style="justify-content:flex-end">
                                            <button class="tbl-btn" onclick="openModal('addCatModal')">✏️</button>
                                            <button class="tbl-btn danger"
                                                onclick="openModal('deleteModal')">🗑</button>
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
                                            <button class="tbl-btn danger"
                                                onclick="openModal('deleteModal')">🗑</button>
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
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5">
                                <line x1="12" y1="5" x2="12" y2="19" />
                                <line x1="5" y1="12" x2="19" y2="12" />
                            </svg>
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
                            <div class="testimonial-text">Baseline IT delivered exactly what we envisioned. The brand
                                identity exceeded our expectations — clean, modern, and truly represents our company.
                            </div>
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
                            <div class="testimonial-text">Exceptional UI/UX work. Our app conversion rate improved by
                                40% after the redesign. The team understands both aesthetics and user psychology.</div>
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
                            <div class="testimonial-text">Our packaging now stands out on shelves. The creativity and
                                attention to detail is impressive. Would definitely recommend to any brand.</div>
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
                            <div class="testimonial-text">Fast turnaround, professional team, and stunning visuals. Our
                                social media engagement tripled after the new creative kit was deployed.</div>
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
                            <div class="inquiry-msg">Hi, I need a complete brand identity package for my startup. Can
                                you share your pricing and availability for next month?</div>
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
                            <div class="inquiry-msg">We're looking for social media creatives for our Ramadan campaign.
                                Timeline is tight — 2 weeks. Please get back ASAP.</div>
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
                            <div class="inquiry-msg">I saw your portfolio on LinkedIn. Loved the UI/UX work. Would love
                                to discuss a potential long-term collaboration.</div>
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
                            <div class="inquiry-msg">Following up on our packaging design discussion. Could you send the
                                final invoice when ready? Great work by the way!</div>
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
                            <div class="inquiry-msg">Hello, we need flyer and banner designs for our seasonal sale.
                                Around 10 designs needed. What's your rate per design?</div>
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
                        <button class="btn btn-primary" onclick="showToast('Settings saved!', 'success')">Save
                            Changes</button>
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
                                    <textarea
                                        class="form-textarea">We are a professional graphic design and web development agency specializing in brand identity, UI/UX design, and digital solutions.</textarea>
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
                            <button class="btn btn-primary" onclick="showToast('Project published!', 'success')">Publish
                                Project</button>
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
                                            <label class="form-label">Project Title <span
                                                    class="required">*</span></label>
                                            <input type="text" class="form-input"
                                                placeholder="e.g. Nexus Brand Identity">
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
                                            <input type="text" class="form-input"
                                                placeholder="e.g. Nexus Corp (optional)">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Client Industry</label>
                                            <input type="text" class="form-input"
                                                placeholder="e.g. Technology, Healthcare">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Completion Date</label>
                                            <input type="date" class="form-input">
                                        </div>
                                        <div class="form-group full">
                                            <label class="form-label">Project Description <span
                                                    class="required">*</span></label>
                                            <textarea class="form-textarea"
                                                placeholder="Describe the project, goals, and outcome..."></textarea>
                                        </div>
                                        <div class="form-group full">
                                            <label class="form-label">Tools / Technologies Used</label>
                                            <input type="text" class="form-input"
                                                placeholder="e.g. Figma, Illustrator, Photoshop">
                                            <div class="form-hint">Separate with commas</div>
                                        </div>
                                        <div class="form-group full">
                                            <label class="form-label">Figma Preview Link</label>
                                            <input type="url" class="form-input"
                                                placeholder="https://figma.com/file/...">
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
                                        <label class="form-label">Thumbnail Image <span
                                                class="required">*</span></label>
                                        <div class="upload-zone" onclick="showToast('File picker opened', 'info')">
                                            <div class="upload-icon">🖼️</div>
                                            <div class="upload-title">Click to upload thumbnail</div>
                                            <div class="upload-sub">JPG, PNG or WEBP · Max 2MB · 1:1 ratio recommended
                                            </div>
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
                                            <div class="preview-img">🎨<div class="preview-remove">✕</div>
                                            </div>
                                            <div class="preview-img">💻<div class="preview-remove">✕</div>
                                            </div>
                                            <div class="preview-img">📱<div class="preview-remove">✕</div>
                                            </div>
                                            <div class="preview-img"
                                                style="border:2px dashed var(--border);cursor:pointer;font-size:20px">+
                                            </div>
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
                                        <textarea class="form-textarea" style="min-height:80px"
                                            placeholder="SEO description..."></textarea>
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
                <p style="color:var(--text-2);font-size:14px;line-height:1.7">Are you sure you want to delete this item?
                    This action <strong style="color:var(--danger)">cannot be undone</strong> and all associated data
                    will be permanently removed.</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" onclick="closeModal('deleteModal')">Cancel</button>
                <button class="btn btn-danger"
                    onclick="closeModal('deleteModal');showToast('Item deleted','error')">Delete Permanently</button>
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
                    <textarea class="form-textarea" style="min-height:80px"
                        placeholder="Short category description..."></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" onclick="closeModal('addCatModal')">Cancel</button>
                <button class="btn btn-primary"
                    onclick="closeModal('addCatModal');showToast('Category created!','success')">Create
                    Category</button>
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
                        <textarea
                            class="form-textarea">Complete brand identity for Nexus Corp including logo, colors, and brand guidelines.</textarea>
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
                <button class="btn btn-primary"
                    onclick="closeModal('editProjectModal');showToast('Project updated!','success')">Save
                    Changes</button>
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
                <button class="btn btn-primary"
                    onclick="closeModal('addTestiModal');showToast('Testimonial added!','success')">Add
                    Testimonial</button>
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
                <div
                    style="background:var(--bg3);border-radius:var(--radius-sm);padding:16px;margin-bottom:18px;border:1px solid var(--border)">
                    <div style="display:flex;gap:10px;margin-bottom:10px">
                        <div class="inquiry-avatar">A</div>
                        <div>
                            <div style="font-weight:600;font-size:14px">Ahmed Khan</div>
                            <div style="font-size:12px;color:var(--text-3)">ahmed.khan@email.com &middot; +92 300
                                1234567</div>
                            <div style="font-size:11px;color:var(--text-3);margin-top:2px">Received: 2 minutes ago</div>
                        </div>
                    </div>
                    <p style="font-size:13px;color:var(--text-2);line-height:1.7">Hi, I need a complete brand identity
                        package for my startup. Can you share your pricing and availability for next month?</p>
                </div>
                <div class="form-group mb-16">
                    <label class="form-label">Reply Message</label>
                    <textarea class="form-textarea" placeholder="Type your reply here..."></textarea>
                </div>
                <div style="display:flex;gap:12px">
                    <button class="btn btn-secondary" style="flex:1"
                        onclick="closeModal('replyModal');showToast('Marked as read','info')">Mark as Read</button>
                    <a href="https://wa.me/923001234567" class="btn btn-primary"
                        style="flex:1;justify-content:center;background:#25D366;border-color:#25D366;color:#fff">💬
                        Reply on WhatsApp</a>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" onclick="closeModal('replyModal')">Close</button>
                <button class="btn btn-primary"
                    onclick="closeModal('replyModal');showToast('Reply sent via email!','success')">Send Email
                    Reply</button>
            </div>
        </div>
    </div>

    <!-- ============================================================
     JAVASCRIPT
     ============================================================ -->
<script src="{{ asset('assets/js/admin.js') }}"></script>
</body>

</html>
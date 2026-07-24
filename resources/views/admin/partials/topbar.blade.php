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

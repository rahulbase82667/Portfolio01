        <aside class="sidebar" id="sidebar">
            <div class="sidebar-logo">
                <div class="logo-mark">B</div>
                <div class="logo-text">
                    Baseline IT
                    <span>Development Studio...</span>
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
                    <span class="nav-badge">{{ $unreadCount }}</span>
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
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2">
                                <path d="M9 21H5a2 2 0 01-2-2V5a2 2 0 012-2h4M16 17l5-5-5-5M21 12H9" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </aside>

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
                            <div class="stat-value">{{ $unreadCount }}</div>
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

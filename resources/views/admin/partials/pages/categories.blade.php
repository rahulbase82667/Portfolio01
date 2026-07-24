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

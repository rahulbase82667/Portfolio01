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

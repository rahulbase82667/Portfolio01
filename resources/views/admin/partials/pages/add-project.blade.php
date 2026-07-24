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

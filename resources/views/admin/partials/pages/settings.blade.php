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

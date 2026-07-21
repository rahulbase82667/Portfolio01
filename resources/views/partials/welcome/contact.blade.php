{{-- CONTACT --}}
<section id="contact" class="contact-section">
    <div class="container">
        <div class="contact-inner">
            <div>
                <div class="section-eyebrow reveal">Geeet in Touch</div>
                <h2 class="section-title-lg reveal">Let's Discuss Your<br>Next Project</h2>
                <p class="section-sub reveal">Ready to take your brand to the next level? Tell us about your project
                    and we'll get back to you with a detailed proposal.</p>
                <div class="contact-info-list">
                    <div class="contact-info-item reveal">
                        <div class="contact-info-icon">📧</div>
                        <div>
                            <div class="contact-info-label">Email Us</div>
                            <div class="contact-info-val">info@baselineit.dev</div>
                        </div>
                    </div>
                    <div class="contact-info-item reveal reveal-delay-1">
                        <div class="contact-info-icon">📱</div>
                        <div>
                            <div class="contact-info-label">WhatsApp</div>
                            <div class="contact-info-val">+91 98765 43210</div>
                        </div>
                    </div>
                    <div class="contact-info-item reveal reveal-delay-2">
                        <div class="contact-info-icon">📍</div>
                        <div>
                            <div class="contact-info-label">Location</div>
                            <div class="contact-info-val">Mohali, Punjab</div>
                        </div>
                    </div>
                    <div class="contact-info-item reveal reveal-delay-3">
                        <div class="contact-info-icon">⏰</div>
                        <div>
                            <div class="contact-info-label">Response Time</div>
                            <div class="contact-info-val">Within 2 hours</div>
                        </div>
                    </div>
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
                        <div
                            style="font-family:var(--font-display);font-size:22px;font-weight:600;letter-spacing:-0.02em;margin-bottom:6px">
                            Send us a Message</div>
                        <div style="font-family:var(--font-body);font-size:13px;color:var(--text-2)">Fill out the
                            form and we'll get back to you within 2 hours.</div>
                    </div>

                    @if (session('success'))
                    <div
                        style="background:rgba(46,213,115,0.12);color:#2ED573;padding:10px 14px;border-radius:8px;font-size:13px;margin-bottom:16px">
                        {{ session('success') }}
                    </div>
                    @endif

                    <form method="POST" action="{{ route('contact.store') }}">
                        @csrf

                        <div class="form-row">
                            <div class="form-group" style="margin-bottom:0">
                                <label class="form-label">Full Name <span style="color:#FF4757">*</span></label>
                                <input type="text" name="full_name" class="form-input" placeholder="Hem Mishra"
                                    value="{{ old('full_name') }}">
                                @error('full_name') <div style="color:#FF4757;font-size:11px;margin-top:4px">
                                    {{ $message }}</div> @enderror
                            </div>
                            <div class="form-group" style="margin-bottom:0">
                                <label class="form-label">Email Address <span style="color:#FF4757">*</span></label>
                                <input type="email" name="email" class="form-input" placeholder="Hem@email.com"
                                    value="{{ old('email') }}">
                                @error('email') <div style="color:#FF4757;font-size:11px;margin-top:4px">
                                    {{ $message }}</div> @enderror
                            </div>
                        </div>

                        <div class="form-row" style="margin-top:16px">
                            <div class="form-group" style="margin-bottom:0">
                                <label class="form-label">Phone / WhatsApp</label>
                                <input type="text" name="phone" class="form-input" placeholder="+91 ..."
                                    value="{{ old('phone') }}">
                            </div>
                            <div class="form-group" style="margin-bottom:0">
                                <label class="form-label">Service Needed</label>
                                <select name="service_needed" class="form-input form-select-field">
                                    <option value="">Select a service...</option>
                                    <option>Logo Design</option>
                                    <option>Brand Identity</option>
                                    <option>UI/UX Design</option>
                                    <option>Social Media Design</option>
                                    <option>Website Design</option>
                                    <option>Web Development</option>
                                    <option>Packaging Design</option>
                                    <option>Other</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group" style="margin-top:16px">
                            <label class="form-label">Project Budget</label>
                            <select name="budget_range" class="form-input form-select-field">
                                <option value="">Select budget range...</option>
                                <option>Under $200</option>
                                <option>$200 – $500</option>
                                <option>$500 – $1,000</option>
                                <option>$1,000 – $5,000</option>
                                <option>$5,000+</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Project Details <span style="color:#FF4757">*</span></label>
                            <textarea name="project_details" class="form-textarea"
                                placeholder="Tell us about your project, goals, timeline, and any references you have in mind...">{{ old('project_details') }}</textarea>
                            @error('project_details') <div style="color:#FF4757;font-size:11px;margin-top:4px">
                                {{ $message }}</div> @enderror
                        </div>

                        <button type="submit" class="form-submit">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5">
                                <line x1="22" y1="2" x2="11" y2="13" />
                                <polygon points="22 2 15 22 11 13 2 9 22 2" />
                            </svg>
                            Send Message
                        </button>

                        <div
                            style="margin-top:16px;text-align:center;font-family:var(--font-ui);font-size:11px;color:var(--text-3);letter-spacing:0.02em">
                            Or reach us on <a href="https://wa.me/919876543210" target="_blank"
                                style="color:#25D366;font-weight:600;">WhatsApp</a> · We reply within 2 hours
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>

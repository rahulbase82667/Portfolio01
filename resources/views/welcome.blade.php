<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baseline IT Development — Crafting Digital Excellence</title>
    <meta name="description"
        content="Professional graphic design and web development agency. We craft brand identities, UI/UX, social media, and digital solutions that convert.">

    <!-- ============================================================
     LUXURY TYPOGRAPHY STACK
     ── Cormorant Garamond  →  Display / Headlines  (high-contrast editorial serif)
     ── Inter               →  Body / UI copy       (refined grotesque, industry gold standard)
     ── Space Grotesk       →  Labels / Nav / Badges (geometric, distinctive, modern)
     ============================================================ -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600&family=Inter:wght@300;400;500;600;700&family=Space+Grotesk:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/welcome.css') }}">

</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar" id="navbar">
        <div class="container">
            <div class="navbar-inner">
                <a href="#" class="nav-logo">
                    <div class="nav-logo-mark">B</div>
                    <div class="nav-logo-text">
                        Baseline IT
                        <span>Development Studio</span>
                    </div>
                </a>
                <div class="nav-links" id="navLinks">
                    <a class="nav-link active" onclick="scrollToSection('home')">Home</a>
                    <a class="nav-link" onclick="scrollToSection('services')">Services</a>
                    <a class="nav-link" onclick="scrollToSection('portfolio')">Portfolio</a>
                    <a class="nav-link" onclick="scrollToSection('about')">About</a>
                    <a class="nav-link" onclick="scrollToSection('testimonials')">Reviews</a>
                    <a class="nav-link" onclick="scrollToSection('contact')">Contact</a>
                </div>
                <div class="nav-actions">
                    <button class="nav-theme-btn" id="themeBtn" onclick="toggleTheme()" title="Toggle theme">🌙</button>
                    <button class="btn btn-primary nav-cta" onclick="scrollToSection('contact')">Get a Quote</button>
                    <button class="nav-hamburger" id="hamburger" onclick="toggleMobileMenu()">
                        <span></span><span></span><span></span>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Mobile Menu -->
    <div class="mobile-menu" id="mobileMenu">
        <a class="nav-link" onclick="scrollToSection('home');toggleMobileMenu()">Home</a>
        <a class="nav-link" onclick="scrollToSection('services');toggleMobileMenu()">Services</a>
        <a class="nav-link" onclick="scrollToSection('portfolio');toggleMobileMenu()">Portfolio</a>
        <a class="nav-link" onclick="scrollToSection('about');toggleMobileMenu()">About</a>
        <a class="nav-link" onclick="scrollToSection('testimonials');toggleMobileMenu()">Reviews</a>
        <a class="nav-link" onclick="scrollToSection('contact');toggleMobileMenu()">Contact</a>
        <div class="mobile-menu-footer">
            <button class="btn btn-primary" style="width:100%;justify-content:center"
                onclick="scrollToSection('contact');toggleMobileMenu()">Get a Quote</button>
        </div>
    </div>

    <!-- HERO -->
    <section id="home" class="hero">
        <div class="hero-bg">
            <div class="hero-blob hero-blob-1"></div>
            <div class="hero-blob hero-blob-2"></div>
            <div class="hero-blob hero-blob-3"></div>
            <div class="hero-grid"></div>
            <div class="hero-noise"></div>
        </div>
        <div class="container">
            <div class="hero-inner">
                <div class="hero-content">
                    <div class="hero-badge">
                        <div class="hero-badge-dot">✦</div>
                        Premier Design's
                    </div>
                    <h1 class="hero-headline">
                        <span class="line-plain">We Craft</span>
                        <span class="line-accent">Digital Identities</span>
                        <span class="line-plain">That Convert.</span>
                    </h1>
                    <p class="hero-sub">From brand identities to full-stack web solutions — Baseline IT Development
                        turns your vision into a premium digital presence that earns trust and drives results.</p>
                    <div class="hero-cta">
                        <button class="btn btn-primary btn-lg" onclick="scrollToSection('portfolio')">
                            <svg class="btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5">
                                <rect x="2" y="3" width="20" height="14" rx="2" />
                                <path d="M8 21h8M12 17v4" />
                            </svg>
                            View Portfolio
                        </button>
                        <button class="btn btn-outline btn-lg" onclick="scrollToSection('contact')">
                            Let's Talk
                            <svg class="btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5">
                                <line x1="5" y1="12" x2="19" y2="12" />
                                <polyline points="12 5 19 12 12 19" />
                            </svg>
                        </button>
                    </div>
                    <div class="hero-stats">
                        <div>
                            <div class="hero-stat-value">900<span>+</span></div>
                            <div class="hero-stat-label">Projects Delivered</div>
                        </div>
                        <div>
                            <div class="hero-stat-value">300<span>+</span></div>
                            <div class="hero-stat-label">Happy Clients</div>
                        </div>
                        <div>
                            <div class="hero-stat-value">13<span>+</span></div>
                            <div class="hero-stat-label">Years Experience</div>
                        </div>
                        <div>
                            <div class="hero-stat-value">98<span>%</span></div>
                            <div class="hero-stat-label">Client Satisfaction</div>
                        </div>
                    </div>
                </div>
                <div class="hero-visual">
                    <div class="hero-float-card hero-float-1">
                        <div class="float-card-icon" style="background:rgba(46,213,115,0.15)">✅</div>
                        <div>
                            <div style="color:var(--text);font-size:11px;font-weight:700;font-family:var(--font-ui)">
                                Project Delivered</div>
                            <div
                                style="color:var(--text-3);font-size:10px;margin-top:1px;font-family:var(--font-ui);letter-spacing:0.02em">
                                Nexus Brand Identity</div>
                        </div>
                    </div>
                    <div class="hero-visual-main">
                        <div class="hero-mockup">
                            <div class="hero-mockup-bar">
                                <div class="mockup-dot mockup-dot-r"></div>
                                <div class="mockup-dot mockup-dot-y"></div>
                                <div class="mockup-dot mockup-dot-g"></div>
                                <div class="mockup-url">
                                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2">
                                        <circle cx="12" cy="12" r="10" />
                                        <path d="M2 12h20M12 2a15.3 15.3 0 010 20M12 2a15.3 15.3 0 000 20" />
                                    </svg>
                                    baselineit.dev
                                </div>
                            </div>
                            <div class="hero-mockup-content">
                                <div class="mockup-row"
                                    style="width:60%;height:14px;background:linear-gradient(90deg,var(--accent),var(--accent-2));opacity:0.7">
                                </div>
                                <div class="mockup-row" style="width:90%"></div>
                                <div class="mockup-row" style="width:75%"></div>
                                <div class="mockup-grid-preview">
                                    <div class="mockup-card">
                                        <div class="mockup-card-dot"
                                            style="background:linear-gradient(135deg,var(--accent),var(--accent-2))">
                                        </div>
                                        <div class="mockup-card-line"></div>
                                    </div>
                                    <div class="mockup-card">
                                        <div class="mockup-card-dot"
                                            style="background:linear-gradient(135deg,#C864FF,#4A90D9)"></div>
                                        <div class="mockup-card-line"></div>
                                    </div>
                                    <div class="mockup-card">
                                        <div class="mockup-card-dot"
                                            style="background:linear-gradient(135deg,#FFB830,#FF6B6B)"></div>
                                        <div class="mockup-card-line"></div>
                                    </div>
                                    <div class="mockup-card">
                                        <div class="mockup-card-dot"
                                            style="background:linear-gradient(135deg,#2ED573,#00cca9)"></div>
                                        <div class="mockup-card-line"></div>
                                    </div>
                                </div>
                                <div class="mockup-row" style="width:55%"></div>
                            </div>
                        </div>
                    </div>
                    <div class="hero-float-card hero-float-2">
                        <div class="float-card-icon" style="background:rgba(255,184,48,0.15);font-size:18px">⭐</div>
                        <div>
                            <div style="color:var(--text);font-size:11px;font-weight:700;font-family:var(--font-ui)">5.0
                                Avg Rating</div>
                            <div style="color:var(--warning);font-size:11px;margin-top:2px;letter-spacing:3px">★★★★★
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MARQUEE -->
    <div class="marquee-section">
        <div class="container">
            <div class="marquee-label">Trusted tools &amp; technologies we work with</div>
        </div>
        <div class="marquee-track" id="marqueeTrack">
            <div class="marquee-item"><span class="marquee-item-icon">🎨</span> Adobe Illustrator</div>
            <div class="marquee-sep"></div>
            <div class="marquee-item"><span class="marquee-item-icon">🖼️</span> Photoshop</div>
            <div class="marquee-sep"></div>
            <div class="marquee-item"><span class="marquee-item-icon">✏️</span> Figma</div>
            <div class="marquee-sep"></div>
            <div class="marquee-item"><span class="marquee-item-icon">🌐</span> Laravel</div>
            <div class="marquee-sep"></div>
            <div class="marquee-item"><span class="marquee-item-icon">💻</span> Adobe XD</div>
            <div class="marquee-sep"></div>
            <div class="marquee-item"><span class="marquee-item-icon">📦</span> After Effects</div>
            <div class="marquee-sep"></div>
            <div class="marquee-item"><span class="marquee-item-icon">🛒</span> WordPress</div>
            <div class="marquee-sep"></div>
            <div class="marquee-item"><span class="marquee-item-icon">📱</span> Canva Pro</div>
            <div class="marquee-sep"></div>
            <div class="marquee-item"><span class="marquee-item-icon">⚡</span> InDesign</div>
            <div class="marquee-sep"></div>
            <div class="marquee-item"><span class="marquee-item-icon">🎨</span> Adobe Illustrator</div>
            <div class="marquee-sep"></div>
            <div class="marquee-item"><span class="marquee-item-icon">🖼️</span> Photoshop</div>
            <div class="marquee-sep"></div>
            <div class="marquee-item"><span class="marquee-item-icon">✏️</span> Figma</div>
            <div class="marquee-sep"></div>
            <div class="marquee-item"><span class="marquee-item-icon">🌐</span> Laravel</div>
            <div class="marquee-sep"></div>
            <div class="marquee-item"><span class="marquee-item-icon">💻</span> Adobe XD</div>
            <div class="marquee-sep"></div>
            <div class="marquee-item"><span class="marquee-item-icon">📦</span> After Effects</div>
            <div class="marquee-sep"></div>
            <div class="marquee-item"><span class="marquee-item-icon">🛒</span> WordPress</div>
            <div class="marquee-sep"></div>
            <div class="marquee-item"><span class="marquee-item-icon">📱</span> Canva Pro</div>
            <div class="marquee-sep"></div>
            <div class="marquee-item"><span class="marquee-item-icon">⚡</span> InDesign</div>
            <div class="marquee-sep"></div>
        </div>
    </div>

    <!-- SERVICES -->
    <section id="services" class="services-section">
        <div class="container">
            <div class="services-header">
                <div class="section-eyebrow">Our Services</div>
                <h2 class="section-title-lg">Everything Your Brand<br>Needs to Stand Out</h2>
                <p class="section-sub">From pixel-perfect logos to high-converting web experiences — we cover the full
                    spectrum of digital design and development.</p>
            </div>
            <div class="services-grid reveal">
                <div class="service-card">
                    <div class="service-icon service-icon-bg-blue">🔵</div>
                    <div class="service-title">Logo Design</div>
                    <div class="service-desc">Memorable, scalable logos built on strategic thinking. Vectorized and
                        delivered in all formats.</div>
                    <div class="service-arrow"></div>
                </div>
                <div class="service-card">
                    <div class="service-icon service-icon-bg-orange">🎨</div>
                    <div class="service-title">Brand Identity</div>
                    <div class="service-desc">Complete brand systems: logo, typography, color palette, guidelines and
                        collateral design.</div>
                    <div class="service-arrow"></div>
                </div>
                <div class="service-card">
                    <div class="service-icon service-icon-bg-teal">💻</div>
                    <div class="service-title">UI/UX Design</div>
                    <div class="service-desc">Intuitive interfaces and user flows that delight users and maximize
                        engagement and conversion.</div>
                    <div class="service-arrow"></div>
                </div>
                <div class="service-card">
                    <div class="service-icon service-icon-bg-purple">📱</div>
                    <div class="service-title">Social Media Design</div>
                    <div class="service-desc">Scroll-stopping creatives, reels covers, story templates, and full
                        campaign kits.</div>
                    <div class="service-arrow"></div>
                </div>
                <div class="service-card">
                    <div class="service-icon service-icon-bg-green">🌐</div>
                    <div class="service-title">Website Design</div>
                    <div class="service-desc">Custom website UI design from landing pages to full multi-page websites —
                        pixel-perfect.</div>
                    <div class="service-arrow"></div>
                </div>
                <div class="service-card">
                    <div class="service-icon service-icon-bg-teal">⚙️</div>
                    <div class="service-title">Web Development</div>
                    <div class="service-desc">Laravel & PHP powered backends with Blade templates, MySQL databases and
                        clean code.</div>
                    <div class="service-arrow"></div>
                </div>
                <div class="service-card">
                    <div class="service-icon service-icon-bg-red">📦</div>
                    <div class="service-title">Packaging Design</div>
                    <div class="service-desc">Product packaging that makes your items stand out on shelves and online
                        stores.</div>
                    <div class="service-arrow"></div>
                </div>
                <div class="service-card">
                    <div class="service-icon service-icon-bg-cyan">🖨️</div>
                    <div class="service-title">Print & Ad Design</div>
                    <div class="service-desc">Banners, flyers, billboards, brochures — any print material designed for
                        maximum impact.</div>
                    <div class="service-arrow"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- PORTFOLIO -->
    <section id="portfolio" class="portfolio-section">
        <div class="container">
            <div class="portfolio-header">
                <div>
                    <div class="section-eyebrow">Featured Work</div>
                    <h2 class="section-title-lg" style="margin-bottom:0">Our Latest Projects</h2>
                </div>
                <div class="portfolio-filters">
                    <button class="filter-btn active" onclick="filterPortfolio(this,'all')">All</button>
                    <button class="filter-btn" onclick="filterPortfolio(this,'branding')">Branding</button>
                    <button class="filter-btn" onclick="filterPortfolio(this,'ui')">UI/UX</button>
                    <button class="filter-btn" onclick="filterPortfolio(this,'logo')">Logo</button>
                    <button class="filter-btn" onclick="filterPortfolio(this,'social')">Social</button>
                    <button class="filter-btn" onclick="filterPortfolio(this,'web')">Web</button>
                </div>
            </div>
            <div class="portfolio-grid reveal">
                <div class="portfolio-item portfolio-item-1" data-cat="branding" onclick="openProjectModal('nexus')">
                    <div class="portfolio-featured-badge">⭐ Featured</div>
                    <div class="portfolio-thumb thumb-brand">🎨</div>
                    <div class="portfolio-thumb-overlay">
                        <div class="portfolio-overlay-btns"><button class="portfolio-overlay-btn">👁</button><button
                                class="portfolio-overlay-btn">🔗</button></div>
                    </div>
                    <div class="portfolio-info">
                        <div class="portfolio-cat">Branding · Identity</div>
                        <div class="portfolio-name">Nexus Brand Identity System</div>
                        <div class="portfolio-client">Client: Nexus Corp · Jun 2025</div>
                    </div>
                </div>
                <div class="portfolio-item portfolio-item-2" data-cat="ui" onclick="openProjectModal('techflow')">
                    <div class="portfolio-thumb thumb-ui">💻</div>
                    <div class="portfolio-thumb-overlay">
                        <div class="portfolio-overlay-btns"><button class="portfolio-overlay-btn">👁</button></div>
                    </div>
                    <div class="portfolio-info">
                        <div class="portfolio-cat">UI/UX Design</div>
                        <div class="portfolio-name">TechFlow Dashboard</div>
                        <div class="portfolio-client">Client: TechFlow Ltd</div>
                    </div>
                </div>
                <div class="portfolio-item portfolio-item-3" data-cat="logo" onclick="openProjectModal('pureedge')">
                    <div class="portfolio-thumb thumb-logo" style="font-size:38px">🔵</div>
                    <div class="portfolio-thumb-overlay">
                        <div class="portfolio-overlay-btns"><button class="portfolio-overlay-btn">👁</button></div>
                    </div>
                    <div class="portfolio-info">
                        <div class="portfolio-cat">Logo Design</div>
                        <div class="portfolio-name">PureEdge Logo Suite</div>
                        <div class="portfolio-client">PureEdge Inc</div>
                    </div>
                </div>
                <div class="portfolio-item portfolio-item-4" data-cat="social" onclick="openProjectModal('spark')">
                    <div class="portfolio-thumb thumb-social" style="font-size:38px">📱</div>
                    <div class="portfolio-thumb-overlay">
                        <div class="portfolio-overlay-btns"><button class="portfolio-overlay-btn">👁</button></div>
                    </div>
                    <div class="portfolio-info">
                        <div class="portfolio-cat">Social Media</div>
                        <div class="portfolio-name">Spark Campaign Kit</div>
                        <div class="portfolio-client">Spark Agency</div>
                    </div>
                </div>
                <div class="portfolio-item portfolio-item-5" data-cat="branding" onclick="openProjectModal('bloom')">
                    <div class="portfolio-thumb thumb-pack" style="font-size:38px">📦</div>
                    <div class="portfolio-thumb-overlay">
                        <div class="portfolio-overlay-btns"><button class="portfolio-overlay-btn">👁</button></div>
                    </div>
                    <div class="portfolio-info">
                        <div class="portfolio-cat">Packaging Design</div>
                        <div class="portfolio-name">Organic Bloom Box</div>
                        <div class="portfolio-client">Bloom Organics</div>
                    </div>
                </div>
            </div>
            <div style="text-align:center;margin-top:48px" class="reveal">
                <button class="btn btn-outline btn-lg">Explore All Projects <svg class="btn-icon" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2.5">
                        <line x1="5" y1="12" x2="19" y2="12" />
                        <polyline points="12 5 19 12 12 19" />
                    </svg></button>
            </div>
        </div>
    </section>

    <!-- WHY CHOOSE US -->
    <section id="about" class="why-section">
        <div class="container">
            <div class="why-inner">
                <div>
                    <div class="section-eyebrow reveal">Why Choose Us</div>
                    <h2 class="section-title-lg reveal">Design that Speaks.<br>Code that Performs.</h2>
                    <p class="section-sub reveal" style="margin-bottom:0">We combine strategic design thinking with
                        technical excellence to deliver solutions that look stunning and work flawlessly.</p>
                    <div class="why-features">
                        <div class="why-feature reveal">
                            <div class="why-feature-icon">🎯</div>
                            <div>
                                <div class="why-feature-title">Results-Driven Design</div>
                                <div class="why-feature-desc">Every design decision is tied to your business goals — not
                                    just aesthetics. We craft for conversion.</div>
                            </div>
                        </div>
                        <div class="why-feature reveal reveal-delay-1">
                            <div class="why-feature-icon">⚡</div>
                            <div>
                                <div class="why-feature-title">Fast Turnaround</div>
                                <div class="why-feature-desc">Tight deadlines are our specialty. Most projects delivered
                                    ahead of schedule without compromising quality.</div>
                            </div>
                        </div>
                        <div class="why-feature reveal reveal-delay-2">
                            <div class="why-feature-icon">♾️</div>
                            <div>
                                <div class="why-feature-title">Unlimited Revisions</div>
                                <div class="why-feature-desc">We work until you're 100% happy. Your satisfaction is the
                                    only measure of project completion.</div>
                            </div>
                        </div>
                        <div class="why-feature reveal reveal-delay-3">
                            <div class="why-feature-icon">📁</div>
                            <div>
                                <div class="why-feature-title">Full File Delivery</div>
                                <div class="why-feature-desc">You own everything. Source files, assets, and all formats
                                    are delivered and yours forever.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="why-visual reveal">
                    <div class="why-visual-main">
                        <div class="why-stats-grid">
                            <div class="why-stat-box">
                                <div class="why-stat-num">900+</div>
                                <div class="why-stat-label">Projects Completed</div>
                            </div>
                            <div class="why-stat-box">
                                <div class="why-stat-num">98%</div>
                                <div class="why-stat-label">Satisfaction Rate</div>
                            </div>
                            <div class="why-stat-box">
                                <div class="why-stat-num">300+</div>
                                <div class="why-stat-label">Happy Clients</div>
                            </div>
                            <div class="why-stat-box">
                                <div class="why-stat-num">13+</div>
                                <div class="why-stat-label">Years Active</div>
                            </div>
                        </div>
                        <div class="why-progress-list">
                            <div class="why-progress-item">
                                <div class="why-progress-top"><span>Graphic Design</span><span
                                        class="why-progress-val">98%</span></div>
                                <div class="why-progress-bar">
                                    <div class="why-progress-fill" style="width:98%"></div>
                                </div>
                            </div>
                            <div class="why-progress-item">
                                <div class="why-progress-top"><span>UI/UX Design</span><span
                                        class="why-progress-val">92%</span></div>
                                <div class="why-progress-bar">
                                    <div class="why-progress-fill" style="width:92%"></div>
                                </div>
                            </div>
                            <div class="why-progress-item">
                                <div class="why-progress-top"><span>Web Development</span><span
                                        class="why-progress-val">85%</span></div>
                                <div class="why-progress-bar">
                                    <div class="why-progress-fill" style="width:85%"></div>
                                </div>
                            </div>
                            <div class="why-progress-item">
                                <div class="why-progress-top"><span>Branding Strategy</span><span
                                        class="why-progress-val">90%</span></div>
                                <div class="why-progress-bar">
                                    <div class="why-progress-fill" style="width:90%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PROCESS -->
    <section class="process-section">
        <div class="container">
            <div class="process-header">
                <div class="section-eyebrow reveal">Our Process</div>
                <h2 class="section-title-lg reveal">How We Bring Your Vision to Life</h2>
                <p class="section-sub reveal" style="margin:0 auto">A clear, collaborative process from discovery to
                    delivery — designed for efficiency and exceptional results.</p>
            </div>
            <div class="process-steps">
                <div class="process-step reveal">
                    <div class="step-num active"><span class="step-icon">🔍</span></div>
                    <div class="step-title">Discovery</div>
                    <div class="step-desc">We learn about your business, goals, target audience, and competition.</div>
                </div>
                <div class="process-step reveal reveal-delay-1">
                    <div class="step-num"><span class="step-icon">💡</span></div>
                    <div class="step-title">Strategy</div>
                    <div class="step-desc">We build a creative brief and define the direction, style, and deliverables.
                    </div>
                </div>
                <div class="process-step reveal reveal-delay-2">
                    <div class="step-num"><span class="step-icon">✏️</span></div>
                    <div class="step-title">Design</div>
                    <div class="step-desc">Our designers craft the initial concepts with precision and creativity.</div>
                </div>
                <div class="process-step reveal reveal-delay-3">
                    <div class="step-num"><span class="step-icon">🔄</span></div>
                    <div class="step-title">Revisions</div>
                    <div class="step-desc">You provide feedback. We refine until every detail is perfect.</div>
                </div>
                <div class="process-step reveal reveal-delay-4">
                    <div class="step-num"><span class="step-icon">🚀</span></div>
                    <div class="step-title">Delivery</div>
                    <div class="step-desc">Final files in all formats, fully organized and ready to use.</div>
                </div>
            </div>
        </div>
    </section>

    <!-- TESTIMONIALS -->
    <section id="testimonials" class="testimonials-section">
        <div class="container">
            <div class="testi-header">
                <div class="section-eyebrow reveal">Client Reviews</div>
                <h2 class="section-title-lg reveal">What Our Clients Say</h2>
                <p class="section-sub reveal" style="margin:0 auto">Real feedback from real clients — we let our work
                    and relationships speak for themselves.</p>
            </div>
            <div class="testi-grid">
                <div class="testi-card reveal">
                    <div class="testi-stars">★★★★★</div>
                    <div class="testi-text">Baseline IT delivered exactly what we envisioned. The brand identity
                        exceeded expectations — clean, modern, and truly represents who we are as a company.</div>
                    <div class="testi-author">
                        <div class="testi-avatar tav-green">S</div>
                        <div>
                            <div class="testi-name">Sara</div>
                            <div class="testi-company">CEO, Nexus Corp</div>
                        </div>
                    </div>
                </div>
                <div class="testi-card reveal reveal-delay-1">
                    <div class="testi-stars">★★★★★</div>
                    <div class="testi-text">Exceptional UI/UX work. Our app conversion rate improved by 40% after the
                        redesign. The team truly understands both aesthetics and user psychology.</div>
                    <div class="testi-author">
                        <div class="testi-avatar tav-blue">R</div>
                        <div>
                            <div class="testi-name">Rahul Mehta</div>
                            <div class="testi-company">Product Manager, TechFlow</div>
                        </div>
                    </div>
                </div>
                <div class="testi-card reveal reveal-delay-2">
                    <div class="testi-stars">★★★★★</div>
                    <div class="testi-text">Our packaging now stands out on shelves. The creativity and attention to
                        detail is impressive. Turnaround was fast and the files were pristine.</div>
                    <div class="testi-author">
                        <div class="testi-avatar tav-orange">M</div>
                        <div>
                            <div class="testi-name">Maria Lopez</div>
                            <div class="testi-company">Founder, Bloom Organics</div>
                        </div>
                    </div>
                </div>
                <div class="testi-card reveal">
                    <div class="testi-stars">★★★★★</div>
                    <div class="testi-text">Social media engagement tripled after deploying the new creative kit.
                        Stunning visuals, professional team, and they delivered 3 days ahead of schedule.</div>
                    <div class="testi-author">
                        <div class="testi-avatar tav-purple">K</div>
                        <div>
                            <div class="testi-name">Hem Mishra</div>
                            <div class="testi-company">Marketing Dir, Spark Agency</div>
                        </div>
                    </div>
                </div>
                <div class="testi-card reveal reveal-delay-1">
                    <div class="testi-stars">★★★★★</div>
                    <div class="testi-text">Best logo designer I've worked with. They asked all the right questions,
                        understood our vision immediately, and delivered a logo that perfectly represents us.</div>
                    <div class="testi-author">
                        <div class="testi-avatar tav-teal">A</div>
                        <div>
                            <div class="testi-name">Rohit</div>
                            <div class="testi-company">Founder, PureEdge Inc</div>
                        </div>
                    </div>
                </div>
                <div class="testi-card reveal reveal-delay-2">
                    <div class="testi-stars">★★★★☆</div>
                    <div class="testi-text">Working with Baseline IT was an absolute pleasure. They're responsive,
                        talented, and genuinely care about your project. Will absolutely hire again.</div>
                    <div class="testi-author">
                        <div class="testi-avatar tav-red">N</div>
                        <div>
                            <div class="testi-name">Nadia Sheikh</div>
                            <div class="testi-company">Director, Bloom Brand Co</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testi-nav">
                <div class="testi-dot active"></div>
                <div class="testi-dot"></div>
                <div class="testi-dot"></div>
            </div>
        </div>
    </section>

    <!-- CTA BANNER -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-inner reveal">
                <div class="cta-grid-pattern"></div>
                <div class="section-eyebrow" style="margin:0 auto 20px">Ready to Start?</div>
                <h2 class="cta-title">Let's Build Something<br><span class="text-accent"
                        style="font-style:italic">Extraordinary Together</span></h2>
                <p class="cta-sub">Get a free consultation and quote for your next project. We respond within 2 hours.
                </p>
                <div class="cta-btns">
                    <button class="btn btn-primary btn-lg" onclick="scrollToSection('contact')">
                        <svg class="btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z" />
                        </svg>
                        Start a Project
                    </button>
                    <a class="cta-wa-btn" href="" target="_blank" rel="noopener">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                        </svg>
                        Chat on WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT -->
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
                        <div class="form-row">
                            <div class="form-group" style="margin-bottom:0"><label class="form-label">Full Name <span
                                        style="color:#FF4757">*</span></label><input type="text" class="form-input"
                                    placeholder="Hem Mishra"></div>
                            <div class="form-group" style="margin-bottom:0"><label class="form-label">Email Address
                                    <span style="color:#FF4757">*</span></label><input type="email" class="form-input"
                                    placeholder="Hem@email.com"></div>
                        </div>
                        <div class="form-row" style="margin-top:16px">
                            <div class="form-group" style="margin-bottom:0"><label class="form-label">Phone /
                                    WhatsApp</label><input type="text" class="form-input" placeholder="+91 ..."></div>
                            <div class="form-group" style="margin-bottom:0"><label class="form-label">Service
                                    Needed</label>
                                <select class="form-input form-select-field">
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
                        <div class="form-group" style="margin-top:16px"><label class="form-label">Project Budget</label>
                            <select class="form-input form-select-field">
                                <option value="">Select budget range...</option>
                                <option>Under $200</option>
                                <option>$200 – $500</option>
                                <option>$500 – $1,000</option>
                                <option>$1,000 – $5,000</option>
                                <option>$5,000+</option>
                            </select>
                        </div>
                        <div class="form-group"><label class="form-label">Project Details <span
                                    style="color:#FF4757">*</span></label><textarea class="form-textarea"
                                placeholder="Tell us about your project, goals, timeline, and any references you have in mind..."></textarea>
                        </div>
                        <button class="form-submit" onclick="submitForm()">
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
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="container">
            <div class="footer-main">
                <div>
                    <div class="footer-brand-logo">
                        <div class="footer-logo-mark">B</div>
                        <div class="footer-brand-name">Baseline IT<span>Development Studio</span></div>
                    </div>
                    <p class="footer-brand-desc">Professional graphic design and web development agency crafting premium
                        digital identities since 2021.</p>
                    <div class="contact-social" style="margin-bottom:0">
                        <a class="social-btn" href="#" style="width:36px;height:36px;font-size:15px">💼</a>
                        <a class="social-btn" href="#" style="width:36px;height:36px;font-size:15px">📸</a>
                        <a class="social-btn" href="#" style="width:36px;height:36px;font-size:15px">🎨</a>
                        <a class="social-btn" href="#" style="width:36px;height:36px;font-size:15px">💻</a>
                    </div>
                </div>
                <div>
                    <div class="footer-col-title">Services</div>
                    <ul class="footer-links">
                        <li><a class="footer-link">Logo Design</a></li>
                        <li><a class="footer-link">Brand Identity</a></li>
                        <li><a class="footer-link">UI/UX Design</a></li>
                        <li><a class="footer-link">Social Media Design</a></li>
                        <li><a class="footer-link">Web Development</a></li>
                        <li><a class="footer-link">Packaging Design</a></li>
                        <li><a class="footer-link">Print & Ad Design</a></li>
                    </ul>
                </div>
                <div>
                    <div class="footer-col-title">Company</div>
                    <ul class="footer-links">
                        <li><a class="footer-link" onclick="scrollToSection('home')">Home</a></li>
                        <li><a class="footer-link" onclick="scrollToSection('about')">About Us</a></li>
                        <li><a class="footer-link" onclick="scrollToSection('portfolio')">Portfolio</a></li>
                        <li><a class="footer-link" onclick="scrollToSection('testimonials')">Testimonials</a></li>
                        <li><a class="footer-link" onclick="scrollToSection('contact')">Contact</a></li>
                        <li><a class="footer-link" href="/admin">Admin Panel</a></li>
                    </ul>
                </div>
                <div>
                    <div class="footer-col-title">Get in Touch</div>
                    <div class="footer-contact-item">
                        <div class="footer-contact-icon">📧</div>
                        <div class="footer-contact-text">info@baselineit.dev</div>
                    </div>
                    <div class="footer-contact-item">
                        <div class="footer-contact-icon">📱</div>
                        <div class="footer-contact-text">+91 98765 43210</div>
                    </div>
                    <div class="footer-contact-item">
                        <div class="footer-contact-icon">📍</div>
                        <div class="footer-contact-text">Mohali, Punjab<br>India</div>
                    </div>
                    <div style="margin-top:18px">
                        <a class="cta-wa-btn" href="https://wa.me/919876543210" target="_blank"
                            style="padding:10px 18px;font-size:12px;border-radius:8px">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                            </svg>
                            Chat Now
                        </a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="footer-copyright">© 2025 <a href="#">Baseline IT Development</a>. All rights reserved.
                    Crafted with ❤️ in Punjab, India.</div>
                <div class="footer-bottom-links">
                    <a class="footer-bottom-link">Privacy Policy</a>
                    <a class="footer-bottom-link">Terms of Service</a>
                    <a class="footer-bottom-link">Sitemap</a>
                </div>
            </div>
        </div>
    </footer>

    <button class="scroll-top" id="scrollTopBtn" onclick="window.scrollTo({top:0,behavior:'smooth'})">↑</button>
    <div class="toast-wrap" id="toastWrap"></div>

    <!-- MODAL -->
    <div class="modal-overlay" id="projectModal">
        <div class="modal">
            <div class="modal-header">
                <div class="modal-title" id="modalTitle">Project Name</div>
                <button class="modal-close" onclick="closeModal()">×</button>
            </div>
            <div class="modal-body">
                <div class="modal-thumb" id="modalThumb">🎨</div>
                <div class="modal-meta" id="modalMeta"></div>
                <div class="modal-desc" id="modalDesc"></div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-outline" onclick="closeModal()">Close</button>
                <button class="btn btn-primary" onclick="scrollToSection('contact');closeModal()">Get Similar
                    Project</button>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/welcome.js') }}"></script>


</body>

</html>
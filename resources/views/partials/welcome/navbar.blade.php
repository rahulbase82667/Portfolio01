{{-- NAVBAR --}}
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

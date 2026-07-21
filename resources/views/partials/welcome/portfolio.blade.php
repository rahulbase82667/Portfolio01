{{-- PORTFOLIO --}}
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

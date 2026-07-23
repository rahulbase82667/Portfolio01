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

    @include('partials.welcome.navbar')
    @include('partials.welcome.mobile-menu')
    @include('partials.welcome.hero')
    @include('partials.welcome.marquee')
    @include('partials.welcome.services')
    @include('partials.welcome.portfolio')
    @include('partials.welcome.why-us')
    @include('partials.welcome.process')
    @include('partials.welcome.testimonials')
    @include('partials.welcome.cta')
    @include('partials.welcome.contact')
    @include('partials.welcome.footer')

    <button class="scroll-top" id="scrollTopBtn" onclick="window.scrollTo({top:0,behavior:'smooth'})">↑</button>
    <div class="toast-wrap" id="toastWrap"></div>

    @include('partials.welcome.modal')

    <script src="{{ asset('assets/js/welcome.js') }}"></script>

</body>

</html>

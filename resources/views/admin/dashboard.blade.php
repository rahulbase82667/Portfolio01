<!DOCTYPE html>
<html lang="en" data-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Baseline IT — Admin Panel</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&family=DM+Sans:wght@300;400;500;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">

</head>

<body>

    {{-- ============================================================
     MAIN APP SHELL
     ============================================================ --}}
    <div class="app-shell" id="appShell">

        <!-- SIDEBAR OVERLAY (mobile) -->
        <div class="sidebar-overlay" id="sidebarOverlay" onclick="closeSidebar()"></div>

        @include('admin.partials.sidebar')

        <!-- MAIN AREA -->
        <main class="main-area">

            @include('admin.partials.topbar')

            <!-- PAGE CONTENT -->
            <div class="page-content">

                @include('admin.partials.pages.dashboard-page')

                @include('admin.partials.pages.projects')

                @include('admin.partials.pages.categories')

                @include('admin.partials.pages.testimonials')

                @include('admin.partials.pages.inquiries')

                @include('admin.partials.pages.settings')

                @include('admin.partials.pages.add-project')

            </div><!-- /page-content -->
        </main>
    </div><!-- /app-shell -->

    {{-- ============================================================
     TOAST CONTAINER
     ============================================================ --}}
    <div class="toast-container" id="toastContainer"></div>

    @include('admin.partials.modals')

    {{-- ============================================================
     JAVASCRIPT
     ============================================================ --}}
    <script src="{{ asset('assets/js/admin.js') }}"></script>
</body>

</html>

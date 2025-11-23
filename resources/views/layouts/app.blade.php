<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'SIPKES')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
    @stack('styles')
</head>

<body>
    <div id="app">
        @include('partials.sidebar')

        <div class="main-content">
            @include('partials.header')

            <main class="p-4">
                @yield('content')
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script>
        (function() {
            const body = document.body;
            const sidebar = document.getElementById('sidebar');
            const toggleBtn = document.getElementById('sidebarToggle');
            const closeBtn = document.getElementById('sidebarClose');
            
            // Toggle sidebar
            toggleBtn.addEventListener('click', function() {
                body.classList.toggle('sidebar-open');
            });

            // Close sidebar
            closeBtn.addEventListener('click', function() {
                body.classList.remove('sidebar-open');
            });

            // Close sidebar when clicking outside on mobile
            document.addEventListener('click', function(e) {
                if (!sidebar.contains(e.target) && !toggleBtn.contains(e.target)) {
                    if (window.innerWidth < 992) body.classList.remove('sidebar-open');
                }
            });

            // Handle dropdown toggle with animation
            document.querySelectorAll('.sidebar .nav-link[data-bs-toggle="collapse"]').forEach(function(el) {
                el.addEventListener('click', function(e) {
                    // Only toggle if clicking the link itself, not the icon
                    if (e.target.tagName === 'I' && e.target.classList.contains('caret')) {
                        return;
                    }
                    this.classList.toggle('open');
                });
            });

            // Auto-close other dropdowns when one is opened (optional)
            document.querySelectorAll('.sidebar .collapse').forEach(function(collapse) {
                collapse.addEventListener('show.bs.collapse', function() {
                    // Remove show class from other collapses
                    document.querySelectorAll('.sidebar .collapse').forEach(function(otherCollapse) {
                        if (otherCollapse !== collapse && otherCollapse.classList.contains('show')) {
                            otherCollapse.classList.remove('show');
                        }
                    });
                });
            });

            window.addEventListener('resize', function() {
                if (window.innerWidth >= 992) {
                    body.classList.remove('sidebar-open');
                }
            });

            // Initialize dropdown states based on current page
            document.addEventListener('DOMContentLoaded', function() {
                // Set active states for dropdown parents
                const activeSubLinks = document.querySelectorAll('.sidebar .nav-link.active-sub');
                activeSubLinks.forEach(function(link) {
                    const parentCollapse = link.closest('.collapse');
                    if (parentCollapse) {
                        parentCollapse.classList.add('show');
                        const parentLink = document.querySelector('[data-bs-target="#' + parentCollapse.id + '"]');
                        if (parentLink) {
                            parentLink.classList.add('active');
                            parentLink.setAttribute('aria-expanded', 'true');
                        }
                    }
                });
            });
        })();
    </script>

    @stack('scripts')
</body>

</html>
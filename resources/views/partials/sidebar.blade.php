<aside id="sidebar" class="sidebar bg-white border-end shadow-sm">
    <div class="sidebar-inner d-flex flex-column h-100">
        <div class="sidebar-top p-3">
            <div class="d-flex align-items-center mb-3">
                <img src="{{ asset('images/logosipkes.png') }}" alt="Logo" style="max-height:48px; width:auto;">
            </div>

            <nav class="nav flex-column sidebar-nav">
                <a class="nav-link d-flex align-items-center {{ request()->routeIs('dashboard') ? 'active' : '' }}"
                    href="{{ route('dashboard') }}">
                    <i class="fas fa-chart-line me-3"></i>
                    <span>Dashboard</span>
                </a>

                <a class="nav-link d-flex align-items-center {{ request()->routeIs('pendaftaran') ? 'active' : '' }}"
                    href="{{ route('pendaftaran') }}">
                    <i class="fas fa-file-invoice-dollar me-3"></i>
                    <span>Pendaftaran</span>
                </a>

                @php
                    $pemeriksaanRoutes = ['poli-umum', 'poli-gigi', 'poli-kia', 'rawat-inap', 'ugd'];
                    $isPemeriksaanActive = false;
                    foreach ($pemeriksaanRoutes as $route) {
                        if (request()->is('pemeriksaan/' . $route) || request()->is('pemeriksaan/' . $route . '/*')) {
                            $isPemeriksaanActive = true;
                            break;
                        }
                    }
                @endphp

                <a class="nav-link d-flex align-items-center {{ $isPemeriksaanActive ? 'active' : '' }}"
                    data-bs-toggle="collapse" href="#pemeriksaanCollapse" role="button"
                    aria-expanded="{{ $isPemeriksaanActive ? 'true' : 'false' }}" aria-controls="pemeriksaanCollapse">
                    <i class="fas fa-heartbeat me-3"></i>
                    <span>Pemeriksaan</span>
                    <i class="fas fa-chevron-down ms-auto caret"></i>
                </a>
                <div class="collapse {{ $isPemeriksaanActive ? 'show' : '' }}" id="pemeriksaanCollapse">
                    <nav class="nav flex-column ms-4">
                        <a class="nav-link d-flex align-items-center {{ request()->is('pemeriksaan/poli-umum') || request()->is('pemeriksaan/poli-umum/*') ? 'active-sub' : '' }}"
                            href="{{ url('/pemeriksaan/poli-umum') }}">
                            <span>Poli Umum</span>
                        </a>
                        <a class="nav-link d-flex align-items-center {{ request()->is('pemeriksaan/poli-gigi') || request()->is('pemeriksaan/poli-gigi/*') ? 'active-sub' : '' }}"
                            href="{{ url('/pemeriksaan/poli-gigi') }}">
                            <span>Poli Gigi</span>
                        </a>
                        <a class="nav-link d-flex align-items-center {{ request()->is('pemeriksaan/poli-kia') || request()->is('pemeriksaan/poli-kia/*') ? 'active-sub' : '' }}"
                            href="{{ url('/pemeriksaan/poli-kia') }}">
                            <span>Poli KIA</span>
                        </a>
                        <a class="nav-link d-flex align-items-center {{ request()->is('pemeriksaan/rawat-inap') || request()->is('pemeriksaan/rawat-inap/*') ? 'active-sub' : '' }}"
                            href="{{ url('/pemeriksaan/rawat-inap') }}">
                            <span>Rawat Inap</span>
                        </a>
                        <a class="nav-link d-flex align-items-center {{ request()->is('pemeriksaan/ugd') || request()->is('pemeriksaan/ugd/*') ? 'active-sub' : '' }}"
                            href="{{ url('/pemeriksaan/ugd') }}">
                            <span>UGD</span>
                        </a>
                    </nav>
                </div>

                <a class="nav-link d-flex align-items-center" href="#">
                    <i class="fas fa-pills me-3"></i>
                    <span>Farmasi</span>
                    <i class="fas fa-chevron-right ms-auto"></i>
                </a>

                <a class="nav-link d-flex align-items-center {{ request()->routeIs('pembayaran') ? 'active' : '' }}"
                    href="{{ route('pembayaran') }}">
                    <i class="fas fa-dollar-sign me-3"></i>
                    <span>Pembayaran</span>
                </a>

                <a class="nav-link d-flex align-items-center {{ request()->routeIs('persuratan') ? 'active' : '' }}"
                    href="{{ route('persuratan') }}">
                    <i class="fas fa-envelope me-3"></i>
                    <span>Persuratan</span>
                </a>

                <a class="nav-link d-flex align-items-center {{ request()->routeIs('rekam-medis') ? 'active' : '' }}"
                    href="{{ route('rekam-medis') }}">
                    <i class="fas fa-book-medical me-3"></i>
                    <span>Rekam Medis</span>
                </a>

                <a class="nav-link d-flex align-items-center {{ request()->routeIs('laporan') ? 'active' : '' }}"
                    href="{{ route('laporan') }}">
                    <i class="fas fa-file-alt me-3"></i>
                    <span>Laporan</span>
                </a>
            </nav>
        </div>

        <div class="sidebar-bottom p-3 mt-auto">
            <button id="sidebarClose" class="btn btn-close-sidebar d-lg-none">
                <i class="fas fa-chevron-left"></i>
            </button>
        </div>
    </div>
</aside>

<style>
    .sidebar {
        width: 260px;
        min-width: 260px;
        max-width: 260px;
        transition: transform .25s ease, width .2s ease;
        z-index: 100;
    }

    .sidebar .nav-link {
        color: #434b59;
        padding: .6rem 1rem;
        border-radius: .6rem;
        font-weight: 500;
        position: relative;
        transition: all 0.2s ease;
    }

    .sidebar .nav-link:not(.active):not(.active-sub):hover {
        background: rgba(85, 108, 255, 0.06);
        color: #556cff;
    }

    .sidebar .nav-link.active {
        background: linear-gradient(90deg, #4f7bff, #6ca7ff);
        color: #fff;
        font-weight: 600;
    }

    .sidebar .nav-link.active-sub {
        color: #556cff;
        font-weight: 600;
    }

    .sidebar .nav-link .caret {
        transition: transform .2s;
    }

    .sidebar .nav-link[aria-expanded="true"] .caret {
        transform: rotate(-180deg);
    }

    .sidebar .collapse .nav-link {
        padding: .6rem 1rem;
    }

    .sidebar .collapse .nav-link.active-sub {
        border-left: 2px solid #556cff;
    }

    .btn-close-sidebar {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: #f8f9fa;
        border: 1px solid #e9ecef;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #6c757d;
        transition: all 0.3s ease;
        padding: 0;
        margin: 0 auto;
    }

    .btn-close-sidebar:hover {
        background: #e9ecef;
        color: #495057;
    }

    .btn-close-sidebar:active {
        transform: scale(0.95);
    }

    .btn-close-sidebar i {
        font-size: 1.1rem;
        transition: transform 0.2s ease;
    }

    @media (min-width: 992px) {
        .btn-close-sidebar {
            display: none !important;
        }
    }

    @media (max-width: 576px) {
        .btn-close-sidebar {
            width: 44px;
            height: 44px;
        }

        .btn-close-sidebar i {
            font-size: 1rem;
        }
    }
</style>

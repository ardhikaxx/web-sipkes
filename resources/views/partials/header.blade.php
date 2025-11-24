<header class="app-header">
    <div class="header-container d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center">
            <button id="sidebarToggle" class="btn btn-link d-lg-none me-2" aria-label="Toggle sidebar">
                <i class="fas fa-bars fa-lg"></i>
            </button>
        </div>

        <div class="header-actions d-flex align-items-center">
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" id="userMenu"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://i.pravatar.cc/40" alt="avatar" class="rounded-circle" width="40" height="40">
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userMenu">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>

<style>
    .app-header {
        height: 64px;
        background: #fff;
        z-index: 50;
        position: sticky;
        top: 0;
        width: 100%;
        border-bottom: 1px solid #eef2f6;
        box-shadow: 0 6px 30px rgba(15, 23, 42, 0.06) !important;
    }

    .header-container {
        height: 100%;
        padding: 0 1rem;
        margin: 0 auto;
        width: 100%;
    }

    @media (max-width: 991.98px) {
        .header-container {
            padding: 0 12px;
        }
    }
</style>
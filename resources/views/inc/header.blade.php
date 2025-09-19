<!-- Navbar -->
<nav class="layout-navbar container-fluid navbar-detached navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
        <a class="nav-item nav-link px-0 me-xl-6" href="javascript:void(0)">
        <i class="icon-base ti tabler-menu-2 icon-md"></i>
        </a>
    </div>
    <div class="navbar-nav-right d-flex align-items-center justify-content-end" id="navbar-collapse">
        <!-- Search -->
        {{-- <div class="navbar-nav align-items-center">
            <div class="nav-item navbar-search-wrapper px-md-0 px-2 mb-0">
                <a class="nav-item nav-link search-toggler d-flex align-items-center px-0" href="javascript:void(0);">
                    <span class="d-inline-block text-body-secondary fw-normal" id="autocomplete"></span>
                </a>
            </div>
        </div> --}}
        <div class="heading">
            <h4 class="m-0 text-md-start text-center fw-bold top-page-title"></h4>
        </div>
        <!-- /Search -->
        <ul class="navbar-nav flex-row align-items-center ms-md-auto">
            <!-- Style Switcher -->
            <li>
                <a class="nav-link style-switcher-toggle hide-arrow" href="javascript:void(0);"  id="switch-account-btn">
                    <i class="icon-base ti tabler-refresh icon-22px"></i>
                    <span class="d-none ms-2" id="nav-theme-text">Switch Accounts</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle hide-arrow btn btn-icon btn-text-secondary rounded-pill" id="nav-theme" href="javascript:void(0);" data-bs-toggle="dropdown">
                <i class="icon-base ti tabler-sun icon-22px theme-icon-active text-heading"></i>
                <span class="d-none ms-2" id="nav-theme-text">Toggle theme</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="nav-theme-text">
                <li>
                    <button type="button" class="dropdown-item align-items-center active" data-bs-theme-value="light" aria-pressed="false">
                    <span>
                        <i class="icon-base ti tabler-sun icon-22px me-3" data-icon="sun"></i>Light </span>
                    </button>
                </li>
                <li>
                    <button type="button" class="dropdown-item align-items-center" data-bs-theme-value="dark" aria-pressed="true">
                    <span>
                        <i class="icon-base ti tabler-moon-stars icon-22px me-3" data-icon="moon-stars"></i>Dark </span>
                    </button>
                </li>
                <li>
                    <button type="button" class="dropdown-item align-items-center" data-bs-theme-value="system" aria-pressed="false">
                    <span>
                        <i class="icon-base ti tabler-device-desktop-analytics icon-22px me-3" data-icon="device-desktop-analytics"></i>System </span>
                    </button>
                </li>
                </ul>
            </li>
            <!-- / Style Switcher-->
            <!-- User -->
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow p-0" href="javascript:void(0);" data-bs-toggle="dropdown">
                <div class="avatar avatar-online">
                    <img src="{{ url('backend/assets/img/avatars/1.png') }}" alt class="rounded-circle" />
                </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                <li>
                    <a class="dropdown-item mt-0" href="javascript: void(0);">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 me-2">
                        <div class="avatar avatar-online">
                            <img src="{{ url('backend/assets/img/avatars/1.png') }}" alt class="rounded-circle" />
                        </div>
                        </div>
                        <div class="flex-grow-1">
                        <h6 class="mb-0">{{ ucwords(Auth::user()->name) }}</h6>
                        @php 
                            $role = Auth::user()->roles;
                        @endphp
                        <small class="text-body-secondary">{{ $role ? ucwords($role->display_name) : '' }}</small>
                        </div>
                    </div>
                    </a>
                </li>
                <li>
                    <div class="d-grid px-2 pt-2 pb-1">
                    <a class="btn btn-sm btn-danger d-flex align-items-center" href="javascript:void(0);" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <small class="align-middle">Logout</small>
                        <i class="icon-base ti tabler-logout ms-2 icon-14px"></i>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    </div>
                </li>
                </ul>
            </li>
            <!--/ User -->
        </ul>
    </div>
</nav>
<!-- / Navbar -->

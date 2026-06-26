<header class="app-topbar">
    <div class="container-fluid topbar-menu">
        <div class="d-flex align-items-center gap-2">
            <!-- Topbar Brand Logo -->
            <div class="logo-topbar">
                <!-- Logo light -->
                <a class="logo-light"
                    href="index.html">
                    <span class="logo-lg">
                        <img alt="logo"
                            src="assets/images/logo.png" />
                    </span>
                    <span class="logo-sm">
                        <img alt="small logo"
                            src="assets/images/logo-sm.png" />
                    </span>
                </a>

                <!-- Logo Dark -->
                <a class="logo-dark"
                    href="index.html">
                    <span class="logo-lg">
                        <img alt="dark logo"
                            src="assets/images/logo-black.png" />
                    </span>
                    <span class="logo-sm">
                        <img alt="small logo"
                            src="assets/images/logo-sm.png" />
                    </span>
                </a>
            </div>

            <!-- Sidebar Menu Toggle Button -->
            <button class="sidenav-toggle-button btn btn-primary btn-icon">
                <i class="ti ti-menu-4"></i>
            </button>

            <!-- Horizontal Menu Toggle Button -->
            <button class="topnav-toggle-button px-2"
                data-bs-target="#topnav-menu"
                data-bs-toggle="collapse">
                <i class="ti ti-menu-4"></i>
            </button>

            {{-- <div class="app-search d-none d-xl-flex"
                id="search-box-rounded">
                <input class="form-control rounded-pill topbar-search"
                    name="search"
                    placeholder="Quick Search..."
                    type="search" />
                <i class="ti ti-search app-search-icon text-muted"></i>
            </div> --}}

            {{-- @include('partial.headers.megamenu') --}}

            {{-- @include('partial.headers.megaapps') --}}
        </div>

        <div class="d-flex align-items-center gap-2">
            {{-- theme changer --}}
            <div class="topbar-item d-none d-sm-flex"
                id="theme-dropdown">
                <div class="dropdown">
                    <button aria-expanded="false"
                        aria-haspopup="false"
                        class="topbar-link"
                        data-bs-toggle="dropdown"
                        type="button">
                        <i class="ti ti-sun topbar-link-icon d-none"
                            id="theme-icon-light"></i>
                        <i class="ti ti-moon topbar-link-icon d-none"
                            id="theme-icon-dark"></i>
                        <i class="ti ti-sun-moon topbar-link-icon d-none"
                            id="theme-icon-system"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end"
                        data-thememode="dropdown">
                        <label class="dropdown-item cursor-pointer">
                            <input class="form-check-input"
                                name="data-bs-theme"
                                style="display: none"
                                type="radio"
                                value="light" />
                            <i class="ti ti-sun align-middle me-1 fs-16"></i>
                            <span class="align-middle">Light</span>
                        </label>
                        <label class="dropdown-item cursor-pointer">
                            <input class="form-check-input"
                                name="data-bs-theme"
                                style="display: none"
                                type="radio"
                                value="dark" />
                            <i class="ti ti-moon align-middle me-1 fs-16"></i>
                            <span class="align-middle">Dark</span>
                        </label>
                        <label class="dropdown-item cursor-pointer">
                            <input class="form-check-input"
                                name="data-bs-theme"
                                style="display: none"
                                type="radio"
                                value="system" />
                            <i class="ti ti-sun-moon align-middle me-1 fs-16"></i>
                            <span class="align-middle">System</span>
                        </label>
                    </div>
                    <!-- end dropdown-menu-->
                </div>
                <!-- end dropdown-->
            </div>

            {{-- apps button menu --}}
            {{-- @include('partial.headers.apps-buttons') --}}

            {{-- @include('partial.headers.notification') --}}

            <div class="topbar-item d-none d-md-flex"
                id="fullscreen-toggler">
                <button class="topbar-link"
                    data-toggle="fullscreen"
                    type="button">
                    <i class="ti ti-maximize topbar-link-icon"></i>
                    <i class="ti ti-minimize topbar-link-icon d-none"></i>
                </button>
            </div>

            {{-- <div class="topbar-item d-none d-xl-flex"
                id="monochrome-toggler">
                <button class="topbar-link"
                    data-toggle="monochrome"
                    id="monochrome-mode"
                    type="button">
                    <i class="ti ti-palette topbar-link-icon"></i>
                </button>
            </div> --}}

            <div class="topbar-item d-none d-sm-flex">
                <button class="topbar-link btn-theme-setting"
                    data-bs-target="#theme-settings-offcanvas"
                    data-bs-toggle="offcanvas"
                    type="button">
                    <i class="ti ti-settings topbar-link-icon"></i>
                </button>
            </div>

            {{-- @include('partial.headers.language-selector') --}}

            @include('partial.headers.account-navs')
        </div>
    </div>
</header>

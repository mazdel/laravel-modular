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

            <div class="app-search d-none d-xl-flex"
                id="search-box-rounded">
                <input class="form-control rounded-pill topbar-search"
                    name="search"
                    placeholder="Quick Search..."
                    type="search" />
                <i class="ti ti-search app-search-icon text-muted"></i>
            </div>

            <div class="topbar-item d-none d-md-flex"
                id="megamenu-columns">
                <div class="dropdown">
                    <button aria-expanded="false"
                        aria-haspopup="false"
                        class="topbar-link btn fw-medium btn-link dropdown-toggle drop-arrow-none px-2"
                        data-bs-toggle="dropdown"
                        type="button">
                        Mega Menu
                        <i class="ti ti-chevron-down ms-1"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-xxl p-0">
                        <div class="h-100"
                            data-simplebar=""
                            style="max-height: 380px">
                            <div class="row g-0">
                                <!-- Dashboard & Analytics -->
                                <div class="col-md-4">
                                    <div class="p-2">
                                        <h5 class="mb-1 fw-semibold fs-sm dropdown-header">
                                            Dashboard &amp; Analytics
                                        </h5>
                                        <ul class="list-unstyled megamenu-list">
                                            <li>
                                                <a class="dropdown-item"
                                                    href="javascript:void(0);">
                                                    <i
                                                        class="ti ti-chevron-right align-middle me-1 text-muted"></i>
                                                    Sales Dashboard
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item"
                                                    href="javascript:void(0);">
                                                    <i
                                                        class="ti ti-chevron-right align-middle me-1 text-muted"></i>
                                                    Marketing Dashboard
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item"
                                                    href="javascript:void(0);">
                                                    <i
                                                        class="ti ti-chevron-right align-middle me-1 text-muted"></i>
                                                    Finance Overview
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item"
                                                    href="javascript:void(0);">
                                                    <i
                                                        class="ti ti-chevron-right align-middle me-1 text-muted"></i>
                                                    User Analytics
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item"
                                                    href="javascript:void(0);">
                                                    <i
                                                        class="ti ti-chevron-right align-middle me-1 text-muted"></i>
                                                    Traffic Insights
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Project Management -->
                                <div class="col-md-4">
                                    <div class="p-2">
                                        <h5 class="mb-1 fw-semibold fs-sm dropdown-header">
                                            Project Management
                                        </h5>
                                        <ul class="list-unstyled megamenu-list">
                                            <li>
                                                <a class="dropdown-item"
                                                    href="javascript:void(0);">
                                                    <i
                                                        class="ti ti-minus align-middle me-1 text-muted"></i>
                                                    Kanban Workflow
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item"
                                                    href="javascript:void(0);">
                                                    <i
                                                        class="ti ti-minus align-middle me-1 text-muted"></i>
                                                    Project Timeline
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item"
                                                    href="javascript:void(0);">
                                                    <i
                                                        class="ti ti-minus align-middle me-1 text-muted"></i>
                                                    Task Management
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item"
                                                    href="javascript:void(0);">
                                                    <i
                                                        class="ti ti-minus align-middle me-1 text-muted"></i>
                                                    Team Members
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item"
                                                    href="javascript:void(0);">
                                                    <i
                                                        class="ti ti-minus align-middle me-1 text-muted"></i>
                                                    Assignments
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- User Management -->
                                <div class="col-md-4">
                                    <div class="p-2 bg-light bg-opacity-50">
                                        <h5 class="mb-1 fw-semibold fs-sm dropdown-header">
                                            User Management
                                        </h5>
                                        <ul class="list-unstyled megamenu-list">
                                            <li>
                                                <a class="dropdown-item"
                                                    href="javascript:void(0);">
                                                    <i
                                                        class="ti ti-chevron-right align-middle me-1 text-muted"></i>
                                                    User Profiles
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item"
                                                    href="javascript:void(0);">
                                                    <i
                                                        class="ti ti-chevron-right align-middle me-1 text-muted"></i>
                                                    Access Control
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item"
                                                    href="javascript:void(0);">
                                                    <i
                                                        class="ti ti-chevron-right align-middle me-1 text-muted"></i>
                                                    Security Settings
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item"
                                                    href="javascript:void(0);">
                                                    <i
                                                        class="ti ti-chevron-right align-middle me-1 text-muted"></i>
                                                    User Groups
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item"
                                                    href="javascript:void(0);">
                                                    <i
                                                        class="ti ti-chevron-right align-middle me-1 text-muted"></i>
                                                    Authentication
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end .h-100-->
                    </div>
                    <!-- .dropdown-menu-->
                </div>
                <!-- .dropdown-->
            </div>

            <div class="topbar-item d-none d-md-flex"
                id="megamenu-apps">
                <div class="dropdown">
                    <button aria-expanded="false"
                        aria-haspopup="false"
                        class="topbar-link btn fw-medium btn-link dropdown-toggle drop-arrow-none px-2"
                        data-bs-toggle="dropdown"
                        type="button">
                        Apps
                        <i class="ti ti-chevron-down ms-1"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-xxl p-0">
                        <div class="h-100"
                            data-simplebar=""
                            style="max-height: 380px">
                            <div class="row g-0">
                                <div class="col-sm-8">
                                    <div class="row g-0">
                                        <div class="col-sm-6">
                                            <div class="p-2">
                                                <a class="dropdown-item"
                                                    href="index.html#!">
                                                    <span class="d-flex align-items-center">
                                                        <span class="avatar-md me-2">
                                                            <span
                                                                class="avatar-title text-primary border border-light bg-light bg-opacity-50 rounded">
                                                                <i class="ti ti-basket fs-22"></i>
                                                            </span>
                                                        </span>
                                                        <span>
                                                            <h5 class="fs-base mb-0 lh-base">
                                                                eCommerce
                                                            </h5>
                                                            <span
                                                                class="text-muted fs-12">Products,
                                                                orders &amp; etc.</span>
                                                        </span>
                                                    </span>
                                                </a>

                                                <a class="dropdown-item my-2"
                                                    href="index.html#!">
                                                    <span class="d-flex align-items-center">
                                                        <span class="avatar-md me-2">
                                                            <span
                                                                class="avatar-title text-success border border-light bg-light bg-opacity-50 rounded">
                                                                <i class="ti ti-message fs-22"></i>
                                                            </span>
                                                        </span>
                                                        <span>
                                                            <h5 class="fs-base mb-0 lh-base">
                                                                Chat</h5>
                                                            <span class="text-muted fs-12">Team
                                                                conversations</span>
                                                        </span>
                                                    </span>
                                                </a>

                                                <a class="dropdown-item my-2"
                                                    href="index.html#!">
                                                    <span class="d-flex align-items-center">
                                                        <span class="avatar-md me-2">
                                                            <span
                                                                class="avatar-title text-danger border border-light bg-light bg-opacity-50 rounded">
                                                                <i
                                                                    class="ti ti-list-check fs-22"></i>
                                                            </span>
                                                        </span>
                                                        <span>
                                                            <h5 class="fs-base mb-0 lh-base">
                                                                Task</h5>
                                                            <span class="text-muted fs-12">Plan
                                                                and track work</span>
                                                        </span>
                                                    </span>
                                                </a>

                                                <a class="dropdown-item mt-2"
                                                    href="index.html#!">
                                                    <span class="d-flex align-items-center">
                                                        <span class="avatar-md me-2">
                                                            <span
                                                                class="avatar-title text-info border border-light bg-light bg-opacity-50 rounded">
                                                                <i class="ti ti-mailbox fs-22"></i>
                                                            </span>
                                                        </span>
                                                        <span>
                                                            <h5 class="fs-base mb-0 lh-base">
                                                                Email</h5>
                                                            <span class="text-muted fs-12">Messages
                                                                and inbox</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="p-2">
                                                <a class="dropdown-item"
                                                    href="index.html#!">
                                                    <span class="d-flex align-items-center">
                                                        <span class="avatar-md me-2">
                                                            <span
                                                                class="avatar-title text-secondary border border-light bg-light bg-opacity-50 rounded">
                                                                <i
                                                                    class="ti ti-building fs-22"></i>
                                                            </span>
                                                        </span>
                                                        <span>
                                                            <h5 class="fs-base mb-0 lh-base">
                                                                Companies
                                                            </h5>
                                                            <span class="text-muted fs-12">Business
                                                                profiles</span>
                                                        </span>
                                                    </span>
                                                </a>

                                                <a class="dropdown-item my-2"
                                                    href="index.html#!">
                                                    <span class="d-flex align-items-center">
                                                        <span class="avatar-md me-2">
                                                            <span
                                                                class="avatar-title text-dark border border-light bg-light bg-opacity-50 rounded">
                                                                <i class="ti ti-id fs-22"></i>
                                                            </span>
                                                        </span>
                                                        <span>
                                                            <h5 class="fs-base mb-0 lh-base">
                                                                Contacts Diary
                                                            </h5>
                                                            <span class="text-muted fs-12">People
                                                                and connections</span>
                                                        </span>
                                                    </span>
                                                </a>

                                                <a class="dropdown-item my-2"
                                                    href="index.html#!">
                                                    <span class="d-flex align-items-center">
                                                        <span class="avatar-md me-2">
                                                            <span
                                                                class="avatar-title text-warning border border-light bg-light bg-opacity-50 rounded">
                                                                <i
                                                                    class="ti ti-calendar fs-22"></i>
                                                            </span>
                                                        </span>
                                                        <span>
                                                            <h5 class="fs-base mb-0 lh-base">
                                                                Calendar
                                                            </h5>
                                                            <span class="text-muted fs-12">Events
                                                                and reminders</span>
                                                        </span>
                                                    </span>
                                                </a>

                                                <a class="dropdown-item mt-2"
                                                    href="index.html#!">
                                                    <span class="d-flex align-items-center">
                                                        <span class="avatar-md me-2">
                                                            <span
                                                                class="avatar-title text-success border border-light bg-light bg-opacity-50 rounded">
                                                                <i
                                                                    class="ti ti-lifebuoy fs-22"></i>
                                                            </span>
                                                        </span>
                                                        <span>
                                                            <h5 class="fs-base mb-0 lh-base">
                                                                Support
                                                            </h5>
                                                            <span class="text-muted fs-12">Help
                                                                and assistance</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end row-->

                                    <div
                                        class="row g-0 border-top border-light border-dashed text-center">
                                        <div class="col">
                                            <div class="p-3">
                                                <p
                                                    class="fw-medium text-muted mb-2 fs-11 text-uppercase lh-1">
                                                    -: &nbsp; Support &nbsp;:-
                                                </p>
                                                <h5 class="fs-15 mb-0">help@mydomain.com
                                                </h5>
                                            </div>
                                        </div>
                                        <!-- end col-->
                                        <div class="col">
                                            <div class="p-3">
                                                <p
                                                    class="fw-medium text-muted mb-2 fs-11 text-uppercase lh-1">
                                                    -: &nbsp; Help: &nbsp;:-
                                                </p>
                                                <h5 class="fs-15 mb-0">+(12) 3456 7890</h5>
                                            </div>
                                        </div>
                                        <!-- end col-->
                                    </div>
                                    <!-- end row-->
                                </div>
                                <!-- end col-->

                                <div class="col-sm-4">
                                    <div class="h-100 position-relative rounded-end rounded-0 overflow-hidden"
                                        style="
                            background: url(assets/images/stock/small-8.jpg);
                            background-size: cover;
                          ">
                                        <div
                                            class="p-3 card-img-overlay bg-gradient bg-secondary bg-opacity-90 d-flex align-items-center justify-content-center">
                                            <div class="text-center text-white">
                                                <i class="ti ti-atom fs-36"></i>

                                                <p
                                                    class="text-white text-opacity-75 mb-3 text-uppercase">
                                                    Limited Offer
                                                </p>

                                                <h3 class="fw-semibold text-white mb-2 fs-20">
                                                    Unlock Exclusive Savings
                                                </h3>

                                                <h4 class="fw-medium fs-16 mb-1">
                                                    <del
                                                        class="text-white text-opacity-75">$49.00</del>
                                                    /
                                                    <span class="fw-bold text-white">$25
                                                        USD</span>
                                                </h4>

                                                <button class="btn btn-danger btn-sm mt-3"
                                                    type="button">
                                                    <i class="ti ti-shopping-cart me-1"></i>
                                                    Grab Deal
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end .bg-light-->
                                </div>
                                <!-- end col-->
                            </div>
                            <!-- end row-->
                        </div>
                        <!-- end .h-100-->
                    </div>
                    <!-- .dropdown-menu-->
                </div>
                <!-- .dropdown-->
            </div>
        </div>

        <div class="d-flex align-items-center gap-2">
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

            <div class="topbar-item d-none d-xl-flex"
                id="apps-dropdown-grid">
                <div class="dropdown">
                    <button aria-expanded="false"
                        aria-haspopup="false"
                        class="topbar-link dropdown-toggle drop-arrow-none"
                        data-bs-auto-close="outside"
                        data-bs-toggle="dropdown"
                        type="button">
                        <i class="ti ti-apps topbar-link-icon"></i>
                    </button>

                    <div class="dropdown-menu dropdown-menu-lg p-2 dropdown-menu-end">
                        <div class="row align-items-center g-1">
                            <div class="col-4">
                                <a class="dropdown-item border border-dashed rounded text-center py-2"
                                    href="javascript:void(0);">
                                    <span class="avatar-sm d-block mx-auto mb-1">
                                        <span class="avatar-title text-bg-light rounded-circle">
                                            <img alt="Google Logo"
                                                height="18"
                                                src="assets/images/logos/google.svg" />
                                        </span>
                                    </span>
                                    <span class="align-middle fw-medium">Google</span>
                                </a>
                            </div>

                            <div class="col-4">
                                <a class="dropdown-item border border-dashed rounded text-center py-2"
                                    href="javascript:void(0);">
                                    <span class="avatar-sm d-block mx-auto mb-1">
                                        <span class="avatar-title text-bg-light rounded-circle">
                                            <img alt="Figma Logo"
                                                height="18"
                                                src="assets/images/logos/figma.svg" />
                                        </span>
                                    </span>
                                    <span class="align-middle fw-medium">Figma</span>
                                </a>
                            </div>

                            <div class="col-4">
                                <a class="dropdown-item border border-dashed rounded text-center py-2"
                                    href="javascript:void(0);">
                                    <span class="avatar-sm d-block mx-auto mb-1">
                                        <span class="avatar-title text-bg-light rounded-circle">
                                            <img alt="Slack Logo"
                                                height="18"
                                                src="assets/images/logos/slack.svg" />
                                        </span>
                                    </span>
                                    <span class="align-middle fw-medium">Slack</span>
                                </a>
                            </div>

                            <div class="col-4">
                                <a class="dropdown-item border border-dashed rounded text-center py-2"
                                    href="javascript:void(0);">
                                    <span class="avatar-sm d-block mx-auto mb-1">
                                        <span class="avatar-title text-bg-light rounded-circle">
                                            <img alt="Dropbox Logo"
                                                height="18"
                                                src="assets/images/logos/dropbox.svg" />
                                        </span>
                                    </span>
                                    <span class="align-middle fw-medium">Dropbox</span>
                                </a>
                            </div>

                            <div class="col-4 text-center">
                                <a class="btn btn-sm rounded-circle btn-icon btn-danger"
                                    href="javascript:void(0);">
                                    <i class="ti ti-circle-dashed-plus fs-18"></i>
                                </a>
                            </div>

                            <div class="col-4">
                                <a class="dropdown-item border border-dashed rounded text-center py-2"
                                    href="javascript:void(0);">
                                    <span class="avatar-sm d-block mx-auto mb-1">
                                        <span
                                            class="avatar-title bg-primary-subtle text-primary rounded-circle">
                                            <i class="ti ti-calendar fs-18"></i>
                                        </span>
                                    </span>
                                    <span class="align-middle fw-medium">Calendar</span>
                                </a>
                            </div>

                            <div class="col-4">
                                <a class="dropdown-item border border-dashed rounded text-center py-2"
                                    href="javascript:void(0);">
                                    <span class="avatar-sm d-block mx-auto mb-1">
                                        <span
                                            class="avatar-title bg-primary-subtle text-primary rounded-circle">
                                            <i class="ti ti-message-circle fs-18"></i>
                                        </span>
                                    </span>
                                    <span class="align-middle fw-medium">Chat</span>
                                </a>
                            </div>

                            <div class="col-4">
                                <a class="dropdown-item border border-dashed rounded text-center py-2"
                                    href="javascript:void(0);">
                                    <span class="avatar-sm d-block mx-auto mb-1">
                                        <span
                                            class="avatar-title bg-primary-subtle text-primary rounded-circle">
                                            <i class="ti ti-folder fs-18"></i>
                                        </span>
                                    </span>
                                    <span class="align-middle fw-medium">Files</span>
                                </a>
                            </div>

                            <div class="col-4">
                                <a class="dropdown-item border border-dashed rounded text-center py-2"
                                    href="javascript:void(0);">
                                    <span class="avatar-sm d-block mx-auto mb-1">
                                        <span
                                            class="avatar-title bg-primary-subtle text-primary rounded-circle">
                                            <i class="ti ti-users fs-18"></i>
                                        </span>
                                    </span>
                                    <span class="align-middle fw-medium">Team</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End dropdown-menu -->
                </div>
                <!-- end dropdown-->
            </div>

            <div class="topbar-item"
                id="notification-dropdown-people">
                <div class="dropdown">
                    <button aria-expanded="false"
                        aria-haspopup="false"
                        class="topbar-link dropdown-toggle drop-arrow-none"
                        data-bs-auto-close="outside"
                        data-bs-toggle="dropdown"
                        type="button">
                        <i class="ti ti-bell topbar-link-icon animate-ring"></i>
                        <span class="badge text-bg-danger badge-circle topbar-badge">5</span>
                    </button>

                    <div class="dropdown-menu p-0 dropdown-menu-end dropdown-menu-lg">
                        <div class="px-3 py-2 border-bottom">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h6 class="m-0 fs-md fw-semibold">Notifications</h6>
                                </div>
                                <div class="col text-end">
                                    <a class="badge badge-soft-success badge-label py-1"
                                        href="index.html#!">07 Notifications</a>
                                </div>
                            </div>
                        </div>

                        <div data-simplebar=""
                            style="max-height: 300px">
                            <!-- Notification 1 -->
                            <div class="dropdown-item notification-item py-2 text-wrap"
                                id="message-1">
                                <span class="d-flex align-items-center gap-3">
                                    <span class="flex-shrink-0 position-relative">
                                        <img alt="User Avatar"
                                            class="avatar-md rounded-circle"
                                            src="assets/images/users/user-4.jpg" />
                                        <span
                                            class="position-absolute rounded-pill bg-success notification-badge">
                                            <i class="ti ti-bell align-middle"></i>
                                            <span class="visually-hidden">unread
                                                notification</span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1 text-muted">
                                        <span class="fw-medium text-body">Emily
                                            Johnson</span>
                                        commented on a task in
                                        <span class="fw-medium text-body">Design
                                            Sprint</span>
                                        <br />
                                        <span class="fs-xs">12 minutes ago</span>
                                    </span>
                                    <button
                                        class="flex-shrink-0 text-muted btn btn-link p-0 position-absolute end-0 me-2 d-none noti-close-btn"
                                        data-dismissible="#message-1"
                                        type="button">
                                        <i class="ti ti-square-rounded-x fs-xxl"></i>
                                    </button>
                                </span>
                            </div>

                            <!-- Notification 2 -->
                            <div class="dropdown-item notification-item py-2 text-wrap"
                                id="message-2">
                                <span class="d-flex align-items-center gap-3">
                                    <span class="flex-shrink-0 position-relative">
                                        <img alt="User Avatar"
                                            class="avatar-md rounded-circle"
                                            src="assets/images/users/user-5.jpg" />
                                        <span
                                            class="position-absolute rounded-pill bg-info notification-badge">
                                            <i class="ti ti-cloud-upload align-middle"></i>
                                            <span class="visually-hidden">upload
                                                notification</span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1 text-muted">
                                        <span class="fw-medium text-body">Michael
                                            Lee</span>
                                        uploaded files to
                                        <span class="fw-medium text-body">Marketing
                                            Assets</span>
                                        <br />
                                        <span class="fs-xs">25 minutes ago</span>
                                    </span>
                                    <button
                                        class="flex-shrink-0 text-muted btn btn-link p-0 position-absolute end-0 me-2 d-none noti-close-btn"
                                        data-dismissible="#message-2"
                                        type="button">
                                        <i class="ti ti-square-rounded-x fs-xxl"></i>
                                    </button>
                                </span>
                            </div>

                            <!-- Notification 3 - Server CPU Alert -->
                            <div class="dropdown-item notification-item py-2 text-wrap"
                                id="message-6">
                                <span class="d-flex align-items-center gap-3">
                                    <span class="flex-shrink-0 position-relative">
                                        <span
                                            class="avatar-md rounded-circle bg-light d-flex align-items-center justify-content-center">
                                            <i class="ti ti-database fs-4"></i>
                                        </span>
                                        <span
                                            class="position-absolute rounded-pill bg-danger notification-badge">
                                            <i class="ti ti-alert-circle align-middle"></i>
                                            <span class="visually-hidden">server
                                                alert</span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1 text-muted">
                                        <span class="fw-medium text-body">Server #3</span>
                                        CPU usage exceeded 90%
                                        <br />
                                        <span class="fs-xs">Just now</span>
                                    </span>
                                    <button
                                        class="flex-shrink-0 text-muted btn btn-link p-0 position-absolute end-0 me-2 d-none noti-close-btn"
                                        data-dismissible="#message-6"
                                        type="button">
                                        <i class="ti ti-square-rounded-x fs-xxl"></i>
                                    </button>
                                </span>
                            </div>

                            <!-- Notification 4 -->
                            <div class="dropdown-item notification-item py-2 text-wrap"
                                id="message-3">
                                <span class="d-flex align-items-center gap-3">
                                    <span class="flex-shrink-0 position-relative">
                                        <img alt="User Avatar"
                                            class="avatar-md rounded-circle"
                                            src="assets/images/users/user-6.jpg" />
                                        <span
                                            class="position-absolute rounded-pill bg-warning notification-badge">
                                            <i class="ti ti-alert-triangle align-middle"></i>
                                            <span class="visually-hidden">alert</span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1 text-muted">
                                        <span class="fw-medium text-body">Sophia Ray</span>
                                        flagged an issue in
                                        <span class="fw-medium text-body">Bug
                                            Tracker</span>
                                        <br />
                                        <span class="fs-xs">40 minutes ago</span>
                                    </span>
                                    <button
                                        class="flex-shrink-0 text-muted btn btn-link p-0 position-absolute end-0 me-2 d-none noti-close-btn"
                                        data-dismissible="#message-3"
                                        type="button">
                                        <i class="ti ti-square-rounded-x fs-xxl"></i>
                                    </button>
                                </span>
                            </div>

                            <!-- Notification 5 -->
                            <div class="dropdown-item notification-item py-2 text-wrap"
                                id="message-4">
                                <span class="d-flex align-items-center gap-3">
                                    <span class="flex-shrink-0 position-relative">
                                        <img alt="User Avatar"
                                            class="avatar-md rounded-circle"
                                            src="assets/images/users/user-7.jpg" />
                                        <span
                                            class="position-absolute rounded-pill bg-primary notification-badge">
                                            <i class="ti ti-calendar-event align-middle"></i>
                                            <span class="visually-hidden">event
                                                notification</span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1 text-muted">
                                        <span class="fw-medium text-body">David Kim</span>
                                        scheduled a meeting for
                                        <span class="fw-medium text-body">UX Review</span>
                                        <br />
                                        <span class="fs-xs">1 hour ago</span>
                                    </span>
                                    <button
                                        class="flex-shrink-0 text-muted btn btn-link p-0 position-absolute end-0 me-2 d-none noti-close-btn"
                                        data-dismissible="#message-4"
                                        type="button">
                                        <i class="ti ti-square-rounded-x fs-xxl"></i>
                                    </button>
                                </span>
                            </div>

                            <!-- Notification 6 -->
                            <div class="dropdown-item notification-item py-2 text-wrap"
                                id="message-5">
                                <span class="d-flex align-items-center gap-3">
                                    <span class="flex-shrink-0 position-relative">
                                        <img alt="User Avatar"
                                            class="avatar-md rounded-circle"
                                            src="assets/images/users/user-8.jpg" />
                                        <span
                                            class="position-absolute rounded-pill bg-secondary notification-badge">
                                            <i class="ti ti-edit align-middle"></i>
                                            <span class="visually-hidden">edit</span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1 text-muted">
                                        <span class="fw-medium text-body">Isabella
                                            White</span>
                                        updated the document in
                                        <span class="fw-medium text-body">Product
                                            Specs</span>
                                        <br />
                                        <span class="fs-xs">2 hours ago</span>
                                    </span>
                                    <button
                                        class="flex-shrink-0 text-muted btn btn-link p-0 position-absolute end-0 me-2 d-none noti-close-btn"
                                        data-dismissible="#message-5"
                                        type="button">
                                        <i class="ti ti-square-rounded-x fs-xxl"></i>
                                    </button>
                                </span>
                            </div>

                            <!-- Notification 7 - Deployment Success -->
                            <div class="dropdown-item notification-item py-2 text-wrap"
                                id="message-7">
                                <span class="d-flex align-items-center gap-3">
                                    <span class="flex-shrink-0 position-relative">
                                        <span
                                            class="avatar-md rounded-circle bg-light d-flex align-items-center justify-content-center">
                                            <i class="ti ti-rocket fs-4"></i>
                                        </span>
                                        <span
                                            class="position-absolute rounded-pill bg-success notification-badge">
                                            <i class="ti ti-check align-middle"></i>
                                            <span class="visually-hidden">deployment</span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1 text-muted">
                                        <span class="fw-medium text-body">Production
                                            Server</span>
                                        deployment completed successfully
                                        <br />
                                        <span class="fs-xs">30 minutes ago</span>
                                    </span>
                                    <button
                                        class="flex-shrink-0 text-muted btn btn-link p-0 position-absolute end-0 me-2 d-none noti-close-btn"
                                        data-dismissible="#message-7"
                                        type="button">
                                        <i class="ti ti-square-rounded-x fs-xxl"></i>
                                    </button>
                                </span>
                            </div>
                        </div>

                        <!-- All-->
                        <a class="dropdown-item text-center text-reset text-decoration-underline link-offset-2 fw-bold notify-item border-top border-light py-2"
                            href="javascript:void(0);">Read All Messages</a>
                    </div>
                    <!-- End dropdown-menu -->
                </div>
                <!-- end dropdown-->
            </div>

            <div class="topbar-item d-none d-md-flex"
                id="fullscreen-toggler">
                <button class="topbar-link"
                    data-toggle="fullscreen"
                    type="button">
                    <i class="ti ti-maximize topbar-link-icon"></i>
                    <i class="ti ti-minimize topbar-link-icon d-none"></i>
                </button>
            </div>

            <div class="topbar-item d-none d-xl-flex"
                id="monochrome-toggler">
                <button class="topbar-link"
                    data-toggle="monochrome"
                    id="monochrome-mode"
                    type="button">
                    <i class="ti ti-palette topbar-link-icon"></i>
                </button>
            </div>

            <div class="topbar-item d-none d-sm-flex">
                <button class="topbar-link btn-theme-setting"
                    data-bs-target="#theme-settings-offcanvas"
                    data-bs-toggle="offcanvas"
                    type="button">
                    <i class="ti ti-settings topbar-link-icon"></i>
                </button>
            </div>

            <div class="topbar-item"
                id="language-selector-rounded">
                <div class="dropdown">
                    <button aria-expanded="false"
                        aria-haspopup="false"
                        class="topbar-link fw-bold"
                        data-bs-toggle="dropdown"
                        type="button">
                        <img alt="user-image"
                            class="rounded-circle me-2"
                            height="18"
                            id="selected-language-image"
                            src="assets/images/flags/us.svg" />
                        <span id="selected-language-code">EN</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item"
                            data-translator-lang="en"
                            href="javascript:void(0);"
                            title="English">
                            <img alt="English"
                                class="me-1 rounded-circle"
                                data-translator-image=""
                                height="18"
                                src="assets/images/flags/us.svg" />
                            <span class="align-middle">English</span>
                        </a>
                        <a class="dropdown-item"
                            data-translator-lang="de"
                            href="javascript:void(0);"
                            title="German">
                            <img alt="German"
                                class="me-1 rounded-circle"
                                data-translator-image=""
                                height="18"
                                src="assets/images/flags/de.svg" />
                            <span class="align-middle">Deutsch</span>
                        </a>
                        <a class="dropdown-item"
                            data-translator-lang="it"
                            href="javascript:void(0);"
                            title="Italian">
                            <img alt="Italian"
                                class="me-1 rounded-circle"
                                data-translator-image=""
                                height="18"
                                src="assets/images/flags/it.svg" />
                            <span class="align-middle">Italiano</span>
                        </a>
                        <a class="dropdown-item"
                            data-translator-lang="es"
                            href="javascript:void(0);"
                            title="Spanish">
                            <img alt="Spanish"
                                class="me-1 rounded-circle"
                                data-translator-image=""
                                height="18"
                                src="assets/images/flags/es.svg" />
                            <span class="align-middle">Español</span>
                        </a>
                        <a class="dropdown-item"
                            data-translator-lang="ru"
                            href="javascript:void(0);"
                            title="Russian">
                            <img alt="Russian"
                                class="me-1 rounded-circle"
                                data-translator-image=""
                                height="18"
                                src="assets/images/flags/ru.svg" />
                            <span class="align-middle">Русский</span>
                        </a>
                        <a class="dropdown-item"
                            data-translator-lang="hi"
                            href="javascript:void(0);"
                            title="Hindi">
                            <img alt="Hindi"
                                class="me-1 rounded-circle"
                                data-translator-image=""
                                height="18"
                                src="assets/images/flags/in.svg" />
                            <span class="align-middle">हिन्दी</span>
                        </a>
                        <a class="dropdown-item"
                            data-translator-lang="ar"
                            href="javascript:void(0);"
                            title="Arabic">
                            <img alt="Arabic"
                                class="me-1 rounded-circle"
                                data-translator-image=""
                                height="18"
                                src="assets/images/flags/sa.svg" />
                            <span class="align-middle">عربي</span>
                        </a>
                    </div>
                    <!-- end dropdown-menu-->
                </div>
                <!-- end dropdown-->
            </div>

            <div class="topbar-item nav-user"
                id="user-dropdown-detailed">
                <div class="dropdown">
                    <a aria-expanded="false"
                        aria-haspopup="false"
                        class="topbar-link dropdown-toggle drop-arrow-none px-2"
                        data-bs-toggle="dropdown"
                        href="index.html#!">
                        <img alt="user-image"
                            class="rounded-circle me-lg-2 d-flex"
                            src="assets/images/users/user-1.jpg"
                            width="32" />
                        <div class="d-lg-flex align-items-center gap-1 d-none">
                            <span>
                                <h5 class="my-0 lh-1 pro-username">David Dev</h5>
                                <span class="fs-xs lh-1">Admin Head</span>
                            </span>
                            <i class="ti ti-chevron-down align-middle"></i>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- Header -->
                        <div class="dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Welcome back 👋!</h6>
                        </div>

                        <!-- My Profile -->
                        <a class="dropdown-item"
                            href="index.html#!">
                            <i class="ti ti-user-circle me-1 fs-lg align-middle"></i>
                            <span class="align-middle">Profile</span>
                        </a>

                        <!-- Notifications -->
                        <a class="dropdown-item"
                            href="javascript:void(0);">
                            <i class="ti ti-bell-ringing me-1 fs-lg align-middle"></i>
                            <span class="align-middle">Notifications</span>
                        </a>

                        <!-- Settings -->
                        <a class="dropdown-item"
                            href="javascript:void(0);">
                            <i class="ti ti-settings-2 me-1 fs-lg align-middle"></i>
                            <span class="align-middle">Account Settings</span>
                        </a>

                        <!-- Support -->
                        <a class="dropdown-item"
                            href="javascript:void(0);">
                            <i class="ti ti-headset me-1 fs-lg align-middle"></i>
                            <span class="align-middle">Support Center</span>
                        </a>

                        <!-- Divider -->
                        <div class="dropdown-divider"></div>

                        <!-- Lock -->
                        <a class="dropdown-item"
                            href="auth-lock-screen.html">
                            <i class="ti ti-lock me-1 fs-lg align-middle"></i>
                            <span class="align-middle">Lock Screen</span>
                        </a>

                        <!-- Logout -->
                        <a class="dropdown-item fw-semibold"
                            href="javascript:void(0);">
                            <i class="ti ti-logout me-1 fs-lg align-middle"></i>
                            <span class="align-middle">Log Out</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

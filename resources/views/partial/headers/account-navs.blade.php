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
            {{-- <a class="dropdown-item"
                href="javascript:void(0);">
                <i class="ti ti-bell-ringing me-1 fs-lg align-middle"></i>
                <span class="align-middle">Notifications</span>
            </a> --}}

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

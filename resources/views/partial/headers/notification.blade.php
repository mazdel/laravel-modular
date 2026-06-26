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
                            <span class="position-absolute rounded-pill bg-info notification-badge">
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

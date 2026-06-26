<div class="sidenav-menu">
    <!-- Brand Logo -->
    <a class="logo"
        href="index.html">
        <span class="logo logo-light">
            <span class="logo-lg"><img alt="logo"
                    src="assets/images/logo.png" /></span>
            <span class="logo-sm"><img alt="small logo"
                    src="assets/images/logo-sm.png" /></span>
        </span>

        <span class="logo logo-dark">
            <span class="logo-lg"><img alt="dark logo"
                    src="assets/images/logo-black.png" /></span>
            <span class="logo-sm"><img alt="small logo"
                    src="assets/images/logo-sm.png" /></span>
        </span>
    </a>

    <!-- Sidebar Hover Menu Toggle Button -->
    <button class="button-on-hover">
        <span class="btn-on-hover-icon"></span>
    </button>

    <!-- Full Sidebar Menu Close Button -->
    <button class="button-close-offcanvas">
        <i class="ti ti-menu-4 align-middle"></i>
    </button>

    <div class="scrollbar"
        data-simplebar="">
        <div class="sidenav-user"
            id="user-profile-settings"
            style="background: url(assets/images/user-bg-pattern.svg)">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <a class="link-reset"
                        href="index.html#!">
                        <img alt="user-image"
                            class="rounded-circle mb-2 avatar-md"
                            src="assets/images/users/user-1.jpg" />
                        <span class="sidenav-user-name fw-bold">David Dev</span>
                        <span class="fs-12 fw-semibold"
                            data-lang="user-role">Art Director</span>
                    </a>
                </div>
                <div>
                    <a aria-expanded="false"
                        aria-haspopup="false"
                        class="dropdown-toggle drop-arrow-none link-reset sidenav-user-set-icon"
                        data-bs-offset="0,12"
                        data-bs-toggle="dropdown"
                        href="index.html#!">
                        <i class="ti ti-settings fs-24 align-middle ms-1"></i>
                    </a>

                    <div class="dropdown-menu">
                        <!-- Header -->
                        <div class="dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Welcome back!</h6>
                        </div>

                        <!-- My Profile -->
                        <a class="dropdown-item"
                            href="index.html#!">
                            <i class="ti ti-user-circle me-1 fs-lg align-middle"></i>
                            <span class="align-middle">Profile</span>
                        </a>

                        <!-- Settings -->
                        <a class="dropdown-item"
                            href="javascript:void(0);">
                            <i class="ti ti-settings-2 me-1 fs-lg align-middle"></i>
                            <span class="align-middle">Account Settings</span>
                        </a>

                        <!-- Lock -->
                        <a class="dropdown-item"
                            href="auth-lock-screen.html">
                            <i class="ti ti-lock me-1 fs-lg align-middle"></i>
                            <span class="align-middle">Lock Screen</span>
                        </a>

                        <!-- Logout -->
                        <a class="dropdown-item text-danger fw-semibold"
                            href="javascript:void(0);">
                            <i class="ti ti-logout me-1 fs-lg align-middle"></i>
                            <span class="align-middle">Log Out</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!--- Sidenav Menu -->
        <div id="sidenav-menu">
            <ul class="side-nav">
                <li class="side-nav-title mt-2"
                    data-lang="main">Main</li>
                <li class="side-nav-item">
                    <a aria-controls="dashboards"
                        aria-expanded="false"
                        class="side-nav-link"
                        data-bs-toggle="collapse"
                        href="index.html#dashboards">
                        <span class="menu-icon"><i class="ti ti-dashboard"></i></span>
                        <span class="menu-text"
                            data-lang="dashboards">Dashboards</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse"
                        id="dashboards">
                        <ul class="sub-menu">
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="index.html">
                                    <span class="menu-text"
                                        data-lang="dashboard-ecommerce">Ecommerce</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="dashboard-analytics.html">
                                    <span class="menu-text"
                                        data-lang="dashboard-analytics">Analytics</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="dashboard-crm.html">
                                    <span class="menu-text"
                                        data-lang="dashboard-crm">CRM</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="dashboard-finance.html">
                                    <span class="menu-text"
                                        data-lang="dashboard-finance">Finance</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="dashboard-projects.html">
                                    <span class="menu-text"
                                        data-lang="dashboard-projects">Projects</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="side-nav-title mt-2"
                    data-lang="apps">Apps</li>
                <li class="side-nav-item">
                    <a aria-controls="ecommerce"
                        aria-expanded="false"
                        class="side-nav-link"
                        data-bs-toggle="collapse"
                        href="index.html#ecommerce">
                        <span class="menu-icon"><i class="ti ti-basket"></i></span>
                        <span class="menu-text"
                            data-lang="ecommerce">Ecommerce</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse"
                        id="ecommerce">
                        <ul class="sub-menu">
                            <li class="side-nav-item">
                                <a aria-controls="products"
                                    aria-expanded="false"
                                    class="side-nav-link"
                                    data-bs-toggle="collapse"
                                    href="index.html#products">
                                    <span class="menu-text"
                                        data-lang="products">Products</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse"
                                    id="products">
                                    <ul class="sub-menu">
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="apps-ecommerce-products.html">
                                                <span class="menu-text"
                                                    data-lang="apps-ecommerce-products">Products</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="apps-ecommerce-products-grid.html">
                                                <span class="menu-text"
                                                    data-lang="apps-ecommerce-products-grid">Products
                                                    Grid</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="apps-ecommerce-product-details.html">
                                                <span class="menu-text"
                                                    data-lang="apps-ecommerce-product-details">Product
                                                    Details</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="apps-ecommerce-product-add.html">
                                                <span class="menu-text"
                                                    data-lang="apps-ecommerce-product-add">Add
                                                    Product</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-ecommerce-categories.html">
                                    <span class="menu-text"
                                        data-lang="apps-ecommerce-categories">Categories</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a aria-controls="orders"
                                    aria-expanded="false"
                                    class="side-nav-link"
                                    data-bs-toggle="collapse"
                                    href="index.html#orders">
                                    <span class="menu-text"
                                        data-lang="orders">Orders</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse"
                                    id="orders">
                                    <ul class="sub-menu">
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="apps-ecommerce-orders.html">
                                                <span class="menu-text"
                                                    data-lang="apps-ecommerce-orders">Orders</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="apps-ecommerce-order-details.html">
                                                <span class="menu-text"
                                                    data-lang="apps-ecommerce-order-details">Order
                                                    Details</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="apps-ecommerce-order-add.html">
                                                <span class="menu-text"
                                                    data-lang="apps-ecommerce-order-add">Add/Edit
                                                    Order</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-ecommerce-customers.html">
                                    <span class="menu-text"
                                        data-lang="apps-ecommerce-customers">Customers</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-ecommerce-cart.html">
                                    <span class="menu-text"
                                        data-lang="apps-ecommerce-cart">Cart</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-ecommerce-checkout.html">
                                    <span class="menu-text"
                                        data-lang="apps-ecommerce-checkout">Checkout</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a aria-controls="sellers"
                                    aria-expanded="false"
                                    class="side-nav-link"
                                    data-bs-toggle="collapse"
                                    href="index.html#sellers">
                                    <span class="menu-text"
                                        data-lang="sellers">Sellers</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse"
                                    id="sellers">
                                    <ul class="sub-menu">
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="apps-ecommerce-sellers.html">
                                                <span class="menu-text"
                                                    data-lang="apps-ecommerce-sellers">Sellers</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="apps-ecommerce-seller-details.html">
                                                <span class="menu-text"
                                                    data-lang="apps-ecommerce-seller-details">Sellers
                                                    Details</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-ecommerce-refunds.html">
                                    <span class="menu-text"
                                        data-lang="apps-ecommerce-refunds">Refunds</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-ecommerce-reviews.html">
                                    <span class="menu-text"
                                        data-lang="apps-ecommerce-reviews">Reviews</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a aria-controls="inventory"
                                    aria-expanded="false"
                                    class="side-nav-link"
                                    data-bs-toggle="collapse"
                                    href="index.html#inventory">
                                    <span class="menu-text"
                                        data-lang="inventory">Inventory</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse"
                                    id="inventory">
                                    <ul class="sub-menu">
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="apps-ecommerce-warehouse.html">
                                                <span class="menu-text"
                                                    data-lang="apps-ecommerce-warehouse">Warehouse</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="apps-ecommerce-product-stocks.html">
                                                <span class="menu-text"
                                                    data-lang="apps-ecommerce-product-stocks">Product
                                                    Stocks</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="apps-ecommerce-purchased-orders.html">
                                                <span class="menu-text"
                                                    data-lang="apps-ecommerce-purchased-orders">Purchased
                                                    Orders</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="side-nav-item">
                                <a aria-controls="reports"
                                    aria-expanded="false"
                                    class="side-nav-link"
                                    data-bs-toggle="collapse"
                                    href="index.html#reports">
                                    <span class="menu-text"
                                        data-lang="reports">Reports</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse"
                                    id="reports">
                                    <ul class="sub-menu">
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="apps-ecommerce-product-views.html">
                                                <span class="menu-text"
                                                    data-lang="apps-ecommerce-product-views">Product
                                                    Views</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="apps-ecommerce-sales.html">
                                                <span class="menu-text"
                                                    data-lang="apps-ecommerce-sales">Sales</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-ecommerce-attributes.html">
                                    <span class="menu-text"
                                        data-lang="apps-ecommerce-attributes">Attributes</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-ecommerce-settings.html">
                                    <span class="menu-text"
                                        data-lang="apps-ecommerce-settings">Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="side-nav-item">
                    <a class="side-nav-link"
                        href="apps-chat.html">
                        <span class="menu-icon"><i class="ti ti-message"></i></span>
                        <span class="menu-text"
                            data-lang="apps-chat">Chat</span>
                    </a>
                </li>
                <li class="side-nav-item">
                    <a aria-controls="projects"
                        aria-expanded="false"
                        class="side-nav-link"
                        data-bs-toggle="collapse"
                        href="index.html#projects">
                        <span class="menu-icon"><i class="ti ti-briefcase"></i></span>
                        <span class="menu-text"
                            data-lang="projects">Projects</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse"
                        id="projects">
                        <ul class="sub-menu">
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-projects-grid.html">
                                    <span class="menu-text"
                                        data-lang="apps-projects-grid">My Projects</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-projects-list.html">
                                    <span class="menu-text"
                                        data-lang="apps-projects-list">Projects List</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-projects-details.html">
                                    <span class="menu-text"
                                        data-lang="apps-projects-details">View
                                        Project</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-projects-kanban.html">
                                    <span class="menu-text"
                                        data-lang="apps-projects-kanban">Kanban
                                        Board</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-projects-team-board.html">
                                    <span class="menu-text"
                                        data-lang="apps-projects-team-board">Team
                                        Board</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-projects-activity.html">
                                    <span class="menu-text"
                                        data-lang="apps-projects-activity">Activity
                                        Steam</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="side-nav-item">
                    <a aria-controls="tasks"
                        aria-expanded="false"
                        class="side-nav-link"
                        data-bs-toggle="collapse"
                        href="index.html#tasks">
                        <span class="menu-icon"><i class="ti ti-list-check"></i></span>
                        <span class="menu-text"
                            data-lang="tasks">Tasks</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse"
                        id="tasks">
                        <ul class="sub-menu">
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-task-list.html">
                                    <span class="menu-text"
                                        data-lang="apps-task-list">Task List</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-task-details.html">
                                    <span class="menu-text"
                                        data-lang="apps-task-details">Task Details</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-task-create.html">
                                    <span class="menu-text"
                                        data-lang="apps-task-create">Create Task</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="side-nav-item">
                    <a aria-controls="invoice"
                        aria-expanded="false"
                        class="side-nav-link"
                        data-bs-toggle="collapse"
                        href="index.html#invoice">
                        <span class="menu-icon"><i class="ti ti-invoice"></i></span>
                        <span class="menu-text"
                            data-lang="invoice">Invoice</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse"
                        id="invoice">
                        <ul class="sub-menu">
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-invoice-list.html">
                                    <span class="menu-text"
                                        data-lang="apps-invoice-list">Invoices</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-invoice-details.html">
                                    <span class="menu-text"
                                        data-lang="apps-invoice-details">Single
                                        Invoice</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-invoice-create.html">
                                    <span class="menu-text"
                                        data-lang="apps-invoice-create">New Invoice</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="side-nav-item">
                    <a aria-controls="crm"
                        aria-expanded="false"
                        class="side-nav-link"
                        data-bs-toggle="collapse"
                        href="index.html#crm">
                        <span class="menu-icon"><i class="ti ti-heart-handshake"></i></span>
                        <span class="menu-text"
                            data-lang="crm">CRM</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse"
                        id="crm">
                        <ul class="sub-menu">
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-crm-contacts.html">
                                    <span class="menu-text"
                                        data-lang="apps-crm-contacts">Contacts</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-crm-opportunities.html">
                                    <span class="menu-text"
                                        data-lang="apps-crm-opportunities">Opportunities</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-crm-deals.html">
                                    <span class="menu-text"
                                        data-lang="apps-crm-deals">Deals</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-crm-leads.html">
                                    <span class="menu-text"
                                        data-lang="apps-crm-leads">Leads</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-crm-pipeline.html">
                                    <span class="menu-text"
                                        data-lang="apps-crm-pipeline">Pipeline</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-crm-campaign.html">
                                    <span class="menu-text"
                                        data-lang="apps-crm-campaign">Campaign</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-crm-proposals.html">
                                    <span class="menu-text"
                                        data-lang="apps-crm-proposals">Proposals</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-crm-estimations.html">
                                    <span class="menu-text"
                                        data-lang="apps-crm-estimations">Estimations</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-crm-customers.html">
                                    <span class="menu-text"
                                        data-lang="apps-crm-customers">Customers</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-crm-activities.html">
                                    <span class="menu-text"
                                        data-lang="apps-crm-activities">Activities</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="side-nav-item">
                    <a aria-controls="users"
                        aria-expanded="false"
                        class="side-nav-link"
                        data-bs-toggle="collapse"
                        href="index.html#users">
                        <span class="menu-icon"><i class="ti ti-users"></i></span>
                        <span class="menu-text"
                            data-lang="users">Users</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse"
                        id="users">
                        <ul class="sub-menu">
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-users-contacts.html">
                                    <span class="menu-text"
                                        data-lang="apps-users-contacts">Contacts</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-users-profile.html">
                                    <span class="menu-text"
                                        data-lang="apps-users-profile">Profile</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-users-account-settings.html">
                                    <span class="menu-text"
                                        data-lang="apps-users-account-settings">Account
                                        Settings</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-users-roles.html">
                                    <span class="menu-text"
                                        data-lang="apps-users-roles">Roles</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-users-role-details.html">
                                    <span class="menu-text"
                                        data-lang="apps-users-role-details">Role
                                        Details</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-users-permissions.html">
                                    <span class="menu-text"
                                        data-lang="apps-users-permissions">Permissions</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="side-nav-item">
                    <a aria-controls="finance"
                        aria-expanded="false"
                        class="side-nav-link"
                        data-bs-toggle="collapse"
                        href="index.html#finance">
                        <span class="menu-icon"><i class="ti ti-wallet"></i></span>
                        <span class="menu-text"
                            data-lang="finance">Finance</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse"
                        id="finance">
                        <ul class="sub-menu">
                            <li class="side-nav-item">
                                <a aria-controls="expenses"
                                    aria-expanded="false"
                                    class="side-nav-link"
                                    data-bs-toggle="collapse"
                                    href="index.html#expenses">
                                    <span class="menu-text"
                                        data-lang="expenses">Expenses</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse"
                                    id="expenses">
                                    <ul class="sub-menu">
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="apps-finance-expenses.html">
                                                <span class="menu-text"
                                                    data-lang="apps-finance-expenses">Expenses</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="apps-finance-expense-category.html">
                                                <span class="menu-text"
                                                    data-lang="apps-finance-expense-category">Expense
                                                    Category</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-finance-income.html">
                                    <span class="menu-text"
                                        data-lang="apps-finance-income">Income</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-finance-transactions.html">
                                    <span class="menu-text"
                                        data-lang="apps-finance-transactions">Transactions</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-finance-banks-cards.html">
                                    <span class="menu-text"
                                        data-lang="apps-finance-banks-cards">Banks &amp;
                                        Cards</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="side-nav-item">
                    <a aria-controls="hrm"
                        aria-expanded="false"
                        class="side-nav-link"
                        data-bs-toggle="collapse"
                        href="index.html#hrm">
                        <span class="menu-icon"><i class="ti ti-accessible"></i></span>
                        <span class="menu-text"
                            data-lang="hrm">HRM</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse"
                        id="hrm">
                        <ul class="sub-menu">
                            <li class="side-nav-item">
                                <a aria-controls="staffs"
                                    aria-expanded="false"
                                    class="side-nav-link"
                                    data-bs-toggle="collapse"
                                    href="index.html#staffs">
                                    <span class="menu-text"
                                        data-lang="staffs">Staffs</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse"
                                    id="staffs">
                                    <ul class="sub-menu">
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="apps-hrm-staffs.html">
                                                <span class="menu-text"
                                                    data-lang="apps-hrm-staffs">Staffs
                                                    List</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="apps-hrm-staff-profile.html">
                                                <span class="menu-text"
                                                    data-lang="apps-hrm-staff-profile">Staff
                                                    Profile</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="apps-hrm-staff-add.html">
                                                <span class="menu-text"
                                                    data-lang="apps-hrm-staff-add">Add
                                                    Staffs</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-hrm-departments.html">
                                    <span class="menu-text"
                                        data-lang="apps-hrm-departments">Departments</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-hrm-attendance.html">
                                    <span class="menu-text"
                                        data-lang="apps-hrm-attendance">Attendance</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a aria-controls="leaves"
                                    aria-expanded="false"
                                    class="side-nav-link"
                                    data-bs-toggle="collapse"
                                    href="index.html#leaves">
                                    <span class="menu-text"
                                        data-lang="leaves">Leaves</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse"
                                    id="leaves">
                                    <ul class="sub-menu">
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="apps-hrm-leaves.html">
                                                <span class="menu-text"
                                                    data-lang="apps-hrm-leaves">Leaves</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="apps-hrm-leave-add.html">
                                                <span class="menu-text"
                                                    data-lang="apps-hrm-leave-add">Add
                                                    Leave</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-hrm-holidays.html">
                                    <span class="menu-text"
                                        data-lang="apps-hrm-holidays">Holidays</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-hrm-payroll.html">
                                    <span class="menu-text"
                                        data-lang="apps-hrm-payroll">Payroll</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-hrm-create-salary-slip.html">
                                    <span class="menu-text"
                                        data-lang="apps-hrm-create-salary-slip">Create
                                        Salary Slip</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="side-nav-item">
                    <a aria-controls="email"
                        aria-expanded="false"
                        class="side-nav-link"
                        data-bs-toggle="collapse"
                        href="index.html#email">
                        <span class="menu-icon"><i class="ti ti-mailbox"></i></span>
                        <span class="menu-text"
                            data-lang="email">Email</span>
                        <span class="badge bg-danger text-white">New</span>
                    </a>
                    <div class="collapse"
                        id="email">
                        <ul class="sub-menu">
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-email-inbox.html">
                                    <span class="menu-text"
                                        data-lang="apps-email-inbox">Inbox</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-email-details.html">
                                    <span class="menu-text"
                                        data-lang="apps-email-details">Details</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-email-compose.html">
                                    <span class="menu-text"
                                        data-lang="apps-email-compose">Compose</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="side-nav-item">
                    <a aria-controls="support-center"
                        aria-expanded="false"
                        class="side-nav-link"
                        data-bs-toggle="collapse"
                        href="index.html#support-center">
                        <span class="menu-icon"><i class="ti ti-headset"></i></span>
                        <span class="menu-text"
                            data-lang="support-center">Support Center</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse"
                        id="support-center">
                        <ul class="sub-menu">
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-ticket-list.html">
                                    <span class="menu-text"
                                        data-lang="apps-ticket-list">Ticket List</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-ticket-details.html">
                                    <span class="menu-text"
                                        data-lang="apps-ticket-details">Ticket
                                        Details</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-ticket-create.html">
                                    <span class="menu-text"
                                        data-lang="apps-ticket-create">New Ticket</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="side-nav-item">
                    <a aria-controls="promo"
                        aria-expanded="false"
                        class="side-nav-link"
                        data-bs-toggle="collapse"
                        href="index.html#promo">
                        <span class="menu-icon"><i class="ti ti-discount"></i></span>
                        <span class="menu-text"
                            data-lang="promo">Promo</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse"
                        id="promo">
                        <ul class="sub-menu">
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-promo-coupons.html">
                                    <span class="menu-text"
                                        data-lang="apps-promo-coupons">Coupons</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-promo-gift-cards.html">
                                    <span class="menu-text"
                                        data-lang="apps-promo-gift-cards">Gift
                                        Cards</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-promo-discounts.html">
                                    <span class="menu-text"
                                        data-lang="apps-promo-discounts">Discounts</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="side-nav-item">
                    <a aria-controls="more-apps"
                        aria-expanded="false"
                        class="side-nav-link"
                        data-bs-toggle="collapse"
                        href="index.html#more-apps">
                        <span class="menu-icon"><i class="ti ti-apps"></i></span>
                        <span class="menu-text"
                            data-lang="more-apps">More Apps</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse"
                        id="more-apps">
                        <ul class="sub-menu">
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-social-feed.html">
                                    <span class="menu-text"
                                        data-lang="apps-social-feed">Social Feed</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-pro-ai.html">
                                    <span class="menu-text"
                                        data-lang="apps-pro-ai">Pro AI</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-file-manager.html">
                                    <span class="menu-text"
                                        data-lang="apps-file-manager">File Manager</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-calendar.html">
                                    <span class="menu-text"
                                        data-lang="apps-calendar">Calendar</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-companies.html">
                                    <span class="menu-text"
                                        data-lang="apps-companies">Companies</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-todo.html">
                                    <span class="menu-text"
                                        data-lang="apps-todo">Todo</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-pin-board.html">
                                    <span class="menu-text"
                                        data-lang="apps-pin-board">Pin Board</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-clients.html">
                                    <span class="menu-text"
                                        data-lang="apps-clients">Clients</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-outlook.html">
                                    <span class="menu-text"
                                        data-lang="apps-outlook">Outlook View</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-vote-list.html">
                                    <span class="menu-text"
                                        data-lang="apps-vote-list">Vote List</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-issue-tracker.html">
                                    <span class="menu-text"
                                        data-lang="apps-issue-tracker">Issue
                                        Tracker</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-api-keys.html">
                                    <span class="menu-text"
                                        data-lang="apps-api-keys">API Keys</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="apps-manage.html">
                                    <span class="menu-text"
                                        data-lang="apps-manage">Manage Apps</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a aria-controls="blog"
                                    aria-expanded="false"
                                    class="side-nav-link"
                                    data-bs-toggle="collapse"
                                    href="index.html#blog">
                                    <span class="menu-text"
                                        data-lang="blog">Blog</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse"
                                    id="blog">
                                    <ul class="sub-menu">
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="apps-blog-list.html">
                                                <span class="menu-text"
                                                    data-lang="apps-blog-list">Blog
                                                    List</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="apps-blog-grid.html">
                                                <span class="menu-text"
                                                    data-lang="apps-blog-grid">Blog
                                                    Grid</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="apps-blog-article.html">
                                                <span class="menu-text"
                                                    data-lang="apps-blog-article">Article</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="apps-blog-add.html">
                                                <span class="menu-text"
                                                    data-lang="apps-blog-add">Add
                                                    Article</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="side-nav-item">
                                <a aria-controls="forum"
                                    aria-expanded="false"
                                    class="side-nav-link"
                                    data-bs-toggle="collapse"
                                    href="index.html#forum">
                                    <span class="menu-text"
                                        data-lang="forum">Forum</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse"
                                    id="forum">
                                    <ul class="sub-menu">
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="apps-forum-view.html">
                                                <span class="menu-text"
                                                    data-lang="apps-forum-view">Forum
                                                    View</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="apps-forum-post.html">
                                                <span class="menu-text"
                                                    data-lang="apps-forum-post">Forum
                                                    Post</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="side-nav-title mt-2"
                    data-lang="custom-pages">
                    Custom Pages
                </li>
                <li class="side-nav-item">
                    <a aria-controls="pages"
                        aria-expanded="false"
                        class="side-nav-link"
                        data-bs-toggle="collapse"
                        href="index.html#pages">
                        <span class="menu-icon"><i class="ti ti-files"></i></span>
                        <span class="menu-text"
                            data-lang="pages">Pages</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse"
                        id="pages">
                        <ul class="sub-menu">
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="pages-about-us.html">
                                    <span class="menu-text"
                                        data-lang="pages-about-us">About Us</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="pages-contact-us.html">
                                    <span class="menu-text"
                                        data-lang="pages-contact-us">Contact Us</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="pages-pricing.html">
                                    <span class="menu-text"
                                        data-lang="pages-pricing">Pricing</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="pages-empty.html">
                                    <span class="menu-text"
                                        data-lang="pages-empty">Empty Page</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="pages-timeline.html">
                                    <span class="menu-text"
                                        data-lang="pages-timeline">Timeline</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="pages-gallery.html">
                                    <span class="menu-text"
                                        data-lang="pages-gallery">Gallery</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="pages-faq.html">
                                    <span class="menu-text"
                                        data-lang="pages-faq">FAQ</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="pages-sitemap.html">
                                    <span class="menu-text"
                                        data-lang="pages-sitemap">Sitemap</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="pages-search-results.html">
                                    <span class="menu-text"
                                        data-lang="pages-search-results">Search
                                        Results</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="pages-coming-soon.html">
                                    <span class="menu-text"
                                        data-lang="pages-coming-soon">Coming Soon</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="pages-privacy-policy.html">
                                    <span class="menu-text"
                                        data-lang="pages-privacy-policy">Privacy
                                        Policy</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="pages-terms-conditions.html">
                                    <span class="menu-text"
                                        data-lang="pages-terms-conditions">Terms &amp;
                                        Conditions</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="side-nav-item">
                    <a aria-controls="plugins"
                        aria-expanded="false"
                        class="side-nav-link"
                        data-bs-toggle="collapse"
                        href="index.html#plugins">
                        <span class="menu-icon"><i class="ti ti-cpu"></i></span>
                        <span class="menu-text"
                            data-lang="plugins">Plugins</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse"
                        id="plugins">
                        <ul class="sub-menu">
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="plugins-sortable.html">
                                    <span class="menu-text"
                                        data-lang="plugins-sortable">Sortable List</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="plugins-pdf-viewer.html">
                                    <span class="menu-text"
                                        data-lang="plugins-pdf-viewer">PDF Viewer</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="plugins-i18.html">
                                    <span class="menu-text"
                                        data-lang="plugins-i18">i18 Support</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="plugins-sweet-alerts.html">
                                    <span class="menu-text"
                                        data-lang="plugins-sweet-alerts">Sweet
                                        Alerts</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="plugins-idle-timer.html">
                                    <span class="menu-text"
                                        data-lang="plugins-idle-timer">Idle Timer</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="plugins-pass-meter.html">
                                    <span class="menu-text"
                                        data-lang="plugins-pass-meter">Password
                                        Meter</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="plugins-clipboard.html">
                                    <span class="menu-text"
                                        data-lang="plugins-clipboard">Clipboard</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="plugins-tree-view.html">
                                    <span class="menu-text"
                                        data-lang="plugins-tree-view">Tree View</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="plugins-masonry.html">
                                    <span class="menu-text"
                                        data-lang="plugins-masonry">Masonry</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="plugins-tour.html">
                                    <span class="menu-text"
                                        data-lang="plugins-tour">Tour</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="plugins-animation.html">
                                    <span class="menu-text"
                                        data-lang="plugins-animation">Animation</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="plugins-video-player.html">
                                    <span class="menu-text"
                                        data-lang="plugins-video-player">Video
                                        Player</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="side-nav-item">
                    <a aria-controls="authentication"
                        aria-expanded="false"
                        class="side-nav-link"
                        data-bs-toggle="collapse"
                        href="index.html#authentication">
                        <span class="menu-icon"><i class="ti ti-password-user"></i></span>
                        <span class="menu-text"
                            data-lang="authentication">Authentication</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse"
                        id="authentication">
                        <ul class="sub-menu">
                            <li class="side-nav-item">
                                <a aria-controls="auth-basic"
                                    aria-expanded="false"
                                    class="side-nav-link"
                                    data-bs-toggle="collapse"
                                    href="index.html#auth-basic">
                                    <span class="menu-text"
                                        data-lang="auth-basic">Basic</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse"
                                    id="auth-basic">
                                    <ul class="sub-menu">
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="auth-sign-in.html">
                                                <span class="menu-text"
                                                    data-lang="auth-sign-in">Sign
                                                    In</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="auth-sign-up.html">
                                                <span class="menu-text"
                                                    data-lang="auth-sign-up">Sign
                                                    Up</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="auth-reset-pass.html">
                                                <span class="menu-text"
                                                    data-lang="auth-reset-pass">Reset
                                                    Password</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="auth-new-pass.html">
                                                <span class="menu-text"
                                                    data-lang="auth-new-pass">New
                                                    Password</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="auth-two-factor.html">
                                                <span class="menu-text"
                                                    data-lang="auth-two-factor">Two
                                                    Factor</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="auth-lock-screen.html">
                                                <span class="menu-text"
                                                    data-lang="auth-lock-screen">Lock
                                                    Screen</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="auth-success-mail.html">
                                                <span class="menu-text"
                                                    data-lang="auth-success-mail">Success
                                                    Mail</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="auth-login-pin.html">
                                                <span class="menu-text"
                                                    data-lang="auth-login-pin">Login with
                                                    PIN</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="auth-delete-account.html">
                                                <span class="menu-text"
                                                    data-lang="auth-delete-account">Delete
                                                    Account</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="side-nav-item">
                                <a aria-controls="auth-card"
                                    aria-expanded="false"
                                    class="side-nav-link"
                                    data-bs-toggle="collapse"
                                    href="index.html#auth-card">
                                    <span class="menu-text"
                                        data-lang="auth-card">Card</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse"
                                    id="auth-card">
                                    <ul class="sub-menu">
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="auth-card-sign-in.html">
                                                <span class="menu-text"
                                                    data-lang="auth-card-sign-in">Sign
                                                    In</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="auth-card-sign-up.html">
                                                <span class="menu-text"
                                                    data-lang="auth-card-sign-up">Sign
                                                    Up</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="auth-card-reset-pass.html">
                                                <span class="menu-text"
                                                    data-lang="auth-card-reset-pass">Reset
                                                    Password</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="auth-card-new-pass.html">
                                                <span class="menu-text"
                                                    data-lang="auth-card-new-pass">New
                                                    Password</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="auth-card-two-factor.html">
                                                <span class="menu-text"
                                                    data-lang="auth-card-two-factor">Two
                                                    Factor</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="auth-card-lock-screen.html">
                                                <span class="menu-text"
                                                    data-lang="auth-card-lock-screen">Lock
                                                    Screen</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="auth-card-success-mail.html">
                                                <span class="menu-text"
                                                    data-lang="auth-card-success-mail">Success
                                                    Mail</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="auth-card-login-pin.html">
                                                <span class="menu-text"
                                                    data-lang="auth-card-login-pin">Login
                                                    with PIN</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="auth-card-delete-account.html">
                                                <span class="menu-text"
                                                    data-lang="auth-card-delete-account">Delete
                                                    Account</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="side-nav-item">
                                <a aria-controls="auth-split"
                                    aria-expanded="false"
                                    class="side-nav-link"
                                    data-bs-toggle="collapse"
                                    href="index.html#auth-split">
                                    <span class="menu-text"
                                        data-lang="auth-split">Split</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse"
                                    id="auth-split">
                                    <ul class="sub-menu">
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="auth-split-sign-in.html">
                                                <span class="menu-text"
                                                    data-lang="auth-split-sign-in">Sign
                                                    In</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="auth-split-sign-up.html">
                                                <span class="menu-text"
                                                    data-lang="auth-split-sign-up">Sign
                                                    Up</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="auth-split-reset-pass.html">
                                                <span class="menu-text"
                                                    data-lang="auth-split-reset-pass">Reset
                                                    Password</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="auth-split-new-pass.html">
                                                <span class="menu-text"
                                                    data-lang="auth-split-new-pass">New
                                                    Password</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="auth-split-two-factor.html">
                                                <span class="menu-text"
                                                    data-lang="auth-split-two-factor">Two
                                                    Factor</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="auth-split-lock-screen.html">
                                                <span class="menu-text"
                                                    data-lang="auth-split-lock-screen">Lock
                                                    Screen</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="auth-split-success-mail.html">
                                                <span class="menu-text"
                                                    data-lang="auth-split-success-mail">Success
                                                    Mail</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="auth-split-login-pin.html">
                                                <span class="menu-text"
                                                    data-lang="auth-split-login-pin">Login
                                                    with PIN</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="auth-split-delete-account.html">
                                                <span class="menu-text"
                                                    data-lang="auth-split-delete-account">Delete
                                                    Account</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="side-nav-item">
                    <a aria-controls="error-pages"
                        aria-expanded="false"
                        class="side-nav-link"
                        data-bs-toggle="collapse"
                        href="index.html#error-pages">
                        <span class="menu-icon"><i class="ti ti-alert-triangle"></i></span>
                        <span class="menu-text"
                            data-lang="error-pages">Error Pages</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse"
                        id="error-pages">
                        <ul class="sub-menu">
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="error-400.html">
                                    <span class="menu-text"
                                        data-lang="error-400">400 Bad Request</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="error-401.html">
                                    <span class="menu-text"
                                        data-lang="error-401">401 Unauthorized</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="error-403.html">
                                    <span class="menu-text"
                                        data-lang="error-403">403 Forbidden</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="error-404.html">
                                    <span class="menu-text"
                                        data-lang="error-404">404 Not Found</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="error-408.html">
                                    <span class="menu-text"
                                        data-lang="error-408">408 Request Timeout</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="error-500.html">
                                    <span class="menu-text"
                                        data-lang="error-500">500 Internal Server</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="error-maintenance.html">
                                    <span class="menu-text"
                                        data-lang="error-maintenance">Maintenance</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="side-nav-title mt-2"
                    data-lang="layouts">Layouts</li>
                <li class="side-nav-item">
                    <a aria-controls="layout-options"
                        aria-expanded="false"
                        class="side-nav-link"
                        data-bs-toggle="collapse"
                        href="index.html#layout-options">
                        <span class="menu-icon"><i class="ti ti-layout"></i></span>
                        <span class="menu-text"
                            data-lang="layout-options">Layout Options</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse"
                        id="layout-options">
                        <ul class="sub-menu">
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="layouts-horizontal.html"
                                    target="_blank">
                                    <span class="menu-text"
                                        data-lang="layouts-horizontal">Horizontal</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="layouts-boxed.html"
                                    target="_blank">
                                    <span class="menu-text"
                                        data-lang="layouts-boxed">Boxed</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="layouts-scrollable.html"
                                    target="_blank">
                                    <span class="menu-text"
                                        data-lang="layouts-scrollable">Scrollable</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="layouts-compact.html"
                                    target="_blank">
                                    <span class="menu-text"
                                        data-lang="layouts-compact">Compact</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="layouts-preloader.html"
                                    target="_blank">
                                    <span class="menu-text"
                                        data-lang="layouts-preloader">Preloader</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="side-nav-item">
                    <a aria-controls="sidebars"
                        aria-expanded="false"
                        class="side-nav-link"
                        data-bs-toggle="collapse"
                        href="index.html#sidebars">
                        <span class="menu-icon"><i
                                class="ti ti-layout-sidebar-inactive"></i></span>
                        <span class="menu-text"
                            data-lang="sidebars">Sidebars</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse"
                        id="sidebars">
                        <ul class="sub-menu">
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="layouts-sidebar-light.html"
                                    target="_blank">
                                    <span class="menu-text"
                                        data-lang="layouts-sidebar-light">Light
                                        Menu</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="layouts-sidebar-gradient.html"
                                    target="_blank">
                                    <span class="menu-text"
                                        data-lang="layouts-sidebar-gradient">Gradient
                                        Menu</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="layouts-sidebar-gray.html"
                                    target="_blank">
                                    <span class="menu-text"
                                        data-lang="layouts-sidebar-gray">Gray Menu</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="layouts-sidebar-image.html"
                                    target="_blank">
                                    <span class="menu-text"
                                        data-lang="layouts-sidebar-image">Image
                                        Menu</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="layouts-sidebar-compact.html"
                                    target="_blank">
                                    <span class="menu-text"
                                        data-lang="layouts-sidebar-compact">Compact
                                        Menu</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="layouts-sidebar-on-hover.html"
                                    target="_blank">
                                    <span class="menu-text"
                                        data-lang="layouts-sidebar-on-hover">On Hover
                                        Menu</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="layouts-sidebar-offcanvas.html"
                                    target="_blank">
                                    <span class="menu-text"
                                        data-lang="layouts-sidebar-offcanvas">Offcanvas
                                        Menu</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="layouts-sidebar-no-icons.html"
                                    target="_blank">
                                    <span class="menu-text"
                                        data-lang="layouts-sidebar-no-icons">No Icons with
                                        Lines</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="layouts-sidebar-with-lines.html"
                                    target="_blank">
                                    <span class="menu-text"
                                        data-lang="layouts-sidebar-with-lines">Sidebar
                                        with Lines</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="side-nav-item">
                    <a aria-controls="topbar"
                        aria-expanded="false"
                        class="side-nav-link"
                        data-bs-toggle="collapse"
                        href="index.html#topbar">
                        <span class="menu-icon"><i class="ti ti-layout-bottombar"></i></span>
                        <span class="menu-text"
                            data-lang="topbar">Topbar</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse"
                        id="topbar">
                        <ul class="sub-menu">
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="layouts-topbar-dark.html"
                                    target="_blank">
                                    <span class="menu-text"
                                        data-lang="layouts-topbar-dark">Dark Topbar</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="layouts-topbar-gray.html"
                                    target="_blank">
                                    <span class="menu-text"
                                        data-lang="layouts-topbar-gray">Gray Topbar</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="layouts-topbar-gradient.html"
                                    target="_blank">
                                    <span class="menu-text"
                                        data-lang="layouts-topbar-gradient">Gradient
                                        Topbar</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="side-nav-title mt-2"
                    data-lang="components">
                    Components
                </li>
                <li class="side-nav-item">
                    <a aria-controls="base-ui"
                        aria-expanded="false"
                        class="side-nav-link"
                        data-bs-toggle="collapse"
                        href="index.html#base-ui">
                        <span class="menu-icon"><i class="ti ti-components"></i></span>
                        <span class="menu-text"
                            data-lang="base-ui">Base UI</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse"
                        id="base-ui">
                        <ul class="sub-menu">
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="ui-accordions.html">
                                    <span class="menu-text"
                                        data-lang="ui-accordions">Accordions</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="ui-alerts.html">
                                    <span class="menu-text"
                                        data-lang="ui-alerts">Alerts</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="ui-buttons.html">
                                    <span class="menu-text"
                                        data-lang="ui-buttons">Buttons</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="ui-badges.html">
                                    <span class="menu-text"
                                        data-lang="ui-badges">Badges</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="ui-colors.html">
                                    <span class="menu-text"
                                        data-lang="ui-colors">Colors</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="ui-breadcrumb.html">
                                    <span class="menu-text"
                                        data-lang="ui-breadcrumb">Breadcrumb</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="ui-cards.html">
                                    <span class="menu-text"
                                        data-lang="ui-cards">Cards</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="ui-carousel.html">
                                    <span class="menu-text"
                                        data-lang="ui-carousel">Carousel</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="ui-collapse.html">
                                    <span class="menu-text"
                                        data-lang="ui-collapse">Collapse</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="ui-images.html">
                                    <span class="menu-text"
                                        data-lang="ui-images">Images</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="ui-dropdowns.html">
                                    <span class="menu-text"
                                        data-lang="ui-dropdowns">Dropdowns</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="ui-videos.html">
                                    <span class="menu-text"
                                        data-lang="ui-videos">Videos</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="ui-grid.html">
                                    <span class="menu-text"
                                        data-lang="ui-grid">Grid Options</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="ui-links.html">
                                    <span class="menu-text"
                                        data-lang="ui-links">Links</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="ui-list-group.html">
                                    <span class="menu-text"
                                        data-lang="ui-list-group">List Group</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="ui-modals.html">
                                    <span class="menu-text"
                                        data-lang="ui-modals">Modals</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="ui-notifications.html">
                                    <span class="menu-text"
                                        data-lang="ui-notifications">Notifications</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="ui-offcanvas.html">
                                    <span class="menu-text"
                                        data-lang="ui-offcanvas">Offcanvas</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="ui-placeholders.html">
                                    <span class="menu-text"
                                        data-lang="ui-placeholders">Placeholders</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="ui-pagination.html">
                                    <span class="menu-text"
                                        data-lang="ui-pagination">Pagination</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="ui-popovers.html">
                                    <span class="menu-text"
                                        data-lang="ui-popovers">Popovers</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="ui-progress.html">
                                    <span class="menu-text"
                                        data-lang="ui-progress">Progress</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="ui-scrollspy.html">
                                    <span class="menu-text"
                                        data-lang="ui-scrollspy">Scrollspy</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="ui-spinners.html">
                                    <span class="menu-text"
                                        data-lang="ui-spinners">Spinners</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="ui-tabs.html">
                                    <span class="menu-text"
                                        data-lang="ui-tabs">Tabs</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="ui-tooltips.html">
                                    <span class="menu-text"
                                        data-lang="ui-tooltips">Tooltips</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="ui-typography.html">
                                    <span class="menu-text"
                                        data-lang="ui-typography">Typography</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="ui-utilities.html">
                                    <span class="menu-text"
                                        data-lang="ui-utilities">Utilities</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="side-nav-item">
                    <a aria-controls="widgets"
                        aria-expanded="false"
                        class="side-nav-link"
                        data-bs-toggle="collapse"
                        href="index.html#widgets">
                        <span class="menu-icon"><i class="ti ti-category"></i></span>
                        <span class="menu-text"
                            data-lang="widgets">Widgets</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse"
                        id="widgets">
                        <ul class="sub-menu">
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="widgets-charts.html">
                                    <span class="menu-text"
                                        data-lang="widgets-charts">Charts</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="widgets-mixed.html">
                                    <span class="menu-text"
                                        data-lang="widgets-mixed">Mixed</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="widgets-social.html">
                                    <span class="menu-text"
                                        data-lang="widgets-social">Social</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="widgets-statistics.html">
                                    <span class="menu-text"
                                        data-lang="widgets-statistics">Statistics</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="widgets-weather.html">
                                    <span class="menu-text"
                                        data-lang="widgets-weather">Weather</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="side-nav-item">
                    <a aria-controls="charts"
                        aria-expanded="false"
                        class="side-nav-link"
                        data-bs-toggle="collapse"
                        href="index.html#charts">
                        <span class="menu-icon"><i class="ti ti-chart-donut"></i></span>
                        <span class="menu-text"
                            data-lang="charts">Charts</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse"
                        id="charts">
                        <ul class="sub-menu">
                            <li class="side-nav-item">
                                <a aria-controls="apex-charts"
                                    aria-expanded="false"
                                    class="side-nav-link"
                                    data-bs-toggle="collapse"
                                    href="index.html#apex-charts">
                                    <span class="menu-text"
                                        data-lang="apex-charts">Apex Charts</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse"
                                    id="apex-charts">
                                    <ul class="sub-menu">
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="charts-apex-area.html">
                                                <span class="menu-text"
                                                    data-lang="charts-apex-area">Area</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="charts-apex-bar.html">
                                                <span class="menu-text"
                                                    data-lang="charts-apex-bar">Bar</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="charts-apex-bubble.html">
                                                <span class="menu-text"
                                                    data-lang="charts-apex-bubble">Bubble</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="charts-apex-candlestick.html">
                                                <span class="menu-text"
                                                    data-lang="charts-apex-candlestick">Candlestick</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="charts-apex-column.html">
                                                <span class="menu-text"
                                                    data-lang="charts-apex-column">Column</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="charts-apex-heatmap.html">
                                                <span class="menu-text"
                                                    data-lang="charts-apex-heatmap">Heatmap</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="charts-apex-line.html">
                                                <span class="menu-text"
                                                    data-lang="charts-apex-line">Line</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="charts-apex-mixed.html">
                                                <span class="menu-text"
                                                    data-lang="charts-apex-mixed">Mixed</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="charts-apex-timeline.html">
                                                <span class="menu-text"
                                                    data-lang="charts-apex-timeline">Timeline</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="charts-apex-boxplot.html">
                                                <span class="menu-text"
                                                    data-lang="charts-apex-boxplot">Boxplot</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="charts-apex-treemap.html">
                                                <span class="menu-text"
                                                    data-lang="charts-apex-treemap">Treemap</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="charts-apex-pie.html">
                                                <span class="menu-text"
                                                    data-lang="charts-apex-pie">Pie</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="charts-apex-radar.html">
                                                <span class="menu-text"
                                                    data-lang="charts-apex-radar">Radar</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="charts-apex-radialbar.html">
                                                <span class="menu-text"
                                                    data-lang="charts-apex-radialbar">RadialBar</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="charts-apex-scatter.html">
                                                <span class="menu-text"
                                                    data-lang="charts-apex-scatter">Scatter</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="charts-apex-polar-area.html">
                                                <span class="menu-text"
                                                    data-lang="charts-apex-polar-area">Polar
                                                    Area</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="charts-apex-sparklines.html">
                                                <span class="menu-text"
                                                    data-lang="charts-apex-sparklines">Sparklines</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="charts-apex-range.html">
                                                <span class="menu-text"
                                                    data-lang="charts-apex-range">Range</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="charts-apex-funnel.html">
                                                <span class="menu-text"
                                                    data-lang="charts-apex-funnel">Funnel</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="charts-apex-slope.html">
                                                <span class="menu-text"
                                                    data-lang="charts-apex-slope">Slope</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="side-nav-item">
                                <a aria-controls="echarts"
                                    aria-expanded="false"
                                    class="side-nav-link"
                                    data-bs-toggle="collapse"
                                    href="index.html#echarts">
                                    <span class="menu-text"
                                        data-lang="echarts">Echarts</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse"
                                    id="echarts">
                                    <ul class="sub-menu">
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="charts-echart-line.html">
                                                <span class="menu-text"
                                                    data-lang="charts-echart-line">Line</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="charts-echart-bar.html">
                                                <span class="menu-text"
                                                    data-lang="charts-echart-bar">Bar</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="charts-echart-pie.html">
                                                <span class="menu-text"
                                                    data-lang="charts-echart-pie">Pie</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="charts-echart-scatter.html">
                                                <span class="menu-text"
                                                    data-lang="charts-echart-scatter">Scatter</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="charts-echart-geo-map.html">
                                                <span class="menu-text"
                                                    data-lang="charts-echart-geo-map">GEO
                                                    Map</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="charts-echart-gauge.html">
                                                <span class="menu-text"
                                                    data-lang="charts-echart-gauge">Gauge</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="charts-echart-candlestick.html">
                                                <span class="menu-text"
                                                    data-lang="charts-echart-candlestick">Candlestick</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="charts-echart-area.html">
                                                <span class="menu-text"
                                                    data-lang="charts-echart-area">Area</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="charts-echart-radar.html">
                                                <span class="menu-text"
                                                    data-lang="charts-echart-radar">Radar</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="charts-echart-heatmap.html">
                                                <span class="menu-text"
                                                    data-lang="charts-echart-heatmap">Heatmap</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="charts-echart-other.html">
                                                <span class="menu-text"
                                                    data-lang="charts-echart-other">Other</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="side-nav-item">
                                <a aria-controls="chartjs"
                                    aria-expanded="false"
                                    class="side-nav-link"
                                    data-bs-toggle="collapse"
                                    href="index.html#chartjs">
                                    <span class="menu-text"
                                        data-lang="chartjs">Chart Js</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse"
                                    id="chartjs">
                                    <ul class="sub-menu">
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="charts-chartjs-area.html">
                                                <span class="menu-text"
                                                    data-lang="charts-chartjs-area">Area</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="charts-chartjs-bar.html">
                                                <span class="menu-text"
                                                    data-lang="charts-chartjs-bar">Bar</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="charts-chartjs-line.html">
                                                <span class="menu-text"
                                                    data-lang="charts-chartjs-line">Line</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="charts-chartjs-other.html">
                                                <span class="menu-text"
                                                    data-lang="charts-chartjs-other">Other</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="side-nav-item">
                    <a aria-controls="forms"
                        aria-expanded="false"
                        class="side-nav-link"
                        data-bs-toggle="collapse"
                        href="index.html#forms">
                        <span class="menu-icon"><i class="ti ti-clipboard-list"></i></span>
                        <span class="menu-text"
                            data-lang="forms">Forms</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse"
                        id="forms">
                        <ul class="sub-menu">
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="form-elements.html">
                                    <span class="menu-text"
                                        data-lang="form-elements">Basic Elements</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="form-validation.html">
                                    <span class="menu-text"
                                        data-lang="form-validation">Validation</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="form-wizard.html">
                                    <span class="menu-text"
                                        data-lang="form-wizard">Wizard</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="form-select.html">
                                    <span class="menu-text"
                                        data-lang="form-select">Select</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="form-pickers.html">
                                    <span class="menu-text"
                                        data-lang="form-pickers">Pickers</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="form-fileuploads.html">
                                    <span class="menu-text"
                                        data-lang="form-fileuploads">File Uploads</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="form-text-editors.html">
                                    <span class="menu-text"
                                        data-lang="form-text-editors">Text Editors</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="form-range-slider.html">
                                    <span class="menu-text"
                                        data-lang="form-range-slider">Range Slider</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="form-cropper.html">
                                    <span class="menu-text"
                                        data-lang="form-cropper">Image Cropper</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="form-layout.html">
                                    <span class="menu-text"
                                        data-lang="form-layout">Layouts</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="form-other-plugin.html">
                                    <span class="menu-text"
                                        data-lang="form-other-plugin">Other Plugins</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="side-nav-item">
                    <a aria-controls="tables"
                        aria-expanded="false"
                        class="side-nav-link"
                        data-bs-toggle="collapse"
                        href="index.html#tables">
                        <span class="menu-icon"><i class="ti ti-table-column"></i></span>
                        <span class="menu-text"
                            data-lang="tables">Tables</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse"
                        id="tables">
                        <ul class="sub-menu">
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="tables-static.html">
                                    <span class="menu-text"
                                        data-lang="tables-static">Static Tables</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="tables-custom.html">
                                    <span class="menu-text"
                                        data-lang="tables-custom">Custom Tables</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a aria-controls="datatables"
                                    aria-expanded="false"
                                    class="side-nav-link"
                                    data-bs-toggle="collapse"
                                    href="index.html#datatables">
                                    <span class="menu-text"
                                        data-lang="datatables">DataTables</span>
                                    <span class="badge bg-success text-white">15</span>
                                </a>
                                <div class="collapse"
                                    id="datatables">
                                    <ul class="sub-menu">
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="tables-datatables-basic.html">
                                                <span class="menu-text"
                                                    data-lang="tables-datatables-basic">Basic</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="tables-datatables-export-data.html">
                                                <span class="menu-text"
                                                    data-lang="tables-datatables-export-data">Export
                                                    Data</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="tables-datatables-select.html">
                                                <span class="menu-text"
                                                    data-lang="tables-datatables-select">Select</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="tables-datatables-ajax.html">
                                                <span class="menu-text"
                                                    data-lang="tables-datatables-ajax">Ajax</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="tables-datatables-javascript.html">
                                                <span class="menu-text"
                                                    data-lang="tables-datatables-javascript">Javascript
                                                    Source</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="tables-datatables-rendering.html">
                                                <span class="menu-text"
                                                    data-lang="tables-datatables-rendering">Data
                                                    Rendering</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="tables-datatables-scroll.html">
                                                <span class="menu-text"
                                                    data-lang="tables-datatables-scroll">Scroll</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="tables-datatables-fixed-columns.html">
                                                <span class="menu-text"
                                                    data-lang="tables-datatables-fixed-columns">Fixed
                                                    Columns</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="tables-datatables-fixed-header.html">
                                                <span class="menu-text"
                                                    data-lang="tables-datatables-fixed-header">Fixed
                                                    Header</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="tables-datatables-columns.html">
                                                <span class="menu-text"
                                                    data-lang="tables-datatables-columns">Show
                                                    &amp; Hide Column</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="tables-datatables-child-rows.html">
                                                <span class="menu-text"
                                                    data-lang="tables-datatables-child-rows">Child
                                                    Rows</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="tables-datatables-column-searching.html">
                                                <span class="menu-text"
                                                    data-lang="tables-datatables-column-searching">Column
                                                    Searching</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="tables-datatables-range-search.html">
                                                <span class="menu-text"
                                                    data-lang="tables-datatables-range-search">Range
                                                    Search</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="tables-datatables-rows-add.html">
                                                <span class="menu-text"
                                                    data-lang="tables-datatables-rows-add">Add
                                                    Rows</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="tables-datatables-checkbox-select.html">
                                                <span class="menu-text"
                                                    data-lang="tables-datatables-checkbox-select">Checkbox
                                                    Select</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="side-nav-item">
                    <a aria-controls="icons"
                        aria-expanded="false"
                        class="side-nav-link"
                        data-bs-toggle="collapse"
                        href="index.html#icons">
                        <span class="menu-icon"><i class="ti ti-icons"></i></span>
                        <span class="menu-text"
                            data-lang="icons">Icons</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse"
                        id="icons">
                        <ul class="sub-menu">
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="icons-tabler.html">
                                    <span class="menu-text"
                                        data-lang="icons-tabler">Tabler</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="icons-lucide.html">
                                    <span class="menu-text"
                                        data-lang="icons-lucide">Lucide</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="icons-remix.html">
                                    <span class="menu-text"
                                        data-lang="icons-remix">Remix</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="icons-solar-duotone.html">
                                    <span class="menu-text"
                                        data-lang="icons-solar-duotone">Solar
                                        Duotone</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="icons-flags.html">
                                    <span class="menu-text"
                                        data-lang="icons-flags">Flags</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="side-nav-item">
                    <a aria-controls="maps"
                        aria-expanded="false"
                        class="side-nav-link"
                        data-bs-toggle="collapse"
                        href="index.html#maps">
                        <span class="menu-icon"><i class="ti ti-map"></i></span>
                        <span class="menu-text"
                            data-lang="maps">Maps</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse"
                        id="maps">
                        <ul class="sub-menu">
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="maps-google.html">
                                    <span class="menu-text"
                                        data-lang="maps-google">Google Maps</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="maps-vector.html">
                                    <span class="menu-text"
                                        data-lang="maps-vector">Vector Maps</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link"
                                    href="maps-leaflet.html">
                                    <span class="menu-text"
                                        data-lang="maps-leaflet">Leaflet Maps</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="side-nav-title mt-2"
                    data-lang="menu-items">
                    Menu Items
                </li>
                <li class="side-nav-item">
                    <a aria-controls="menu-levels"
                        aria-expanded="false"
                        class="side-nav-link"
                        data-bs-toggle="collapse"
                        href="index.html#menu-levels">
                        <span class="menu-icon"><i class="ti ti-sitemap"></i></span>
                        <span class="menu-text"
                            data-lang="menu-levels">Menu Levels</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse"
                        id="menu-levels">
                        <ul class="sub-menu">
                            <li class="side-nav-item">
                                <a aria-controls="second-level"
                                    aria-expanded="false"
                                    class="side-nav-link"
                                    data-bs-toggle="collapse"
                                    href="index.html#second-level">
                                    <span class="menu-text"
                                        data-lang="second-level">Second Level</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse"
                                    id="second-level">
                                    <ul class="sub-menu">
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="index.html#">
                                                <span class="menu-text"
                                                    data-lang="menu-item-1">Item
                                                    2.1</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="index.html#">
                                                <span class="menu-text"
                                                    data-lang="menu-item-2">Item
                                                    2.2</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="side-nav-item">
                                <a aria-controls="second-level-2"
                                    aria-expanded="false"
                                    class="side-nav-link"
                                    data-bs-toggle="collapse"
                                    href="index.html#second-level-2">
                                    <span class="menu-text"
                                        data-lang="second-level-2">Second Level</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse"
                                    id="second-level-2">
                                    <ul class="sub-menu">
                                        <li class="side-nav-item">
                                            <a class="side-nav-link"
                                                href="index.html#">
                                                <span class="menu-text"
                                                    data-lang="menu-item-3">Item
                                                    2.1</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a aria-controls="menu-item-4"
                                                aria-expanded="false"
                                                class="side-nav-link"
                                                data-bs-toggle="collapse"
                                                href="index.html#menu-item-4">
                                                <span class="menu-text"
                                                    data-lang="menu-item-4">Item
                                                    2.2</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <div class="collapse"
                                                id="menu-item-4">
                                                <ul class="sub-menu">
                                                    <li class="side-nav-item">
                                                        <a class="side-nav-link"
                                                            href="index.html#">
                                                            <span class="menu-text"
                                                                data-lang="menu-item-5">Item
                                                                3.1</span>
                                                        </a>
                                                    </li>
                                                    <li class="side-nav-item">
                                                        <a class="side-nav-link"
                                                            href="index.html#">
                                                            <span class="menu-text"
                                                                data-lang="menu-item-6">Item
                                                                3.2</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="side-nav-item">
                    <a class="side-nav-link disabled"
                        href="index.html#">
                        <span class="menu-icon"><i class="ti ti-ban"></i></span>
                        <span class="menu-text"
                            data-lang="disabled-menu">Disabled Menu</span>
                    </a>
                </li>
                <li class="side-nav-item">
                    <a class="side-nav-link special-menu"
                        href="index.html#">
                        <span class="menu-icon"><i class="ti ti-star"></i></span>
                        <span class="menu-text"
                            data-lang="special-menu">Special Menu</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

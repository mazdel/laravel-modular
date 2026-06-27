<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('title', @env('APP_NAME'))</title>
    <meta content="width=device-width, initial-scale=1"
        name="viewport" />
    <meta content="@yield('meta-description', 'Laravel is batteries-included so everyone can build and ship web apps at ridiculous speed.')"
        name="description" />
    <meta content="@yield('meta-keywords', 'Laravel, admin dashboard, Bootstrap 5 admin, responsive admin, CRM dashboard, CMS admin, web app UI, admin theme')"
        name="keywords" />

    <!-- App favicon -->
    <link href="assets/images/favicon.ico"
        rel="shortcut icon" />

    <!-- Vector Maps css -->
    <link href="assets/plugins/jsvectormap/jsvectormap.min.css"
        rel="stylesheet"
        type="text/css" />

    <!-- Theme Config Js -->
    <script src="assets/js/config.js"></script>
    <script src="assets/js/demo.js"></script>

    <!-- Vendor css -->
    <link href="assets/css/vendors.min.css"
        rel="stylesheet"
        type="text/css" />

    <!-- App css -->
    <link href="assets/css/app.min.css"
        id="app-style"
        rel="stylesheet"
        type="text/css" />

    @stack('styles')
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">
        <!-- Topbar Start -->
        @include('partial.headers.main')
        <!-- Topbar End -->

        <!-- Sidenav Menu Start -->
        @include('partial.sidebars.main')
        <!-- Sidenav Menu End -->

        <!-- ============================================================== -->
        <!-- Start Main Content -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="container-fluid">
                <!-- Breadcrumb Start -->
                @include('partial.breadcrumb')

                <!-- Breadcrumb End -->

                @yield('content')
                <!-- end row -->
            </div>
            <!-- container -->

            <!-- Footer Start -->
            @include('partial.footer')
            <!-- end Footer -->
        </div>

        <!-- ============================================================== -->
        <!-- End of Main Content -->
        <!-- ============================================================== -->
    </div>
    <!-- END wrapper -->

    <!-- offcanvas start-->
    @include('partial.offcanvas')
    <!-- offcanvas end-->
    <!-- Vendor js -->
    <script src="assets/js/vendors.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>

    <!-- Apex Chart js -->
    <script src="assets/plugins/apexcharts/apexcharts.min.js"></script>

    <!-- Vector Map Js -->
    <script src="assets/plugins/jsvectormap/jsvectormap.min.js"></script>
    <script src="assets/js/maps/world-merc.js"></script>
    <script src="assets/js/maps/world.js"></script>

    <!-- Custom table -->
    {{-- <script src="assets/js/pages/custom-table.js"></script> --}}

    <!-- Dashboard js -->
    {{-- <script src="assets/js/pages/dashboard-ecommerce.js"></script> --}}

    @stack('scripts')
</body>

</html>

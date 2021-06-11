<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Howiday | Admin</title>

    @include('includes.admin.style')
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        @include('includes.admin.preloader')
        <!-- /.Preloader -->

        <!-- Navbar -->
        @include('includes.admin.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('includes.admin.sidebar')
        <!-- Main Sidebar Container -->

        <!-- Content -->
        @yield('content')
        <!-- End Content -->

        <!-- Main Footer -->
        @include('includes.admin.footer')
        <!-- /.Main Footer -->

    </div>
    <!-- ./wrapper -->

    {{-- Script --}}
    @include('includes.admin.script')
</body>

</html>

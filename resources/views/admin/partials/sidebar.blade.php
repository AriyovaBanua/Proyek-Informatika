<!-- resources/views/partials/sidebar.blade.php -->

<!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item @yield('dashboard-sidebar')">
                <a class="nav-link" href="{{ route("admin.dashboard") }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu
            </div>

            <!-- Nav Item - Produk -->
            <li class="nav-item @yield('produk-sidebar')">
                <a class="nav-link" href="{{ route('produk.index') }}">
                    <i class="fas fa-fw fa-box"></i>
                    <span>Produk</span></a>
            </li>

            <!-- Nav Item - Pemesanan -->
            <li class="nav-item @yield('pemesanan-sidebar')">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                    <span>Pemesanan</span></a>
            </li>

            <!-- Nav Item - Data Penjualan -->
            <li class="nav-item @yield('penjualan-sidebar')">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-chart-line"></i>
                    <span>Data Penjualan</span></a>
            </li>

            <!-- Nav Item - Customer -->
            <li class="nav-item @yield('customer-sidebar')">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Customer</span></a>
            </li>

            <!-- Nav Item - Users -->
            <li class="nav-item @yield('users-sidebar')">
                <a class="nav-link" href="{{ route('admin.users') }}">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Users</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

           

        </ul>
        <!-- End of Sidebar -->
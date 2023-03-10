<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="admin" class="brand-link">
        <img src="{{ asset('assets') }}/dist/img/logo2.png" alt="LogoHowiday"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-bold">Howiday</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets') }}/dist/img/avatar4.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}"
                        class="nav-link {{ request()->is('Dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('paket-travel.index') }}"
                        class="nav-link {{ request()->is('paket-travel') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-bus"></i>
                        <p>
                            Paket Travel
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('galeri-travel.index') }}"
                        class="nav-link {{ request()->is('galeri-travel') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-th-large"></i>
                        <p>
                            Galeri Travel
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('transaksi.index') }}"
                        class="nav-link {{ request()->is('transaksi') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-money-bill-wave"></i>
                        <p>
                            transaksi
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<aside class="sidebar">
    <!-- sidebar close btn -->
    <button type="button" class="sidebar-close-btn hover-text-white hover-bg-main-600 text-md hover-border-main-600 d-xl-none d-flex flex-center rounded-circle position-absolute h-24 w-24 border border-gray-100 text-gray-500"><i class="ph ph-x"></i></button>
    <!-- sidebar close btn -->

    <a href="index.html" class="sidebar__logo position-sticky inset-block-start-0 w-100 z-1 bg-white p-20 pb-10 text-center">
        {{-- <img src="{{ asset('admin') }}/assets/images/logo/logo.png" alt="Logo"> --}}
        <img src="{{ asset('assets/logo_dark.png') }}" alt="Logo" width="50%">
        <hr>
    </a>

    <div class="sidebar-menu-wrapper scroll-sm overflow-y-auto">
        <div class="p-20 pt-10">
            <ul class="sidebar-menu">

                <li class="sidebar-menu__item {{ request()->routeIs('dashboard') ? 'activePage' : '' }}">
                    <a href="{{ route('dashboard') }}" class="sidebar-menu__link">
                        <span class="icon"><i class="ph ph-squares-four"></i></span>
                        <span class="text">Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-menu__item has-dropdown">
                    <a href="javascript:void(0)" class="sidebar-menu__link">
                        <span class="icon"><i class="ph ph-books"></i></span>
                        <span class="text">Buku</span>
                    </a>
                    <!-- Submenu start -->
                    <ul class="sidebar-submenu {{ request()->routeIs('buku.*') ? 'has-dropdown activePage' : '' }}">
                        <li class="sidebar-submenu__item {{ request()->routeIs('buku.index') ? 'activePage' : '' }}">
                            <a href="{{ route('buku.index') }}" class="sidebar-submenu__link"> List Buku </a>
                        </li>
                        <li class="sidebar-submenu__item {{ request()->routeIs('buku.create') ? 'activePage' : '' }}">
                            <a href="{{ route('buku.create') }}" class="sidebar-submenu__link"> Tambah Data Buku </a>
                        </li>
                    </ul>
                    <!-- Submenu End -->
                </li>

                <li class="sidebar-menu__item">
                    <span class="fw-semibold border-top d-block text-uppercase border-gray-100 px-20 pt-20 text-sm text-gray-300">Settings</span>
                </li>
                <li class="sidebar-menu__item">
                    <a href="setting.html" class="sidebar-menu__link">
                        <span class="icon"><i class="ph ph-gear"></i></span>
                        <span class="text">Account Settings</span>
                    </a>
                </li>

            </ul>
        </div>

    </div>

</aside>

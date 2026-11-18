<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <title>@yield('title', 'Admin Dashboard - Penggalangan Dana')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Panel Pengelolaan Kampanye & Donasi" name="description" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('admin-assets/images/favicon.ico') }}">

    <!-- App css -->
    <link href="{{ asset('admin-assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin-assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin-assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

    @stack('styles')
</head>

<body id="body" class="dark-sidebar">
    <!-- left-sidebar -->
    <div class="left-sidebar">
        <!-- LOGO -->
        <div class="brand">
            <a href="{{ route('admin.dashboard') }}" class="logo">
                <span>
                    <img src="{{ asset('admin-assets/images/logo-sm.png') }}" alt="logo-small" class="logo-sm">
                </span>
                <span>
                    <img src="{{ asset('admin-assets/images/logo.png') }}" alt="logo-large" class="logo-lg logo-light">
                    <img src="{{ asset('admin-assets/images/logo-dark.png') }}" alt="logo-large" class="logo-lg logo-dark">
                </span>
            </a>
        </div>

        <div class="sidebar-user-pro media border-end">                    
            <div class="position-relative mx-auto">
                <img src="{{ asset('admin-assets/images/users/user-4.jpg') }}" alt="user" class="rounded-circle thumb-md">
                <span class="online-icon position-absolute end-0"><i class="mdi mdi-record text-success"></i></span>
            </div>
            <div class="media-body ms-2 user-detail align-self-center">
                <h5 class="font-14 m-0 fw-bold">Admin Galang Dana</h5>  
                <p class="opacity-50 mb-0">admin@peduli.org</p>          
            </div>                    
        </div>

        <!-- Sidebar Navigation Menu -->
        <div class="menu-content h-100" data-simplebar>
            <div class="menu-body navbar-vertical">
                <div class="collapse navbar-collapse tab-content" id="sidebarCollapse">
                    <ul class="navbar-nav tab-pane active" id="Main" role="tabpanel">
                        <li class="menu-label mt-2 text-primary font-12 fw-semibold">MENU UTAMA</li>                    
                        
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
                                <i class="ti ti-dashboard menu-icon"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="menu-label mt-3 text-primary font-12 fw-semibold">MANAJEMEN KAMPANYE</li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.campaigns.index') ? 'active' : '' }}" href="{{ route('admin.campaigns.index') }}">
                                <i class="ti ti-heart-handshake menu-icon"></i>
                                <span>Program Donasi</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.campaigns.create') ? 'active' : '' }}" href="{{ route('admin.campaigns.create') }}">
                                <i class="ti ti-circle-plus menu-icon"></i>
                                <span>Buat Program Baru</span>
                            </a>
                        </li>

                        <li class="menu-label mt-3 text-primary font-12 fw-semibold">TRANSAKSI & RELAWAN</li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.donations.index') ? 'active' : '' }}" href="{{ route('admin.donations.index') }}">
                                <i class="ti ti-receipt menu-icon"></i>
                                <span>Riwayat Donasi</span>
                            </a>
                        </li>

                        <li class="menu-label mt-4 text-muted font-11">PORTAL DEPAN</li>
                        <li class="nav-item">
                            <a class="nav-link text-info" href="{{ route('home') }}" target="_blank">
                                <i class="ti ti-external-link menu-icon"></i>
                                <span>Lihat Website Publik</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end left-sidebar -->

    <!-- Top Bar Start -->
    <div class="topbar">            
        <!-- Navbar -->
        <nav class="navbar-custom" id="navbar-custom">    
            <ul class="list-unstyled topbar-nav float-end mb-0">
                <li class="dropdown">
                    <a class="nav-link dropdown-toggle nav-user" data-bs-toggle="dropdown" href="#" role="button"
                        aria-haspopup="false" aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('admin-assets/images/users/user-4.jpg') }}" alt="profile-user" class="rounded-circle me-2 thumb-sm" />
                            <div>
                                <small class="d-none d-md-block font-11">Administrator</small>
                                <span class="d-none d-md-block fw-semibold font-12">Admin Donasi <i
                                        class="mdi mdi-chevron-down"></i></span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="{{ route('home') }}"><i class="ti ti-home font-16 me-1 align-text-bottom"></i> Web Depan</a>
                        <div class="dropdown-divider mb-0"></div>
                        <a class="dropdown-item text-danger" href="#"><i class="ti ti-power font-16 me-1 align-text-bottom"></i> Logout</a>
                    </div>
                </li>
            </ul>

            <ul class="list-unstyled topbar-nav mb-0">                        
                <li>
                    <button class="nav-link button-menu-mobile nav-icon" id="togglemenu">
                        <i class="ti ti-menu-2"></i>
                    </button>
                </li> 
                <li class="hide-phone app-search">
                    <form role="search" action="#" method="get">
                        <input type="search" name="search" class="form-control top-search mb-0" placeholder="Cari program donasi / donatur...">
                        <button type="submit"><i class="ti ti-search"></i></button>
                    </form>
                </li>                       
            </ul>
        </nav>
        <!-- end navbar-->
    </div>
    <!-- Top Bar End -->

    <div class="page-wrapper">
        <!-- Page Content-->
        <div class="page-content-tab">
            <div class="container-fluid">
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="float-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Admin</a></li>
                                    @yield('breadcrumb')
                                </ol>
                            </div>
                            <h4 class="page-title">@yield('page-title', 'Dashboard')</h4>
                        </div>
                    </div>
                </div>

                <!-- Main Content Yield -->
                @yield('content')

            </div>

            <!-- Footer -->
            <footer class="footer text-center text-sm-start">
                &copy; {{ date('Y') }} Project Akhir PBF - Sistem Penggalangan Dana Online.
                <span class="text-muted d-none d-sm-inline-block float-end">Admin Template: Unikit</span>
            </footer>
        </div>
    </div>

    <!-- Javascript  -->   
    <script src="{{ asset('admin-assets/js/app.js') }}"></script>
    @stack('scripts')
</body>
</html>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <title>@yield('title', 'NUSA Admin Console — Platform Inisiatif Kemanusiaan')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="NUSA Admin Console - Social Impact & Humanitarian Crowdfunding" name="description" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('landing-assets/images/cropped-favicon-32x32.png') }}">

    <!-- App css -->
    <link href="{{ asset('admin-assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin-assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin-assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- NUSA Admin Theme (Metropolis & Inter + NUSA Palette) -->
    <link href="{{ asset('admin-assets/css/nusa-admin-theme.css') }}" rel="stylesheet" type="text/css" />

    @stack('styles')
</head>

<body id="body" class="dark-sidebar">
    <!-- left-sidebar -->
    <div class="left-sidebar">
        <!-- Brand Logo -->
        <div class="brand py-3 text-center">
            <a href="{{ route('admin.dashboard') }}" class="nusa-admin-logo">
                NUSA<span class="dot">.</span>
                <span class="d-block font-10 text-white-50 fw-normal text-uppercase letter-spacing-1">Admin Console</span>
            </a>
        </div>

        <div class="sidebar-user-pro media border-end border-secondary border-opacity-25">                    
            <div class="position-relative mx-auto">
                <img src="{{ asset('admin-assets/images/users/user-4.jpg') }}" alt="user" class="rounded-circle thumb-md">
                <span class="online-icon position-absolute end-0"><i class="mdi mdi-record text-success"></i></span>
            </div>
            <div class="media-body ms-2 user-detail align-self-center">
                <h5 class="font-14 m-0 fw-bold text-white">Admin Kemanusiaan</h5>  
                <p class="text-white-50 mb-0 font-11">admin@nusa.id</p>          
            </div>                    
        </div>

        <!-- Sidebar Navigation Menu -->
        <div class="menu-content h-100" data-simplebar>
            <div class="menu-body navbar-vertical">
                <div class="collapse navbar-collapse tab-content" id="sidebarCollapse">
                    <ul class="navbar-nav tab-pane active" id="Main" role="tabpanel">
                        <li class="menu-label mt-2 font-11">RINGKASAN</li>                    
                        
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
                                <i class="ti ti-dashboard menu-icon"></i>
                                <span>Dashboard Utama</span>
                            </a>
                        </li>

                        <li class="menu-label mt-3 font-11">6 PILAR INISIATIF NUSA</li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.campaigns.index') ? 'active' : '' }}" href="{{ route('admin.campaigns.index') }}">
                                <i class="ti ti-world menu-icon"></i>
                                <span>Daftar Inisiatif</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.campaigns.create') ? 'active' : '' }}" href="{{ route('admin.campaigns.create') }}">
                                <i class="ti ti-circle-plus menu-icon"></i>
                                <span>Inisiasi Program Baru</span>
                            </a>
                        </li>

                        <li class="menu-label mt-3 font-11">VERIFIKASI & DONATUR</li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.donations.index') ? 'active' : '' }}" href="{{ route('admin.donations.index') }}">
                                <i class="ti ti-receipt menu-icon"></i>
                                <span>Mutasi & Transaksi</span>
                            </a>
                        </li>

                        <li class="menu-label mt-4 font-11 text-white-50">WEBSITE PUBLIK</li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: var(--nusa-muted-green);" href="{{ route('home') }}" target="_blank">
                                <i class="ti ti-external-link menu-icon"></i>
                                <span>Buka Portal NUSA</span>
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
        <nav class="navbar-custom" id="navbar-custom">    
            <ul class="list-unstyled topbar-nav float-end mb-0">
                <li class="dropdown">
                    <a class="nav-link dropdown-toggle nav-user" data-bs-toggle="dropdown" href="#" role="button"
                        aria-haspopup="false" aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('admin-assets/images/users/user-4.jpg') }}" alt="profile-user" class="rounded-circle me-2 thumb-sm" />
                            <div>
                                <small class="d-none d-md-block font-11 text-muted">Super Admin</small>
                                <span class="d-none d-md-block fw-semibold font-12">NUSA Manager <i class="mdi mdi-chevron-down"></i></span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="{{ route('home') }}"><i class="ti ti-home font-16 me-1 align-text-bottom"></i> Portal Depan</a>
                        <div class="dropdown-divider mb-0"></div>
                        <a class="dropdown-item text-danger" href="#"><i class="ti ti-power font-16 me-1 align-text-bottom"></i> Keluar</a>
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
                        <input type="search" name="search" class="form-control top-search mb-0" placeholder="Cari inisiatif, wilayah, atau donatur...">
                        <button type="submit"><i class="ti ti-search"></i></button>
                    </form>
                </li>                       
            </ul>
        </nav>
    </div>
    <!-- Top Bar End -->

    <div class="page-wrapper">
        <div class="page-content-tab">
            <div class="container-fluid">
                <!-- Page Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="float-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">NUSA Console</a></li>
                                    @yield('breadcrumb')
                                </ol>
                            </div>
                            <h4 class="page-title">@yield('page-title', 'Dashboard')</h4>
                        </div>
                    </div>
                </div>

                @yield('content')
            </div>

            <footer class="footer text-center text-sm-start">
                &copy; {{ date('Y') }} <strong>NUSA</strong> — Together, We Make a Difference.
                <span class="text-muted d-none d-sm-inline-block float-end">Social Impact & Crowdfunding Console</span>
            </footer>
        </div>
    </div>

    <!-- Javascript  -->   
    <script src="{{ asset('admin-assets/js/app.js') }}"></script>
    @stack('scripts')
</body>
</html>

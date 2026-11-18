<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Platform Penggalangan Dana & Donasi Online')</title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('landing-assets/images/cropped-favicon-32x32.png') }}">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ asset('landing-assets/css/bootstrap.min.css') }}">
  <!-- CSS Plugins -->
  <link rel="stylesheet" href="{{ asset('landing-assets/css/plugin.css') }}">
  <!-- Default CSS -->
  <link rel="stylesheet" href="{{ asset('landing-assets/css/default.css') }}">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('landing-assets/css/styles.css') }}">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  @stack('styles')
</head>
<body>

  <!-- Header Section Start -->
  <header class="position-relative z-3">
    <!-- Top Bar -->
    <div class="header-top py-2 bg-secondary text-white">
      <div class="container">
        <div class="header-top-inner">
          <div class="row align-items-center">
            <div class="col-lg-6 col-md-7">
              <div class="header-top-left">
                <ul class="list-unstyled d-flex gap-3 small mb-0">
                  <li><i class="fas fa-phone me-2 text-primary"></i>+62 (021) 555-0199</li>
                  <li><i class="far fa-envelope me-2 text-primary"></i>peduli@donasi.id</li>
                  <li class="d-none d-sm-inline"><i class="fas fa-shield-alt me-2 text-primary"></i>Aman & Terpercaya</li>
                </ul>
              </div>
            </div>
            <div class="col-lg-6 col-md-5">
              <div class="header-top-right d-flex align-items-center justify-content-end gap-3">
                <a href="{{ route('admin.dashboard') }}" class="small text-white-50 text-decoration-none hover-white">
                  <i class="fas fa-user-shield me-1"></i> Panel Admin
                </a>
                <a href="{{ route('donate') }}" class="btn-primary text-decoration-none py-1 px-3 small rounded">
                  Donasi Sekarang <i class="fas fa-heart ms-1"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Main Navigation Bar -->
    <div class="header-nav header-nav-menu py-3" id="header-nav-menu">
      <div class="container">
        <div class="header-nav-inner d-flex justify-content-between align-items-center">
          <div class="header-logo">
            <a href="{{ route('home') }}" class="d-flex align-items-center text-decoration-none">
              <img src="{{ asset('landing-assets/images/logo1.png') }}" alt="Logo" style="max-height: 46px;">
            </a>
          </div>

          <div class="header-nav-right d-flex align-items-center">
            <div class="navbar-collapse justify-content-center" id="bs-example-navbar-collapse-1">
              <ul class="navbar-nav flex-row align-items-center gap-4" id="responsive-menu">
                <li class="nav-item">
                  <a class="nav-link text fw-bold {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                    Beranda
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text fw-bold {{ request()->routeIs('campaigns*') ? 'active' : '' }}" href="{{ route('campaigns.index') }}">
                    Program Donasi
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text fw-bold" href="#about-section">Tentang Kami</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text fw-bold" href="#stat-section">Transparansi</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text fw-bold {{ request()->routeIs('donate') ? 'active' : '' }}" href="{{ route('donate') }}">
                    Salurkan Donasi
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div id="slicknav-mobile"></div>
        </div>
      </div>
    </div>
  </header>
  <!-- Header Section End -->

  <!-- Main Content -->
  <main>
    @yield('content')
  </main>

  <!-- Footer Section Start -->
  <footer class="footer bg-secondary text-white pt-5">
    <div class="container">
      <div class="footer-inner pb-5">
        <div class="row g-4">
          <div class="col-lg-4 col-md-6">
            <div class="footer-about">
              <img src="{{ asset('landing-assets/images/logo-w.png') }}" alt="Logo Footer" class="mb-3" style="max-height: 42px;">
              <p class="text-white-50">
                Wadah gotong royong dan penggalangan dana online transparan untuk membantu sesama yang membutuhkan bantuan medis, pendidikan, bencana alam, dan kemanusiaan.
              </p>
              <div class="social-links d-flex gap-3 mt-3">
                <a href="#" class="text-white"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-white"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
                <a href="#" class="text-white"><i class="fab fa-youtube"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6">
            <div class="footer-links">
              <h5 class="text-white mb-3">Navigasi</h5>
              <ul class="list-unstyled text-white-50">
                <li class="mb-2"><a href="{{ route('home') }}" class="text-white-50 text-decoration-none">Beranda</a></li>
                <li class="mb-2"><a href="{{ route('campaigns.index') }}" class="text-white-50 text-decoration-none">Program Donasi</a></li>
                <li class="mb-2"><a href="{{ route('donate') }}" class="text-white-50 text-decoration-none">Cara Donasi</a></li>
                <li class="mb-2"><a href="{{ route('admin.dashboard') }}" class="text-white-50 text-decoration-none">Admin Panel</a></li>
              </ul>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="footer-contact">
              <h5 class="text-white mb-3">Hubungi Kami</h5>
              <ul class="list-unstyled text-white-50">
                <li class="mb-2"><i class="fas fa-map-marker-alt me-2 text-primary"></i> Jl. Pemuda Kemanusiaan No. 7, Jakarta</li>
                <li class="mb-2"><i class="fas fa-envelope me-2 text-primary"></i> bantuan@donasi.id</li>
                <li><i class="fas fa-phone me-2 text-primary"></i> +62 812-3456-7890</li>
              </ul>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="footer-badge">
              <h5 class="text-white mb-3">Aman & Terpercaya</h5>
              <p class="small text-white-50">
                Setiap donasi yang masuk diawasi dan tercatat secara transparan dengan audit berkala.
              </p>
              <div class="p-3 bg-dark bg-opacity-25 rounded border border-secondary">
                <div class="d-flex align-items-center">
                  <i class="fas fa-check-circle text-success fs-3 me-3"></i>
                  <div>
                    <h6 class="text-white mb-0">100% Terverifikasi</h6>
                    <small class="text-white-50">Lembaga Amal Resmi</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="footer-bottom border-top border-secondary py-3 text-center text-white-50 small">
        <p class="mb-0">&copy; {{ date('Y') }} Project Akhir PBF - Platform Penggalangan Dana Online.</p>
      </div>
    </div>
  </footer>
  <!-- Footer Section End -->

  <!-- Scripts -->
  <script src="{{ asset('landing-assets/js/jquery-3.7.1.min.js') }}"></script>
  <script src="{{ asset('landing-assets/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('landing-assets/js/plugin.js') }}"></script>
  <script src="{{ asset('landing-assets/js/main.js') }}"></script>
  @stack('scripts')
</body>
</html>

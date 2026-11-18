<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'NUSA — Social Impact & Humanitarian Crowdfunding Platform')</title>

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

  <!-- NUSA Custom Brand System (Inter & Metropolis Fonts + Palettes) -->
  <link rel="stylesheet" href="{{ asset('landing-assets/css/nusa-theme.css') }}">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  @stack('styles')
</head>
<body>

  <!-- Top Bar -->
  <div class="header-top py-2">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-between small">
        <div class="d-flex align-items-center gap-3">
          <span><i class="fas fa-shield-alt text-warning me-1"></i> Platform Terpercaya Gotong Royong Indonesia</span>
          <span class="d-none d-md-inline opacity-50">|</span>
          <span class="d-none d-md-inline">6 Pilar Aksi Berkelanjutan</span>
        </div>
        <div class="d-flex align-items-center gap-3">
          <a href="{{ route('admin.dashboard') }}" class="text-white-50 text-decoration-none">
            <i class="fas fa-chart-pie me-1"></i> NUSA Admin Console
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Header Navigation -->
  <header class="header-nav py-3 sticky-top">
    <div class="container">
      <div class="d-flex align-items-center justify-content-between">
        
        <!-- Brand Logo -->
        <a href="{{ route('home') }}" class="text-decoration-none">
          <div class="nusa-logo">
            NUSA<span class="dot">.</span>
          </div>
          <span class="nusa-logo-subtitle">Social Impact & Crowdfunding</span>
        </a>

        <!-- Desktop Navigation Links -->
        <nav class="d-none d-lg-flex align-items-center gap-1">
          <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Beranda</a>
          <a class="nav-link {{ request()->routeIs('campaigns*') ? 'active' : '' }}" href="{{ route('campaigns.index') }}">Inisiatif & Program</a>
          <a class="nav-link" href="{{ route('home') }}#pillars">6 Fokus NUSA</a>
          <a class="nav-link" href="{{ route('home') }}#impact">Dampak Kolektif</a>
          <a class="nav-link" href="{{ route('home') }}#about-nusa">Tentang Kami</a>
        </nav>

        <!-- Right Action Button -->
        <div class="d-flex align-items-center gap-2">
          <a href="{{ route('donate') }}" class="btn btn-nusa-vermilion">
            <i class="fas fa-heart me-1"></i> Donasi Sekarang
          </a>
        </div>

      </div>
    </div>
  </header>

  <!-- Main Content -->
  <main>
    @yield('content')
  </main>

  <!-- NUSA Footer -->
  <footer class="nusa-footer pt-5 mt-5">
    <div class="container pb-4">
      <div class="row g-4">
        
        <div class="col-lg-4 col-md-6">
          <div class="nusa-logo text-white mb-2">
            NUSA<span class="dot">.</span>
          </div>
          <p class="small text-white-50 pe-lg-4">
            Platform penggalangan dana dan aksi kemanusiaan untuk mendorong ketahanan, pemberdayaan, dan keberlanjutan sosial-lingkungan di seluruh pelosok Indonesia.
          </p>
          <div class="d-inline-block px-3 py-1 rounded-pill bg-dark bg-opacity-50 border border-secondary text-white-50 small mt-2">
            <strong>Tagline:</strong> Together, We Make a Difference.
          </div>
        </div>

        <div class="col-lg-2 col-md-6 col-6">
          <h6 class="text-white fw-bold mb-3">6 Fokus NUSA</h6>
          <ul class="list-unstyled small">
            <li class="mb-2"><a href="{{ route('campaigns.index') }}?category=environment" class="text-decoration-none">Environmental</a></li>
            <li class="mb-2"><a href="{{ route('campaigns.index') }}?category=disaster" class="text-decoration-none">Disaster Relief</a></li>
            <li class="mb-2"><a href="{{ route('campaigns.index') }}?category=health" class="text-decoration-none">Health & Wellbeing</a></li>
            <li class="mb-2"><a href="{{ route('campaigns.index') }}?category=economic" class="text-decoration-none">Economic Empowerment</a></li>
            <li class="mb-2"><a href="{{ route('campaigns.index') }}?category=education" class="text-decoration-none">Education</a></li>
            <li><a href="{{ route('campaigns.index') }}?category=social" class="text-decoration-none">Social Welfare</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-6 col-6">
          <h6 class="text-white fw-bold mb-3">Tautan Cepat</h6>
          <ul class="list-unstyled small">
            <li class="mb-2"><a href="{{ route('home') }}" class="text-decoration-none">Beranda</a></li>
            <li class="mb-2"><a href="{{ route('campaigns.index') }}" class="text-decoration-none">Semua Inisiatif</a></li>
            <li class="mb-2"><a href="{{ route('donate') }}" class="text-decoration-none">Salurkan Donasi</a></li>
            <li class="mb-2"><a href="{{ route('admin.dashboard') }}" class="text-decoration-none">Admin Console</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-6">
          <h6 class="text-white fw-bold mb-3">Transparansi & Akuntabilitas</h6>
          <p class="small text-white-50">
            Setiap inisiatif diaudit berkala dengan publikasi progres terperinci kepada donatur dan masyarakat.
          </p>
          <div class="p-3 rounded-3 bg-dark bg-opacity-25 border border-secondary d-flex align-items-center gap-3">
            <i class="fas fa-check-double text-success fs-3"></i>
            <div>
              <div class="text-white fw-bold small">Laporan Dampak Terverifikasi</div>
              <small class="text-white-50">Lembaga Kemanusiaan Berizin Resmi</small>
            </div>
          </div>
        </div>

      </div>

      <div class="border-top border-secondary mt-5 pt-3 text-center small text-white-50">
        <p class="mb-0">&copy; {{ date('Y') }} <strong>NUSA</strong> — A collective platform for a more resilient, empowered, and sustainable Indonesia.</p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="{{ asset('landing-assets/js/jquery-3.7.1.min.js') }}"></script>
  <script src="{{ asset('landing-assets/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('landing-assets/js/plugin.js') }}"></script>
  @stack('scripts')
</body>
</html>

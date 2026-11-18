@extends('layouts.landing')

@section('title', 'Beranda - Platform Penggalangan Dana & Donasi Peduli Sesama')

@section('content')
<!-- Hero / Banner Section Start -->
<section class="banner-section position-relative py-5" style="background: linear-gradient(135deg, #1f2937 0%, #111827 100%); min-height: 520px;">
  <div class="container py-5">
    <div class="row align-items-center">
      <div class="col-lg-7 text-white">
        <span class="badge bg-primary text-uppercase px-3 py-2 mb-3 fw-semibold">Platform Donasi Terpercaya</span>
        <h1 class="display-4 fw-bold text-white mb-4">
          Uluran Tangan Kita, <br><span class="text-warning">Harapan Hidup</span> Bagi Mereka
        </h1>
        <p class="lead text-white-50 mb-4" style="max-width: 600px;">
          Bantu saudara-saudara kita yang membutuhkan biaya pengobatan darurat, pendidikan pelosok, dan pemulihan bencana. Bersama kita wujudkan kebaikan yang transparan dan tepat sasaran.
        </p>
        <div class="d-flex flex-wrap gap-3">
          <a href="{{ route('donate') }}" class="btn btn-warning btn-lg px-4 py-3 fw-bold text-dark shadow">
            <i class="fas fa-heart me-2 text-danger"></i> Mulai Donasi Sekarang
          </a>
          <a href="{{ route('campaigns.index') }}" class="btn btn-outline-light btn-lg px-4 py-3">
            Lihat Program Bantuan <i class="fas fa-arrow-right ms-2"></i>
          </a>
        </div>
      </div>
      <div class="col-lg-5 d-none d-lg-block text-center">
        <div class="position-relative p-3 bg-white bg-opacity-10 rounded-4 border border-secondary shadow-lg">
          <img src="{{ asset('landing-assets/images/about/about2.jpg') }}" alt="Charity Banner" class="img-fluid rounded-3 shadow">
          <div class="position-absolute bottom-0 start-50 translate-middle-x mb-4 bg-white p-3 rounded-3 shadow text-dark text-start" style="width: 85%;">
            <div class="d-flex align-items-center justify-content-between mb-1">
              <span class="fw-bold text-primary small">Target Kampanye Mendesak</span>
              <span class="badge bg-danger">Hari Terakhir</span>
            </div>
            <div class="progress" style="height: 10px;">
              <div class="progress-bar bg-success" role="progressbar" style="width: 78%;" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="d-flex justify-content-between mt-2 small">
              <span class="text-muted">Terkumpul: <strong>Rp 78.400.000</strong></span>
              <span class="text-muted">Target: <strong>Rp 100.000.000</strong></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Hero / Banner Section End -->

<!-- Transparency Stat Section Start -->
<section class="py-4 bg-light border-bottom" id="stat-section">
  <div class="container">
    <div class="row g-4 text-center">
      <div class="col-md-3 col-6">
        <div class="p-3">
          <h3 class="fw-bold text-primary mb-1">Rp 1.45 Miliar+</h3>
          <p class="text-muted mb-0 small">Total Donasi Tersalurkan</p>
        </div>
      </div>
      <div class="col-md-3 col-6">
        <div class="p-3">
          <h3 class="fw-bold text-primary mb-1">128 Program</h3>
          <p class="text-muted mb-0 small">Kampanye Terverifikasi</p>
        </div>
      </div>
      <div class="col-md-3 col-6">
        <div class="p-3">
          <h3 class="fw-bold text-primary mb-1">24.500+</h3>
          <p class="text-muted mb-0 small">Orang Baik / Donatur</p>
        </div>
      </div>
      <div class="col-md-3 col-6">
        <div class="p-3">
          <h3 class="fw-bold text-primary mb-1">100%</h3>
          <p class="text-muted mb-0 small">Laporan Penyaluran Terbuka</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Transparency Stat Section End -->

<!-- Featured Campaigns Section Start -->
<section class="py-5" id="campaigns-section">
  <div class="container py-4">
    <div class="text-center mb-5">
      <span class="text-primary text-uppercase fw-bold small">Program Mendesak</span>
      <h2 class="fw-bold mt-2">Bantu Mereka yang Membutuhkan Segera</h2>
      <p class="text-muted mx-auto" style="max-width: 650px;">
        Pilih program penggalangan dana yang sedang berjalan. Setiap rupiah yang kamu berikan sangat berarti bagi kehidupan mereka.
      </p>
    </div>

    <div class="row g-4">
      <!-- Campaign Card 1 -->
      <div class="col-lg-4 col-md-6">
        <div class="card h-100 shadow-sm border-0 rounded-3 overflow-hidden">
          <div class="position-relative">
            <img src="{{ asset('landing-assets/images/causes/causes1.jpg') }}" class="card-img-top" alt="Operasi Jantung Dek Alif" style="height: 220px; object-fit: cover;">
            <span class="badge bg-danger position-absolute top-0 start-0 m-3 px-3 py-2">Medis & Kesehatan</span>
          </div>
          <div class="card-body p-4 d-flex flex-column">
            <h5 class="card-title fw-bold">
              <a href="{{ route('campaigns.show', 1) }}" class="text-dark text-decoration-none hover-primary">
                Bantu Dek Alif Berjuang Melawan Kelainan Jantung Bawaan
              </a>
            </h5>
            <p class="card-text text-muted small mb-4 flex-grow-1">
              Dek Alif (3 tahun) membutuhkan tindakan operasi katup jantung segera sebelum kondisinya semakin kritis.
            </p>
            <div class="mb-3">
              <div class="d-flex justify-content-between small text-muted mb-1">
                <span>Terkumpul</span>
                <span class="fw-bold text-dark">75%</span>
              </div>
              <div class="progress" style="height: 8px;">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 75%"></div>
              </div>
              <div class="d-flex justify-content-between small mt-2">
                <span class="text-primary fw-bold">Rp 45.000.000</span>
                <span class="text-muted">Target: Rp 60.000.000</span>
              </div>
            </div>
            <div class="d-flex justify-content-between align-items-center pt-3 border-top">
              <span class="small text-muted"><i class="far fa-clock me-1"></i> Sisa 6 hari</span>
              <a href="{{ route('donate') }}?campaign_id=1" class="btn btn-sm btn-primary px-3 rounded-pill">
                Donasi Sekarang
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Campaign Card 2 -->
      <div class="col-lg-4 col-md-6">
        <div class="card h-100 shadow-sm border-0 rounded-3 overflow-hidden">
          <div class="position-relative">
            <img src="{{ asset('landing-assets/images/causes/causes2.jpg') }}" class="card-img-top" alt="Renovasi Sekolah" style="height: 220px; object-fit: cover;">
            <span class="badge bg-warning text-dark position-absolute top-0 start-0 m-3 px-3 py-2">Pendidikan</span>
          </div>
          <div class="card-body p-4 d-flex flex-column">
            <h5 class="card-title fw-bold">
              <a href="{{ route('campaigns.show', 2) }}" class="text-dark text-decoration-none hover-primary">
                Renovasi Gedung Belajar SD Pelosok Negeri yang Nyaris Roboh
              </a>
            </h5>
            <p class="card-text text-muted small mb-4 flex-grow-1">
              70 siswa harus belajar bergantian karena plafon kelas ambruk terkena badai angin beberapa pekan lalu.
            </p>
            <div class="mb-3">
              <div class="d-flex justify-content-between small text-muted mb-1">
                <span>Terkumpul</span>
                <span class="fw-bold text-dark">42%</span>
              </div>
              <div class="progress" style="height: 8px;">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 42%"></div>
              </div>
              <div class="d-flex justify-content-between small mt-2">
                <span class="text-primary fw-bold">Rp 21.000.000</span>
                <span class="text-muted">Target: Rp 50.000.000</span>
              </div>
            </div>
            <div class="d-flex justify-content-between align-items-center pt-3 border-top">
              <span class="small text-muted"><i class="far fa-clock me-1"></i> Sisa 14 hari</span>
              <a href="{{ route('donate') }}?campaign_id=2" class="btn btn-sm btn-primary px-3 rounded-pill">
                Donasi Sekarang
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Campaign Card 3 -->
      <div class="col-lg-4 col-md-6">
        <div class="card h-100 shadow-sm border-0 rounded-3 overflow-hidden">
          <div class="position-relative">
            <img src="{{ asset('landing-assets/images/causes/causes3.jpg') }}" class="card-img-top" alt="Paket Sembako Lansia" style="height: 220px; object-fit: cover;">
            <span class="badge bg-info text-dark position-absolute top-0 start-0 m-3 px-3 py-2">Kemanusiaan</span>
          </div>
          <div class="card-body p-4 d-flex flex-column">
            <h5 class="card-title fw-bold">
              <a href="{{ route('campaigns.show', 3) }}" class="text-dark text-decoration-none hover-primary">
                Paket Pangan & Sembako untuk 500 Lansia Dhuafa Sebatang Kara
              </a>
            </h5>
            <p class="card-text text-muted small mb-4 flex-grow-1">
              Bantu para lansia tidak mampu agar dapat mencukupi kebutuhan makan sehat harian mereka dengan layak.
            </p>
            <div class="mb-3">
              <div class="d-flex justify-content-between small text-muted mb-1">
                <span>Terkumpul</span>
                <span class="fw-bold text-dark">89%</span>
              </div>
              <div class="progress" style="height: 8px;">
                <div class="progress-bar bg-success" role="progressbar" style="width: 89%"></div>
              </div>
              <div class="d-flex justify-content-between small mt-2">
                <span class="text-success fw-bold">Rp 31.150.000</span>
                <span class="text-muted">Target: Rp 35.000.000</span>
              </div>
            </div>
            <div class="d-flex justify-content-between align-items-center pt-3 border-top">
              <span class="small text-muted"><i class="far fa-clock me-1"></i> Sisa 3 hari</span>
              <a href="{{ route('donate') }}?campaign_id=3" class="btn btn-sm btn-primary px-3 rounded-pill">
                Donasi Sekarang
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="text-center mt-5">
      <a href="{{ route('campaigns.index') }}" class="btn btn-outline-primary px-4 py-2 rounded-pill">
        Jelajahi Semua Program Donasi <i class="fas fa-chevron-right ms-1"></i>
      </a>
    </div>
  </div>
</section>
<!-- Featured Campaigns Section End -->

<!-- How It Works Section Start -->
<section class="py-5 bg-light" id="about-section">
  <div class="container py-4">
    <div class="text-center mb-5">
      <span class="text-primary text-uppercase fw-bold small">Alur Donasi</span>
      <h2 class="fw-bold mt-2">Mudah, Cepat, dan Transparan</h2>
      <p class="text-muted">Hanya butuh 3 langkah sederhana untuk menebarkan kebaikan.</p>
    </div>

    <div class="row g-4 text-center">
      <div class="col-md-4">
        <div class="p-4 bg-white rounded-4 shadow-sm h-100">
          <div class="mb-3">
            <span class="d-inline-flex align-items-center justify-content-center bg-primary text-white rounded-circle fs-3" style="width: 70px; height: 70px;">
              <i class="fas fa-search"></i>
            </span>
          </div>
          <h5 class="fw-bold mb-2">1. Pilih Program</h5>
          <p class="text-muted small mb-0">Temukan kampanye penggalangan dana yang sesuai dengan niat kebaikan dan kepedulianmu.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="p-4 bg-white rounded-4 shadow-sm h-100">
          <div class="mb-3">
            <span class="d-inline-flex align-items-center justify-content-center bg-warning text-dark rounded-circle fs-3" style="width: 70px; height: 70px;">
              <i class="fas fa-wallet"></i>
            </span>
          </div>
          <h5 class="fw-bold mb-2">2. Salurkan Dana</h5>
          <p class="text-muted small mb-0">Tentukan nominal donasi dan pilih metode pembayaran favoritmu (Transfer Bank, QRIS, E-Wallet).</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="p-4 bg-white rounded-4 shadow-sm h-100">
          <div class="mb-3">
            <span class="d-inline-flex align-items-center justify-content-center bg-success text-white rounded-circle fs-3" style="width: 70px; height: 70px;">
              <i class="fas fa-file-invoice-dollar"></i>
            </span>
          </div>
          <h5 class="fw-bold mb-2">3. Pantau Laporan</h5>
          <p class="text-muted small mb-0">Dapatkan update kabar penyaluran dana secara berkala langsung di halaman kampanye.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- How It Works Section End -->

<!-- Call to Action Banner Start -->
<section class="py-5 bg-primary text-white text-center">
  <div class="container py-3">
    <h2 class="display-6 fw-bold mb-3">Siap Menjadi Jembatan Kebaikan Hari Ini?</h2>
    <p class="lead mb-4 text-white-50 mx-auto" style="max-width: 650px;">
      Berapapun donasi yang kamu sisihkan, itu adalah secercah harapan besar bagi saudara kita.
    </p>
    <a href="{{ route('donate') }}" class="btn btn-warning btn-lg px-5 py-3 fw-bold text-dark shadow rounded-pill">
      Salurkan Bantuan Sekarang <i class="fas fa-arrow-right ms-2"></i>
    </a>
  </div>
</section>
<!-- Call to Action Banner End -->
@endsection

@extends('layouts.landing')

@section('title', 'NUSA — Social Impact & Humanitarian Crowdfunding Platform')

@section('content')
<!-- Hero Section Start -->
<section class="py-5" style="background-color: var(--nusa-charcoal); color: var(--nusa-warm-white);">
  <div class="container py-4 py-lg-5">
    <div class="row align-items-center g-5">
      <div class="col-lg-7">
        
        <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill mb-3" style="background: rgba(102, 138, 120, 0.2); border: 1px solid var(--nusa-muted-green);">
          <span class="rounded-circle d-inline-block" style="width: 8px; height: 8px; background-color: #00B359;"></span>
          <span class="small fw-semibold" style="color: #6EDB9D;">Concept direction</span>
        </div>

        <h1 class="display-3 fw-bold mb-3" style="font-family: var(--font-heading); letter-spacing: -0.03em; color: var(--nusa-warm-white);">
          NUSA<span style="color: var(--nusa-vermilion);">.</span>
        </h1>

        <h2 class="h2 fw-bold mb-3" style="color: #FFFFFF; font-family: var(--font-heading);">
          Together, We Make a Difference.
        </h2>

        <p class="lead mb-4 text-white-50" style="font-size: 1.15rem; max-width: 580px;">
          A collective platform for a more resilient, empowered, and sustainable Indonesia. Memfasilitasi partisipasi publik dalam menghadapi tantangan sosial, lingkungan, ekonomi, dan kemanusiaan.
        </p>

        <!-- Brand Swatch Indicator -->
        <div class="d-flex align-items-center gap-2 mb-4">
          <span class="rounded-2" style="width: 32px; height: 28px; background-color: var(--nusa-vermilion);" title="Vermilion"></span>
          <span class="rounded-2" style="width: 32px; height: 28px; background-color: #252F39; border: 1px solid rgba(255,255,255,0.2);" title="Charcoal"></span>
          <span class="rounded-2" style="width: 32px; height: 28px; background-color: var(--nusa-warm-white);" title="Warm White"></span>
          <span class="rounded-2" style="width: 32px; height: 28px; background-color: var(--nusa-muted-green);" title="Muted Green"></span>
          <small class="ms-2 text-white-50 font-monospace" style="font-size: 11px;">Vermilion · Charcoal · Warm white · Muted green</small>
        </div>

        <div class="d-flex flex-wrap gap-3">
          <a href="{{ route('donate') }}" class="btn btn-nusa-vermilion btn-lg rounded-pill">
            <i class="fas fa-hand-holding-heart me-2"></i> Salurkan Bantuan
          </a>
          <a href="#pillars" class="btn btn-nusa-outline-light btn-lg rounded-pill">
            Jelajahi 6 Pilar Aksi <i class="fas fa-arrow-down ms-2"></i>
          </a>
        </div>

      </div>

      <div class="col-lg-5">
        <div class="p-4 rounded-4 shadow-lg" style="background-color: var(--nusa-charcoal-surface); border: 1px solid rgba(244, 243, 238, 0.1);">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <span class="badge badge-pillar badge-disaster">Tanggap Darurat</span>
            <span class="small text-white-50"><i class="far fa-clock me-1"></i> Baru diperbarui</span>
          </div>
          
          <img src="{{ asset('landing-assets/images/causes/causes1.jpg') }}" alt="Inisiatif NUSA" class="img-fluid rounded-3 mb-3 w-100" style="height: 200px; object-fit: cover;">
          
          <h5 class="fw-bold text-white mb-2" style="font-family: var(--font-heading);">
            Bantuan Logistik & Medis Darurat Korban Bencana Erupsi
          </h5>
          <p class="small text-white-50 mb-3">
            Penyediaan air bersih, posko medis darurat, dan makanan bernutrisi untuk 450 keluarga terdampak di pengungsian.
          </p>

          <div class="mb-3">
            <div class="d-flex justify-content-between small text-white-50 mb-1">
              <span>Dana Terkumpul</span>
              <strong class="text-white">78%</strong>
            </div>
            <div class="progress" style="height: 8px; background-color: rgba(255,255,255,0.1);">
              <div class="progress-bar" style="width: 78%; background-color: var(--nusa-vermilion);"></div>
            </div>
            <div class="d-flex justify-content-between small mt-2">
              <span class="fw-bold" style="color: #6EDB9D;">Rp 156.400.000</span>
              <span class="text-white-50">Target: Rp 200.000.000</span>
            </div>
          </div>

          <a href="{{ route('donate') }}?campaign_id=1" class="btn btn-nusa-vermilion w-100 btn-sm">
            Dukung Inisiatif Ini
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Hero Section End -->

<!-- Collective Impact Stats -->
<section class="py-4 border-bottom" id="impact" style="background-color: var(--nusa-warm-white-surface);">
  <div class="container">
    <div class="row g-4 text-center">
      <div class="col-md-3 col-6">
        <h3 class="display-6 fw-bold mb-1" style="color: var(--nusa-vermilion); font-family: var(--font-heading);">Rp 4.2 M+</h3>
        <p class="text-muted small mb-0 fw-medium">Dukungan Kolektif Terhimpun</p>
      </div>
      <div class="col-md-3 col-6">
        <h3 class="display-6 fw-bold mb-1" style="color: var(--nusa-charcoal); font-family: var(--font-heading);">142</h3>
        <p class="text-muted small mb-0 fw-medium">Inisiatif Terverifikasi</p>
      </div>
      <div class="col-md-3 col-6">
        <h3 class="display-6 fw-bold mb-1" style="color: var(--nusa-muted-green); font-family: var(--font-heading);">34 Provinsi</h3>
        <p class="text-muted small mb-0 fw-medium">Jangkauan Komunitas Resilien</p>
      </div>
      <div class="col-md-3 col-6">
        <h3 class="display-6 fw-bold mb-1" style="color: var(--nusa-charcoal); font-family: var(--font-heading);">100%</h3>
        <p class="text-muted small mb-0 fw-medium">Laporan Dampak Transparan</p>
      </div>
    </div>
  </div>
</section>

<!-- 6 Primary Focus Areas Section Start -->
<section class="py-5" id="pillars">
  <div class="container py-4">
    <div class="text-center mb-5">
      <span class="text-uppercase fw-bold small" style="color: var(--nusa-vermilion); letter-spacing: 0.1em;">
        Fokus Gerakan Kita
      </span>
      <h2 class="display-6 fw-bold mt-2" style="font-family: var(--font-heading);">
        6 Pilar Inisiatif NUSA
      </h2>
      <p class="text-muted mx-auto" style="max-width: 680px;">
        NUSA mengonsolidasikan aksi gotong royong publik ke dalam 6 bidang prioritas untuk membangun masyarakat Indonesia yang berdaya tahan dan mandiri.
      </p>
    </div>

    <div class="row g-4">
      
      <!-- 1. Environmental Protection -->
      <div class="col-lg-4 col-md-6">
        <div class="card h-100 p-4 border-0">
          <div class="d-inline-flex align-items-center justify-content-center rounded-3 mb-3" style="width: 52px; height: 52px; background-color: var(--nusa-muted-green-light); color: var(--nusa-muted-green);">
            <i class="fas fa-seedling fs-4"></i>
          </div>
          <span class="badge badge-pillar badge-environment w-auto align-self-start mb-2">Pilar 01</span>
          <h5 class="fw-bold mb-2">Environmental Protection</h5>
          <p class="text-muted small mb-0">
            Konservasi hutan bakau, perlindungan keanekaragaman hayati pesisir, dan program aksi transisi energi ramah lingkungan.
          </p>
        </div>
      </div>

      <!-- 2. Disaster Relief and Recovery -->
      <div class="col-lg-4 col-md-6">
        <div class="card h-100 p-4 border-0">
          <div class="d-inline-flex align-items-center justify-content-center rounded-3 mb-3" style="width: 52px; height: 52px; background-color: var(--nusa-vermilion-subtle); color: var(--nusa-vermilion);">
            <i class="fas fa-house-damage fs-4"></i>
          </div>
          <span class="badge badge-pillar badge-disaster w-auto align-self-start mb-2">Pilar 02</span>
          <h5 class="fw-bold mb-2">Disaster Relief & Recovery</h5>
          <p class="text-muted small mb-0">
            Respon tanggap darurat bencana alam, distribusi logistik cepat, serta pemulihan tempat tinggal keluarga terdampak.
          </p>
        </div>
      </div>

      <!-- 3. Health and Wellbeing -->
      <div class="col-lg-4 col-md-6">
        <div class="card h-100 p-4 border-0">
          <div class="d-inline-flex align-items-center justify-content-center rounded-3 mb-3" style="width: 52px; height: 52px; background-color: #FEF2F2; color: #DC2626;">
            <i class="fas fa-heartbeat fs-4"></i>
          </div>
          <span class="badge badge-pillar badge-health w-auto align-self-start mb-2">Pilar 03</span>
          <h5 class="fw-bold mb-2">Health and Wellbeing</h5>
          <p class="text-muted small mb-0">
            Bantuan intervensi operasi medis kritis anak, pencegahan stunting, serta penyediaan fasilitas klinik di pelosok kepulauan.
          </p>
        </div>
      </div>

      <!-- 4. Economic Empowerment -->
      <div class="col-lg-4 col-md-6">
        <div class="card h-100 p-4 border-0">
          <div class="d-inline-flex align-items-center justify-content-center rounded-3 mb-3" style="width: 52px; height: 52px; background-color: #FEF3C7; color: #D97706;">
            <i class="fas fa-chart-line fs-4"></i>
          </div>
          <span class="badge badge-pillar badge-economic w-auto align-self-start mb-2">Pilar 04</span>
          <h5 class="fw-bold mb-2">Economic Empowerment</h5>
          <p class="text-muted small mb-0">
            Pemberdayaan modal usaha mandiri petani, kelompok nelayan tradisional, dan UMKM lokal binaan pedesaan.
          </p>
        </div>
      </div>

      <!-- 5. Education -->
      <div class="col-lg-4 col-md-6">
        <div class="card h-100 p-4 border-0">
          <div class="d-inline-flex align-items-center justify-content-center rounded-3 mb-3" style="width: 52px; height: 52px; background-color: #EFF6FF; color: #2563EB;">
            <i class="fas fa-graduation-cap fs-4"></i>
          </div>
          <span class="badge badge-pillar badge-education w-auto align-self-start mb-2">Pilar 05</span>
          <h5 class="fw-bold mb-2">Education</h5>
          <p class="text-muted small mb-0">
            Beasiswa belajar generasi muda, renovasi gedung sekolah rusak di wilayah 3T, serta literasi teknologi anak pulau.
          </p>
        </div>
      </div>

      <!-- 6. Social Welfare -->
      <div class="col-lg-4 col-md-6">
        <div class="card h-100 p-4 border-0">
          <div class="d-inline-flex align-items-center justify-content-center rounded-3 mb-3" style="width: 52px; height: 52px; background-color: #F3E8FF; color: #7E22CE;">
            <i class="fas fa-hands-helping fs-4"></i>
          </div>
          <span class="badge badge-pillar badge-social w-auto align-self-start mb-2">Pilar 06</span>
          <h5 class="fw-bold mb-2">Social Welfare</h5>
          <p class="text-muted small mb-0">
            Santunan dan pangan layak untuk lansia dhuafa sebatang kara, penyandang disabilitas, dan panti asuhan anak yatim.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- 6 Primary Focus Areas Section End -->

<!-- Featured Initiatives Start -->
<section class="py-5" style="background-color: var(--nusa-warm-white-surface);">
  <div class="container py-4">
    <div class="d-flex flex-wrap justify-content-between align-items-end mb-4">
      <div>
        <span class="text-uppercase fw-bold small" style="color: var(--nusa-vermilion);">Inisiatif Berjalan</span>
        <h3 class="fw-bold mb-0 mt-1" style="font-family: var(--font-heading);">Bantu Wujudkan Perubahan Nyata</h3>
      </div>
      <a href="{{ route('campaigns.index') }}" class="btn btn-nusa-outline mt-3 mt-md-0">
        Lihat Semua Inisiatif <i class="fas fa-arrow-right ms-1"></i>
      </a>
    </div>

    <div class="row g-4">
      <!-- Card 1 -->
      <div class="col-lg-4 col-md-6">
        <div class="card h-100 border-0 overflow-hidden">
          <div class="position-relative">
            <img src="{{ asset('landing-assets/images/causes/causes4.jpg') }}" class="card-img-top" alt="Hutan Mangrove" style="height: 220px; object-fit: cover;">
            <span class="badge badge-pillar badge-environment position-absolute top-0 start-0 m-3">
              Environmental
            </span>
          </div>
          <div class="card-body p-4 d-flex flex-column">
            <h5 class="card-title fw-bold">
              <a href="{{ route('campaigns.show', 4) }}" class="text-decoration-none" style="color: var(--nusa-charcoal);">
                Penanaman 10.000 Mangrove Penahan Abrasi Pesisir Pantura
              </a>
            </h5>
            <p class="card-text text-muted small mb-4 flex-grow-1">
              Restorasi sabuk hijau untuk melindungi 3 desa pesisir dari ancaman banjir rob dan erosi tanah.
            </p>
            <div class="mb-3">
              <div class="d-flex justify-content-between small text-muted mb-1">
                <span>Terkumpul</span>
                <strong style="color: var(--nusa-charcoal);">65%</strong>
              </div>
              <div class="progress" style="height: 7px;">
                <div class="progress-bar" style="width: 65%;"></div>
              </div>
              <div class="d-flex justify-content-between small mt-2">
                <span class="fw-bold" style="color: var(--nusa-vermilion);">Rp 39.000.000</span>
                <span class="text-muted">Target: Rp 60.000.000</span>
              </div>
            </div>
            <div class="d-flex justify-content-between align-items-center pt-3 border-top">
              <span class="small text-muted"><i class="far fa-clock me-1"></i> Sisa 12 hari</span>
              <a href="{{ route('donate') }}?campaign_id=4" class="btn btn-sm btn-nusa-vermilion">
                Dukung Aksi
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-lg-4 col-md-6">
        <div class="card h-100 border-0 overflow-hidden">
          <div class="position-relative">
            <img src="{{ asset('landing-assets/images/causes/causes2.jpg') }}" class="card-img-top" alt="Renovasi Sekolah" style="height: 220px; object-fit: cover;">
            <span class="badge badge-pillar badge-education position-absolute top-0 start-0 m-3">
              Education
            </span>
          </div>
          <div class="card-body p-4 d-flex flex-column">
            <h5 class="card-title fw-bold">
              <a href="{{ route('campaigns.show', 2) }}" class="text-decoration-none" style="color: var(--nusa-charcoal);">
                Renovasi Fasilitas Belajar SD Pedalaman Flores Timur
              </a>
            </h5>
            <p class="card-text text-muted small mb-4 flex-grow-1">
              Perbaikan ruang kelas yang rusak berat agar 85 siswa dapat belajar dengan aman dan nyaman tanpa takut atap bocor.
            </p>
            <div class="mb-3">
              <div class="d-flex justify-content-between small text-muted mb-1">
                <span>Terkumpul</span>
                <strong style="color: var(--nusa-charcoal);">42%</strong>
              </div>
              <div class="progress" style="height: 7px;">
                <div class="progress-bar" style="width: 42%;"></div>
              </div>
              <div class="d-flex justify-content-between small mt-2">
                <span class="fw-bold" style="color: var(--nusa-vermilion);">Rp 21.000.000</span>
                <span class="text-muted">Target: Rp 50.000.000</span>
              </div>
            </div>
            <div class="d-flex justify-content-between align-items-center pt-3 border-top">
              <span class="small text-muted"><i class="far fa-clock me-1"></i> Sisa 19 hari</span>
              <a href="{{ route('donate') }}?campaign_id=2" class="btn btn-sm btn-nusa-vermilion">
                Dukung Aksi
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-lg-4 col-md-6">
        <div class="card h-100 border-0 overflow-hidden">
          <div class="position-relative">
            <img src="{{ asset('landing-assets/images/causes/causes3.jpg') }}" class="card-img-top" alt="Paket Pangan" style="height: 220px; object-fit: cover;">
            <span class="badge badge-pillar badge-social position-absolute top-0 start-0 m-3">
              Social Welfare
            </span>
          </div>
          <div class="card-body p-4 d-flex flex-column">
            <h5 class="card-title fw-bold">
              <a href="{{ route('campaigns.show', 3) }}" class="text-decoration-none" style="color: var(--nusa-charcoal);">
                Paket Nutrisi & Pangan Bergizi 500 Lansia Dhuafa
              </a>
            </h5>
            <p class="card-text text-muted small mb-4 flex-grow-1">
              Distribusi bahan makanan sehat berkala untuk lansia sebatang kara prasejahtera di Jawa Barat & Banten.
            </p>
            <div class="mb-3">
              <div class="d-flex justify-content-between small text-muted mb-1">
                <span>Terkumpul</span>
                <strong style="color: var(--nusa-charcoal);">89%</strong>
              </div>
              <div class="progress" style="height: 7px;">
                <div class="progress-bar" style="width: 89%;"></div>
              </div>
              <div class="d-flex justify-content-between small mt-2">
                <span class="fw-bold" style="color: var(--nusa-vermilion);">Rp 31.150.000</span>
                <span class="text-muted">Target: Rp 35.000.000</span>
              </div>
            </div>
            <div class="d-flex justify-content-between align-items-center pt-3 border-top">
              <span class="small text-muted"><i class="far fa-clock me-1"></i> Sisa 4 hari</span>
              <a href="{{ route('donate') }}?campaign_id=3" class="btn btn-sm btn-nusa-vermilion">
                Dukung Aksi
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- Featured Initiatives End -->

<!-- About NUSA / Mission Section Start -->
<section class="py-5" id="about-nusa">
  <div class="container py-4">
    <div class="row align-items-center g-5">
      <div class="col-lg-6">
        <span class="text-uppercase fw-bold small" style="color: var(--nusa-muted-green); letter-spacing: 0.1em;">
          Misi Kolektif
        </span>
        <h2 class="display-6 fw-bold mt-2 mb-3" style="font-family: var(--font-heading);">
          Menghubungkan Niat Baik dengan Aksi Nyata Berkelanjutan
        </h2>
        <p class="text-muted mb-3">
          NUSA lahir dari filosofi luhur gotong royong bangsa Indonesia. Kami percaya bahwa setiap perubahan besar dimulai dari partisipasi kolektif masyarakat yang transparan, mudah diakses, dan terukur dampaknya.
        </p>
        <p class="text-muted mb-4">
          Melalui platform crowdfunding terpusat, para relawan, organisasi kemanusiaan, dan donatur dapat berkolaborasi langsung memantau perjalanan setiap rupiah yang diamanahkan sampai menghasilkan dampak berkelanjutan.
        </p>
        
        <div class="d-flex gap-4">
          <div>
            <h5 class="fw-bold mb-1" style="color: var(--nusa-charcoal); font-family: var(--font-heading);">Transparansi Total</h5>
            <p class="small text-muted mb-0">Laporan real-time progres capaian dan bukti penyaluran dana.</p>
          </div>
          <div>
            <h5 class="fw-bold mb-1" style="color: var(--nusa-charcoal); font-family: var(--font-heading);">Verifikasi Ketat</h5>
            <p class="small text-muted mb-0">Setiap inisiatif divalidasi keabsahannya sebelum dipublikasikan.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="p-5 rounded-4" style="background-color: var(--nusa-charcoal); color: var(--nusa-warm-white);">
          <div class="nusa-logo text-white mb-2">
            NUSA<span class="dot">.</span>
          </div>
          <h4 class="fw-bold mb-3" style="color: var(--nusa-warm-white); font-family: var(--font-heading);">
            Together, We Make a Difference.
          </h4>
          <p class="text-white-50 mb-4">
            Bergabunglah bersama ribuan relawan dan donatur yang telah menggerakkan dampak nyata bagi sesama di penjuru nusantara.
          </p>
          <a href="{{ route('donate') }}" class="btn btn-nusa-vermilion">
            Mulai Berpartisipasi Hari Ini
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- About NUSA End -->
@endsection

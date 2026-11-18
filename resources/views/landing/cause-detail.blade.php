@extends('layouts.landing')

@section('title', 'Detail Inisiatif — NUSA')

@section('content')
<div class="py-3 border-bottom" style="background-color: var(--nusa-warm-white-surface);">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0 small">
        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-decoration-none" style="color: var(--nusa-charcoal);">Beranda</a></li>
        <li class="breadcrumb-item"><a href="{{ route('campaigns.index') }}" class="text-decoration-none" style="color: var(--nusa-charcoal);">Inisiatif</a></li>
        <li class="breadcrumb-item active" aria-current="page">Bantuan Erupsi</li>
      </ol>
    </nav>
  </div>
</div>

<div class="container py-5">
  <div class="row g-4">
    <!-- Main Detail Column -->
    <div class="col-lg-8">
      <div class="mb-3">
        <span class="badge badge-pillar badge-disaster mb-2">Disaster Relief and Recovery</span>
        <h2 class="display-6 fw-bold mb-2" style="font-family: var(--font-heading); color: var(--nusa-charcoal);">
          Bantuan Logistik & Medis Darurat Korban Bencana Erupsi
        </h2>
        <div class="d-flex flex-wrap align-items-center gap-3 text-muted small">
          <span><i class="fas fa-map-marker-alt text-danger me-1"></i> Flores Timur, NTT</span>
          <span><i class="far fa-calendar-alt me-1"></i> Dipublikasikan: 12 Nov 2026</span>
          <span><i class="fas fa-check-circle text-success me-1"></i> Terverifikasi NUSA Relawan</span>
        </div>
      </div>

      <div class="rounded-4 overflow-hidden mb-4 shadow-sm">
        <img src="{{ asset('landing-assets/images/causes/causes1.jpg') }}" alt="Inisiatif Tanggap Bencana" class="img-fluid w-100" style="max-height: 440px; object-fit: cover;">
      </div>

      <!-- Story tabs -->
      <div class="card border-0 p-4 mb-4" style="background-color: var(--nusa-pure-white);">
        <h4 class="fw-bold mb-3 border-bottom pb-2" style="font-family: var(--font-heading);">Latar Belakang Inisiatif</h4>
        <p class="text-muted leading-relaxed">
          Erupsi gunung berapi yang terjadi baru-baru ini memaksa lebih dari <strong>2.800 jiwa warga</strong> mengungsi ke posko darurat dengan fasilitas serba terbatas. Abu vulkanik tebal menyebabkan infeksi saluran pernapasan akut (ISPA) yang rentan menyerang balita dan lansia.
        </p>
        <p class="text-muted leading-relaxed">
          NUSA bersama jejaring relawan lokal telah mendirikan posko tanggap darurat dan menyiagakan ambulans operasional. Saat ini, fokus utama adalah pengadaan masker medis khusus, tangki air bersih, makanan bernutrisi untuk bayi dan balita, serta alas tidur higienis di lokasi pengungsian.
        </p>

        <div class="p-3 rounded-3 mt-3 border-start border-4" style="background-color: var(--nusa-muted-green-light); border-color: var(--nusa-muted-green) !important;">
          <h6 class="fw-bold mb-1" style="color: var(--nusa-charcoal); font-family: var(--font-heading);">Alokasi Penyaluran Kontribusi Kolektif:</h6>
          <ul class="mb-0 small text-muted">
            <li>Paket Masker Medis & Obat-Obatan ISPA (1.500 Box): Rp 45.000.000</li>
            <li>Distribusi Air Bersih & Sanitasi Higienis (30 Hari): Rp 60.000.000</li>
            <li>Dapur Umum & Makanan Bernutrisi Balita/Lansia: Rp 65.000.000</li>
            <li>Kit Trauma Healing & Pendidikan Darurat Anak: Rp 30.000.000</li>
          </ul>
        </div>
      </div>

      <!-- Donor Testimonials & Prayers -->
      <div class="card border-0 p-4" style="background-color: var(--nusa-pure-white);">
        <h5 class="fw-bold mb-3" style="font-family: var(--font-heading);">Dukungan Kolektif Terbaru (412 Kontributor)</h5>
        
        <div class="d-flex align-items-start gap-3 py-3 border-bottom">
          <div class="rounded-circle d-flex align-items-center justify-content-center fw-bold text-white" style="width: 44px; height: 44px; min-width: 44px; background-color: var(--nusa-charcoal);">
            IK
          </div>
          <div>
            <div class="d-flex align-items-center gap-2">
              <strong style="color: var(--nusa-charcoal);">Indra Kusuma</strong>
              <span class="badge" style="background-color: var(--nusa-vermilion-subtle); color: var(--nusa-vermilion);">Rp 500.000</span>
            </div>
            <p class="small text-muted mb-1 mt-1">"Semoga saudara-saudara kita di Flores selalu dilindungi dan tabah menghadapi ujian ini. Lekas pulih!"</p>
            <small class="text-muted" style="font-size: 11px;">15 menit yang lalu</small>
          </div>
        </div>

        <div class="d-flex align-items-start gap-3 py-3 border-bottom">
          <div class="rounded-circle d-flex align-items-center justify-content-center fw-bold text-white" style="width: 44px; height: 44px; min-width: 44px; background-color: var(--nusa-muted-green);">
            HA
          </div>
          <div>
            <div class="d-flex align-items-center gap-2">
              <strong style="color: var(--nusa-charcoal);">Hamba Allah</strong>
              <span class="badge" style="background-color: var(--nusa-vermilion-subtle); color: var(--nusa-vermilion);">Rp 250.000</span>
            </div>
            <p class="small text-muted mb-1 mt-1">"Sedikit uluran tangan dari kami, semoga bermanfaat untuk kebutuhan makan adik-adik balita di posko."</p>
            <small class="text-muted" style="font-size: 11px;">45 menit yang lalu</small>
          </div>
        </div>
      </div>
    </div>

    <!-- Sidebar Donation Box -->
    <div class="col-lg-4">
      <div class="card border-0 shadow-sm p-4 sticky-top" style="top: 90px; background-color: var(--nusa-pure-white);">
        <span class="text-muted small fw-medium">Dukungan Terkumpul</span>
        <h3 class="fw-bold mb-1" style="font-family: var(--font-heading); color: var(--nusa-vermilion);">Rp 156.400.000</h3>
        <p class="small text-muted mb-3">dari target kebutuhan <strong>Rp 200.000.000</strong></p>

        <div class="progress mb-2" style="height: 10px;">
          <div class="progress-bar" role="progressbar" style="width: 78%; background-color: var(--nusa-vermilion);"></div>
        </div>
        <div class="d-flex justify-content-between small text-muted mb-4">
          <span><strong>78%</strong> tercapai</span>
          <span>Sisa <strong>7 hari lagi</strong></span>
        </div>

        <a href="{{ route('donate') }}?campaign_id=1" class="btn btn-nusa-vermilion btn-lg w-100 fw-bold py-3 mb-3">
          <i class="fas fa-hand-holding-heart me-2"></i> Salurkan Donasi
        </a>

        <div class="p-3 rounded-3 text-center small text-muted mb-3" style="background-color: var(--nusa-warm-white);">
          <i class="fas fa-lock text-success me-1"></i> Transaksi terenkripsi & diaudit akuntabel oleh tim kepatuhan NUSA.
        </div>

        <div class="border-top pt-3">
          <h6 class="fw-bold small mb-2 text-dark" style="font-family: var(--font-heading);">Inisiator Program</h6>
          <div class="d-flex align-items-center gap-3">
            <div class="rounded-circle d-flex align-items-center justify-content-center text-white" style="width: 40px; height: 40px; background-color: var(--nusa-charcoal);">
              <i class="fas fa-users"></i>
            </div>
            <div>
              <div class="fw-semibold small" style="color: var(--nusa-charcoal);">Tim Tanggap NUSA Peduli</div>
              <small class="text-success"><i class="fas fa-check-circle"></i> Organisasi Berizin Kemensos RI</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

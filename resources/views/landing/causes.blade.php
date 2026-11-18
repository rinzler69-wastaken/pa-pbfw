@extends('layouts.landing')

@section('title', 'Semua Inisiatif & Program — NUSA')

@section('content')
<!-- Page Header Banner -->
<div class="py-5 text-white" style="background-color: var(--nusa-charcoal);">
  <div class="container py-4 text-center">
    <span class="badge badge-pillar badge-environment mb-2">Inisiatif Terbuka</span>
    <h1 class="display-5 fw-bold mb-2" style="font-family: var(--font-heading); color: var(--nusa-warm-white);">
      Program Aksi Kemanusiaan & Lingkungan
    </h1>
    <p class="text-white-50 mb-0 mx-auto" style="max-width: 650px;">
      Jelajahi dan pilih inisiatif yang ingin kamu dukung. Setiap kontribusi adalah langkah maju untuk Indonesia yang lebih tangguh dan berdaya.
    </p>
  </div>
</div>

<div class="container py-5">
  <!-- 6 Pillars Filter Buttons -->
  <div class="d-flex flex-wrap justify-content-between align-items-center mb-4 pb-3 border-bottom gap-3">
    <div class="d-flex flex-wrap gap-2">
      <a href="{{ route('campaigns.index') }}" class="btn btn-nusa-vermilion btn-sm rounded-pill px-3">Semua (6)</a>
      <a href="#" class="btn btn-nusa-outline btn-sm rounded-pill px-3">Environmental</a>
      <a href="#" class="btn btn-nusa-outline btn-sm rounded-pill px-3">Disaster Relief</a>
      <a href="#" class="btn btn-nusa-outline btn-sm rounded-pill px-3">Health & Wellbeing</a>
      <a href="#" class="btn btn-nusa-outline btn-sm rounded-pill px-3">Economic Empowerment</a>
      <a href="#" class="btn btn-nusa-outline btn-sm rounded-pill px-3">Education</a>
      <a href="#" class="btn btn-nusa-outline btn-sm rounded-pill px-3">Social Welfare</a>
    </div>
    <div class="text-muted small">
      Total <strong>6 Inisiatif</strong> aktif terverifikasi
    </div>
  </div>

  <div class="row g-4">
    @php
      $nusaCauses = [
        [
          'id' => 1,
          'title' => 'Bantuan Logistik & Medis Darurat Korban Bencana Erupsi',
          'pillar' => 'Disaster Relief & Recovery',
          'badge' => 'badge-disaster',
          'image' => 'causes/causes1.jpg',
          'desc' => 'Penyediaan air bersih, posko medis darurat, dan makanan bernutrisi untuk 450 keluarga terdampak di pengungsian.',
          'raised' => 156400000,
          'target' => 200000000,
          'percentage' => 78,
          'days_left' => 7
        ],
        [
          'id' => 2,
          'title' => 'Renovasi Fasilitas Belajar SD Pedalaman Flores Timur',
          'pillar' => 'Education',
          'badge' => 'badge-education',
          'image' => 'causes/causes2.jpg',
          'desc' => 'Perbaikan ruang kelas yang rusak berat agar 85 siswa dapat belajar dengan aman dan nyaman tanpa takut atap bocor.',
          'raised' => 21000000,
          'target' => 50000000,
          'percentage' => 42,
          'days_left' => 19
        ],
        [
          'id' => 3,
          'title' => 'Paket Nutrisi & Pangan Bergizi 500 Lansia Dhuafa',
          'pillar' => 'Social Welfare',
          'badge' => 'badge-social',
          'image' => 'causes/causes3.jpg',
          'desc' => 'Distribusi bahan makanan sehat berkala untuk lansia sebatang kara prasejahtera di Jawa Barat & Banten.',
          'raised' => 31150000,
          'target' => 35000000,
          'percentage' => 89,
          'days_left' => 4
        ],
        [
          'id' => 4,
          'title' => 'Penanaman 10.000 Mangrove Penahan Abrasi Pesisir Pantura',
          'pillar' => 'Environmental Protection',
          'badge' => 'badge-environment',
          'image' => 'causes/causes4.jpg',
          'desc' => 'Restorasi sabuk hijau untuk melindungi 3 desa pesisir dari ancaman banjir rob dan erosi tanah.',
          'raised' => 39000000,
          'target' => 60000000,
          'percentage' => 65,
          'days_left' => 12
        ],
        [
          'id' => 5,
          'title' => 'Permodalan Usaha Perahu & Alat Tangkap Nelayan Tradisional',
          'pillar' => 'Economic Empowerment',
          'badge' => 'badge-economic',
          'image' => 'causes/causes5.jpg',
          'desc' => 'Penyediaan jaring ramah lingkungan dan modal bahan bakar untuk kelompok nelayan mandiri di Morotai.',
          'raised' => 28500000,
          'target' => 45000000,
          'percentage' => 63,
          'days_left' => 15
        ],
        [
          'id' => 6,
          'title' => 'Layanan Kesehatan Gratis & Intervensi Gizi Anak Pesisir',
          'pillar' => 'Health and Wellbeing',
          'badge' => 'badge-health',
          'image' => 'causes/causes6.jpg',
          'desc' => 'Klinik apung keliling untuk pemeriksaan kesehatan ibu hamil, balita, dan pencegahan gizi buruk di pulau terpencil.',
          'raised' => 42000000,
          'target' => 50000000,
          'percentage' => 84,
          'days_left' => 8
        ],
      ];
    @endphp

    @foreach($nusaCauses as $item)
      <div class="col-lg-4 col-md-6">
        <div class="card h-100 border-0 overflow-hidden">
          <div class="position-relative">
            <img src="{{ asset('landing-assets/images/' . $item['image']) }}" class="card-img-top" alt="{{ $item['title'] }}" style="height: 220px; object-fit: cover;">
            <span class="badge badge-pillar {{ $item['badge'] }} position-absolute top-0 start-0 m-3">
              {{ $item['pillar'] }}
            </span>
          </div>
          <div class="card-body p-4 d-flex flex-column">
            <h5 class="card-title fw-bold">
              <a href="{{ route('campaigns.show', $item['id']) }}" class="text-decoration-none" style="color: var(--nusa-charcoal);">
                {{ $item['title'] }}
              </a>
            </h5>
            <p class="card-text text-muted small mb-4 flex-grow-1">
              {{ $item['desc'] }}
            </p>
            <div class="mb-3">
              <div class="d-flex justify-content-between small text-muted mb-1">
                <span>Terkumpul</span>
                <strong style="color: var(--nusa-charcoal);">{{ $item['percentage'] }}%</strong>
              </div>
              <div class="progress" style="height: 7px;">
                <div class="progress-bar" style="width: {{ $item['percentage'] }}%;"></div>
              </div>
              <div class="d-flex justify-content-between small mt-2">
                <span class="fw-bold" style="color: var(--nusa-vermilion);">Rp {{ number_format($item['raised'], 0, ',', '.') }}</span>
                <span class="text-muted">Target: Rp {{ number_format($item['target'], 0, ',', '.') }}</span>
              </div>
            </div>
            <div class="d-flex justify-content-between align-items-center pt-3 border-top">
              <span class="small text-muted"><i class="far fa-clock me-1"></i> Sisa {{ $item['days_left'] }} hari</span>
              <a href="{{ route('donate') }}?campaign_id={{ $item['id'] }}" class="btn btn-sm btn-nusa-vermilion">
                Dukung Aksi
              </a>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection

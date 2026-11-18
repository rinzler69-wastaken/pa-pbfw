@extends('layouts.landing')

@section('title', 'Daftar Program Donasi - Penggalangan Dana Online')

@section('content')
<!-- Page Header Banner -->
<div class="py-5 bg-secondary text-white text-center">
  <div class="container py-4">
    <h1 class="fw-bold mb-2">Program Penggalangan Dana</h1>
    <p class="text-white-50 mb-0">Pilih program yang ingin kamu bantu dan tebarkan senyuman kepada mereka</p>
  </div>
</div>

<div class="container py-5">
  <!-- Filter / Category pills -->
  <div class="d-flex flex-wrap justify-content-between align-items-center mb-4 pb-3 border-bottom gap-3">
    <div class="d-flex flex-wrap gap-2">
      <a href="#" class="btn btn-primary btn-sm rounded-pill px-3">Semua Kategori</a>
      <a href="#" class="btn btn-outline-secondary btn-sm rounded-pill px-3">Medis & Kesehatan</a>
      <a href="#" class="btn btn-outline-secondary btn-sm rounded-pill px-3">Pendidikan</a>
      <a href="#" class="btn btn-outline-secondary btn-sm rounded-pill px-3">Bencana Alam</a>
      <a href="#" class="btn btn-outline-secondary btn-sm rounded-pill px-3">Panti Asuhan & Dhuafa</a>
    </div>
    <div class="text-muted small">
      Menampilkan <strong>6</strong> program aktif
    </div>
  </div>

  <div class="row g-4">
    @php
      $dummyCauses = [
        [
          'id' => 1,
          'title' => 'Bantu Dek Alif Berjuang Melawan Kelainan Jantung Bawaan',
          'category' => 'Medis',
          'badge_class' => 'bg-danger',
          'image' => 'causes/causes1.jpg',
          'desc' => 'Dek Alif (3 tahun) membutuhkan tindakan operasi katup jantung segera sebelum kondisinya semakin kritis.',
          'raised' => 45000000,
          'target' => 60000000,
          'percentage' => 75,
          'days_left' => 6
        ],
        [
          'id' => 2,
          'title' => 'Renovasi Gedung Belajar SD Pelosok Negeri yang Nyaris Roboh',
          'category' => 'Pendidikan',
          'badge_class' => 'bg-warning text-dark',
          'image' => 'causes/causes2.jpg',
          'desc' => '70 siswa harus belajar bergantian karena plafon kelas ambruk terkena badai angin beberapa pekan lalu.',
          'raised' => 21000000,
          'target' => 50000000,
          'percentage' => 42,
          'days_left' => 14
        ],
        [
          'id' => 3,
          'title' => 'Paket Pangan & Sembako untuk 500 Lansia Dhuafa Sebatang Kara',
          'category' => 'Kemanusiaan',
          'badge_class' => 'bg-info text-dark',
          'image' => 'causes/causes3.jpg',
          'desc' => 'Bantu para lansia tidak mampu agar dapat mencukupi kebutuhan makan sehat harian mereka dengan layak.',
          'raised' => 31150000,
          'target' => 35000000,
          'percentage' => 89,
          'days_left' => 3
        ],
        [
          'id' => 4,
          'title' => 'Air Bersih untuk Warga Desa Kekeringan di Gunung Kidul',
          'category' => 'Infrastruktur Sosial',
          'badge_class' => 'bg-primary',
          'image' => 'causes/causes4.jpg',
          'desc' => 'Pembangunan sumur bor dan pipanisasi demi menyediakan air bersih layak minum untuk 250 KK.',
          'raised' => 18500000,
          'target' => 40000000,
          'percentage' => 46,
          'days_left' => 21
        ],
        [
          'id' => 5,
          'title' => 'Beasiswa Pendidikan Santri Yatim Penghafal Al-Quran',
          'category' => 'Pendidikan',
          'badge_class' => 'bg-success',
          'image' => 'causes/causes5.jpg',
          'desc' => 'Dukungan biaya hidup dan perlengkapan sekolah untuk santri yatim piatu berprestasi.',
          'raised' => 12400000,
          'target' => 25000000,
          'percentage' => 50,
          'days_left' => 18
        ],
        [
          'id' => 6,
          'title' => 'Bantuan Medis Balita Penderita Tumor Mata di Kupang',
          'category' => 'Medis',
          'badge_class' => 'bg-danger',
          'image' => 'causes/causes6.jpg',
          'desc' => 'Biaya akomodasi dan kemoterapi lanjutan balita usia 2 tahun di rumah sakit rujukan provinsi.',
          'raised' => 28000000,
          'target' => 30000000,
          'percentage' => 93,
          'days_left' => 2
        ],
      ];
    @endphp

    @foreach($dummyCauses as $item)
      <div class="col-lg-4 col-md-6">
        <div class="card h-100 shadow-sm border-0 rounded-3 overflow-hidden">
          <div class="position-relative">
            <img src="{{ asset('landing-assets/images/' . $item['image']) }}" class="card-img-top" alt="{{ $item['title'] }}" style="height: 220px; object-fit: cover;">
            <span class="badge {{ $item['badge_class'] }} position-absolute top-0 start-0 m-3 px-3 py-2">
              {{ $item['category'] }}
            </span>
          </div>
          <div class="card-body p-4 d-flex flex-column">
            <h5 class="card-title fw-bold">
              <a href="{{ route('campaigns.show', $item['id']) }}" class="text-dark text-decoration-none hover-primary">
                {{ $item['title'] }}
              </a>
            </h5>
            <p class="card-text text-muted small mb-4 flex-grow-1">
              {{ $item['desc'] }}
            </p>
            <div class="mb-3">
              <div class="d-flex justify-content-between small text-muted mb-1">
                <span>Terkumpul</span>
                <span class="fw-bold text-dark">{{ $item['percentage'] }}%</span>
              </div>
              <div class="progress" style="height: 8px;">
                <div class="progress-bar bg-primary" role="progressbar" style="width: {{ $item['percentage'] }}%"></div>
              </div>
              <div class="d-flex justify-content-between small mt-2">
                <span class="text-primary fw-bold">Rp {{ number_format($item['raised'], 0, ',', '.') }}</span>
                <span class="text-muted">Target: Rp {{ number_format($item['target'], 0, ',', '.') }}</span>
              </div>
            </div>
            <div class="d-flex justify-content-between align-items-center pt-3 border-top">
              <span class="small text-muted"><i class="far fa-clock me-1"></i> Sisa {{ $item['days_left'] }} hari</span>
              <a href="{{ route('donate') }}?campaign_id={{ $item['id'] }}" class="btn btn-sm btn-primary px-3 rounded-pill">
                Donasi Sekarang
              </a>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection

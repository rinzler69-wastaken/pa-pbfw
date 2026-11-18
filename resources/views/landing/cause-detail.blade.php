@extends('layouts.landing')

@section('title', 'Detail Program Donasi - Dek Alif')

@section('content')
<div class="py-4 bg-light border-bottom">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0 small">
        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-decoration-none">Beranda</a></li>
        <li class="breadcrumb-item"><a href="{{ route('campaigns.index') }}" class="text-decoration-none">Program Donasi</a></li>
        <li class="breadcrumb-item active" aria-current="page">Bantu Dek Alif</li>
      </ol>
    </nav>
  </div>
</div>

<div class="container py-5">
  <div class="row g-4">
    <!-- Main Detail Column -->
    <div class="col-lg-8">
      <h2 class="fw-bold mb-3">Bantu Dek Alif Berjuang Melawan Kelainan Jantung Bawaan</h2>
      <div class="d-flex flex-wrap align-items-center gap-3 mb-4 text-muted small">
        <span><i class="fas fa-tag text-primary me-1"></i> Medis & Kesehatan</span>
        <span><i class="far fa-calendar-alt text-primary me-1"></i> Dibuat: 10 Oktober 2026</span>
        <span><i class="fas fa-shield-alt text-success me-1"></i> Terverifikasi Medis</span>
      </div>

      <div class="rounded-4 overflow-hidden mb-4 shadow-sm">
        <img src="{{ asset('landing-assets/images/causes/causes1.jpg') }}" alt="Dek Alif" class="img-fluid w-100" style="max-height: 440px; object-fit: cover;">
      </div>

      <!-- Story tabs -->
      <div class="card border-0 shadow-sm rounded-3 p-4 mb-4">
        <h4 class="fw-bold mb-3 border-bottom pb-2">Cerita Penggalangan Dana</h4>
        <p class="text-muted leading-relaxed">
          Halo para <strong>#OrangBaik</strong>, perkenalkan nama saya Rahmat, ayah dari Muhammad Alif (3 tahun). Sejak usia 6 bulan, Alif sering mengalami sesak napas berat dan bibir membiru saat menangis. Setelah pemeriksaan intensif di RSUP, dokter mendiagnosis Alif mengidap <em>Tetralogy of Fallot</em> (kelainan anatomi jantung bawaan).
        </p>
        <p class="text-muted leading-relaxed">
          Satu-satunya jalan bagi Alif untuk bisa tumbuh sehat seperti anak-anak lainnya adalah melalui operasi koreksi jantung total. Biaya yang dibutuhkan untuk operasi dan perawatan intensif PICU pasca-operasi mencapai puluhan juta rupiah di luar tanggungan BPJS.
        </p>
        <p class="text-muted leading-relaxed">
          Sebagai buruh harian lepas, tabungan kami sudah terkuras untuk biaya bolak-balik berobat dan obat non-BPJS. Oleh karena itu, kami memohon doa dan bantuan kebaikan dari teman-teman semua agar Alif bisa segera menjalani operasi.
        </p>

        <div class="p-3 bg-light rounded-3 mt-3 border-start border-4 border-primary">
          <h6 class="fw-bold mb-1">Rencana Penggunaan Dana:</h6>
          <ul class="mb-0 small text-muted">
            <li>Tindakan Operasi & Alat Khusus: Rp 35.000.000</li>
            <li>Ruang PICU & Obat Tambahan (7 Hari): Rp 15.000.000</li>
            <li>Akomodasi & Pemulihan Rawat Jalan: Rp 10.000.000</li>
          </ul>
        </div>
      </div>

      <!-- Recent Donors Section -->
      <div class="card border-0 shadow-sm rounded-3 p-4">
        <h5 class="fw-bold mb-3">Doa & Donasi Terbaru (312 Donatur)</h5>
        
        <div class="d-flex align-items-start gap-3 py-3 border-bottom">
          <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center fw-bold" style="width: 44px; height: 44px; min-width: 44px;">
            HA
          </div>
          <div>
            <div class="d-flex align-items-center gap-2">
              <strong class="text-dark">Hamba Allah</strong>
              <span class="badge bg-light text-primary border">Rp 200.000</span>
            </div>
            <p class="small text-muted mb-1 mt-1">"Semoga operasinya lancar ya nak, lekas sehat dan tumbuh jadi anak yang sholeh."</p>
            <small class="text-muted" style="font-size: 11px;">10 menit yang lalu</small>
          </div>
        </div>

        <div class="d-flex align-items-start gap-3 py-3 border-bottom">
          <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center fw-bold" style="width: 44px; height: 44px; min-width: 44px;">
            BS
          </div>
          <div>
            <div class="d-flex align-items-center gap-2">
              <strong class="text-dark">Budi Santoso</strong>
              <span class="badge bg-light text-primary border">Rp 500.000</span>
            </div>
            <p class="small text-muted mb-1 mt-1">"Semangat terus untuk orang tua dek Alif. Doa kami bersama kalian sekeluarga."</p>
            <small class="text-muted" style="font-size: 11px;">1 jam yang lalu</small>
          </div>
        </div>

        <div class="d-flex align-items-start gap-3 py-3">
          <div class="bg-warning text-dark rounded-circle d-flex align-items-center justify-content-center fw-bold" style="width: 44px; height: 44px; min-width: 44px;">
            SR
          </div>
          <div>
            <div class="d-flex align-items-center gap-2">
              <strong class="text-dark">Siti Rahma</strong>
              <span class="badge bg-light text-primary border">Rp 50.000</span>
            </div>
            <p class="small text-muted mb-1 mt-1">"Sedikit rezeki semoga bermanfaat dan berkah untuk kesembuhan dek Alif."</p>
            <small class="text-muted" style="font-size: 11px;">3 jam yang lalu</small>
          </div>
        </div>
      </div>
    </div>

    <!-- Sidebar Donation Box -->
    <div class="col-lg-4">
      <div class="card border-0 shadow rounded-4 p-4 sticky-top" style="top: 100px;">
        <span class="text-muted small">Dana Terkumpul</span>
        <h3 class="fw-bold text-primary mb-1">Rp 45.000.000</h3>
        <p class="small text-muted mb-3">dari target <strong>Rp 60.000.000</strong></p>

        <div class="progress mb-2" style="height: 10px;">
          <div class="progress-bar bg-primary" role="progressbar" style="width: 75%"></div>
        </div>
        <div class="d-flex justify-content-between small text-muted mb-4">
          <span><strong>75%</strong> tercapai</span>
          <span>Sisa <strong>6 hari</strong></span>
        </div>

        <a href="{{ route('donate') }}?campaign_id=1" class="btn btn-warning btn-lg w-100 fw-bold text-dark shadow-sm py-3 mb-3">
          <i class="fas fa-heart text-danger me-2"></i> Donasi Sekarang
        </a>

        <div class="p-3 bg-light rounded-3 text-center small text-muted mb-3">
          <i class="fas fa-lock text-success me-1"></i> Pembayaran aman terenkripsi via Transfer Bank, QRIS, & Dompet Digital.
        </div>

        <div class="border-top pt-3">
          <h6 class="fw-bold small mb-2 text-dark">Informasi Penggalang Dana</h6>
          <div class="d-flex align-items-center gap-3">
            <div class="bg-secondary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
              <i class="fas fa-user"></i>
            </div>
            <div>
              <div class="fw-semibold small text-dark">Rahmat Hidayat (Orang Tua)</div>
              <small class="text-success"><i class="fas fa-check-circle"></i> Identitas Terverifikasi KTP</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

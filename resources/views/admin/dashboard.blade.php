@extends('layouts.admin')

@section('title', 'Admin Dashboard - Penggalangan Dana Online')
@section('page-title', 'Ringkasan Dashboard')

@section('breadcrumb')
<li class="breadcrumb-item active">Dashboard</li>
@endsection

@section('content')
<!-- Metric Cards Row -->
<div class="row">
    <div class="col-md-6 col-lg-3">
        <div class="card report-card">
            <div class="card-body">
                <div class="row d-flex justify-content-between">
                    <div class="col">
                        <p class="text-dark mb-0 fw-semibold">Total Dana Terhimpun</p>
                        <h3 class="my-2 text-primary font-22 fw-bold">Rp 155.650.000</h3>
                        <p class="mb-0 text-truncate text-muted"><span class="text-success"><i class="mdi mdi-trending-up"></i> +14.5%</span> dari bulan lalu</p>
                    </div>
                    <div class="col-auto align-self-center">
                        <div class="report-main-icon bg-light-alt rounded-circle p-2 text-primary">
                            <i class="ti ti-currency-dollar font-24"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-3">
        <div class="card report-card">
            <div class="card-body">
                <div class="row d-flex justify-content-between">
                    <div class="col">
                        <p class="text-dark mb-0 fw-semibold">Program Kampanye Aktif</p>
                        <h3 class="my-2 text-dark font-22 fw-bold">18 Program</h3>
                        <p class="mb-0 text-truncate text-muted"><span class="text-info"><i class="mdi mdi-heart-pulse"></i> 6 Medis</span>, 5 Pendidikan</p>
                    </div>
                    <div class="col-auto align-self-center">
                        <div class="report-main-icon bg-light-alt rounded-circle p-2 text-success">
                            <i class="ti ti-heart-handshake font-24"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-3">
        <div class="card report-card">
            <div class="card-body">
                <div class="row d-flex justify-content-between">
                    <div class="col">
                        <p class="text-dark mb-0 fw-semibold">Total Donatur (#OrangBaik)</p>
                        <h3 class="my-2 text-dark font-22 fw-bold">1.240 Orang</h3>
                        <p class="mb-0 text-truncate text-muted"><span class="text-success"><i class="mdi mdi-trending-up"></i> +88 donatur baru</span> minggu ini</p>
                    </div>
                    <div class="col-auto align-self-center">
                        <div class="report-main-icon bg-light-alt rounded-circle p-2 text-warning">
                            <i class="ti ti-users font-24"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-3">
        <div class="card report-card">
            <div class="card-body">
                <div class="row d-flex justify-content-between">
                    <div class="col">
                        <p class="text-dark mb-0 fw-semibold">Menunggu Verifikasi</p>
                        <h3 class="my-2 text-danger font-22 fw-bold">5 Donasi</h3>
                        <p class="mb-0 text-truncate text-muted">Perlu konfirmasi mutasi bank</p>
                    </div>
                    <div class="col-auto align-self-center">
                        <div class="report-main-icon bg-light-alt rounded-circle p-2 text-danger">
                            <i class="ti ti-clock-hour-4 font-24"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Table Row -->
<div class="row mt-3">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title mb-0">Transaksi Donasi Masuk Terbaru</h4>
                <a href="{{ route('admin.donations.index') }}" class="btn btn-sm btn-outline-primary">Lihat Semua</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead class="thead-light">
                            <tr>
                                <th>ID Donasi</th>
                                <th>Nama Donatur</th>
                                <th>Program Donasi</th>
                                <th>Nominal</th>
                                <th>Metode</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>#DON-8921</code></td>
                                <td><strong>Hamba Allah</strong></td>
                                <td>Bantu Dek Alif Operasi Jantung</td>
                                <td class="text-primary fw-semibold">Rp 200.000</td>
                                <td><span class="badge bg-light text-dark border">QRIS</span></td>
                                <td><span class="badge bg-success">Berhasil</span></td>
                            </tr>
                            <tr>
                                <td><code>#DON-8920</code></td>
                                <td><strong>Budi Santoso</strong></td>
                                <td>Bantu Dek Alif Operasi Jantung</td>
                                <td class="text-primary fw-semibold">Rp 500.000</td>
                                <td><span class="badge bg-light text-dark border">BCA</span></td>
                                <td><span class="badge bg-success">Berhasil</span></td>
                            </tr>
                            <tr>
                                <td><code>#DON-8919</code></td>
                                <td><strong>Siti Rahma</strong></td>
                                <td>Paket Pangan 500 Lansia Dhuafa</td>
                                <td class="text-primary fw-semibold">Rp 50.000</td>
                                <td><span class="badge bg-light text-dark border">Mandiri</span></td>
                                <td><span class="badge bg-success">Berhasil</span></td>
                            </tr>
                            <tr>
                                <td><code>#DON-8918</code></td>
                                <td><strong>Rian Hendrawan</strong></td>
                                <td>Renovasi Gedung Belajar SD Pelosok</td>
                                <td class="text-primary fw-semibold">Rp 1.000.000</td>
                                <td><span class="badge bg-light text-dark border">Transfer BRI</span></td>
                                <td><span class="badge bg-warning text-dark">Pending</span></td>
                            </tr>
                            <tr>
                                <td><code>#DON-8917</code></td>
                                <td><strong>Dewi Lestari</strong></td>
                                <td>Air Bersih Warga Gunung Kidul</td>
                                <td class="text-primary fw-semibold">Rp 150.000</td>
                                <td><span class="badge bg-light text-dark border">QRIS</span></td>
                                <td><span class="badge bg-success">Berhasil</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions & Status -->
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Aksi Cepat Admin</h4>
            </div>
            <div class="card-body">
                <div class="d-grid gap-2">
                    <a href="{{ route('admin.campaigns.create') }}" class="btn btn-primary py-2 text-start">
                        <i class="ti ti-plus me-2"></i> Tambah Program Donasi Baru
                    </a>
                    <a href="{{ route('admin.donations.index') }}" class="btn btn-outline-secondary py-2 text-start">
                        <i class="ti ti-checklist me-2"></i> Verifikasi Donasi Tertunda (5)
                    </a>
                    <a href="{{ route('campaigns.index') }}" target="_blank" class="btn btn-outline-info py-2 text-start">
                        <i class="ti ti-eye me-2"></i> Preview Halaman Donasi Publik
                    </a>
                </div>

                <div class="alert alert-light border mt-4 mb-0">
                    <h6 class="alert-heading fw-bold font-13 mb-1"><i class="ti ti-info-circle text-primary me-1"></i> Catatan Progres Matkul</h6>
                    <p class="font-12 text-muted mb-0">
                        Layout master Blade dan routing dasar untuk Landing Page (RoyalHeart) dan Admin Dashboard (Unikit) telah siap untuk disajikan pada pertemuan berikutnya.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

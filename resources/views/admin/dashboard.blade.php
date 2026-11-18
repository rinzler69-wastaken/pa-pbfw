@extends('layouts.admin')

@section('title', 'NUSA Admin Console — Ringkasan Eksekutif')
@section('page-title', 'Ringkasan Inisiatif & Dampak Kolektif')

@section('breadcrumb')
<li class="breadcrumb-item active">Dashboard</li>
@endsection

@section('content')
<!-- Metric Cards Row -->
<div class="row">
    <div class="col-md-6 col-lg-3">
        <div class="card report-card border-0 shadow-sm">
            <div class="card-body">
                <div class="row d-flex justify-content-between">
                    <div class="col">
                        <p class="text-muted mb-0 fw-semibold small text-uppercase font-11">Total Dana Kolektif</p>
                        <h3 class="my-2 font-22 fw-bold" style="color: var(--nusa-vermilion); font-family: var(--font-heading);">
                            Rp 4.250.800.000
                        </h3>
                        <p class="mb-0 text-truncate text-muted font-12"><span class="text-success"><i class="mdi mdi-trending-up"></i> +18.2%</span> bulan ini</p>
                    </div>
                    <div class="col-auto align-self-center">
                        <div class="rounded-circle p-2" style="background-color: var(--nusa-vermilion-subtle); color: var(--nusa-vermilion);">
                            <i class="ti ti-cash font-24"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-3">
        <div class="card report-card border-0 shadow-sm">
            <div class="card-body">
                <div class="row d-flex justify-content-between">
                    <div class="col">
                        <p class="text-muted mb-0 fw-semibold small text-uppercase font-11">Inisiatif Aktif (6 Pilar)</p>
                        <h3 class="my-2 text-dark font-22 fw-bold" style="font-family: var(--font-heading);">
                            142 Program
                        </h3>
                        <p class="mb-0 text-truncate text-muted font-12"><span class="text-info">34 Provinsi</span> se-Indonesia</p>
                    </div>
                    <div class="col-auto align-self-center">
                        <div class="rounded-circle p-2" style="background-color: var(--nusa-muted-green-light); color: var(--nusa-muted-green);">
                            <i class="ti ti-world font-24"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-3">
        <div class="card report-card border-0 shadow-sm">
            <div class="card-body">
                <div class="row d-flex justify-content-between">
                    <div class="col">
                        <p class="text-muted mb-0 fw-semibold small text-uppercase font-11">Kontributor Aktif</p>
                        <h3 class="my-2 text-dark font-22 fw-bold" style="font-family: var(--font-heading);">
                            32.140 Jiwa
                        </h3>
                        <p class="mb-0 text-truncate text-muted font-12"><span class="text-success">+412 donatur</span> 24 jam terakhir</p>
                    </div>
                    <div class="col-auto align-self-center">
                        <div class="rounded-circle p-2 bg-light text-warning">
                            <i class="ti ti-users font-24"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-3">
        <div class="card report-card border-0 shadow-sm">
            <div class="card-body">
                <div class="row d-flex justify-content-between">
                    <div class="col">
                        <p class="text-muted mb-0 fw-semibold small text-uppercase font-11">Verifikasi Tertunda</p>
                        <h3 class="my-2 font-22 fw-bold text-danger" style="font-family: var(--font-heading);">
                            6 Transaksi
                        </h3>
                        <p class="mb-0 text-truncate text-muted font-12">Konfirmasi mutasi rekening</p>
                    </div>
                    <div class="col-auto align-self-center">
                        <div class="rounded-circle p-2 bg-light text-danger">
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
        <div class="card border-0 shadow-sm">
            <div class="card-header d-flex justify-content-between align-items-center bg-white border-bottom py-3">
                <h5 class="card-title mb-0" style="font-family: var(--font-heading); color: var(--nusa-charcoal);">
                    Transaksi Dukungan Masuk Terbaru
                </h5>
                <a href="{{ route('admin.donations.index') }}" class="btn btn-sm btn-outline-secondary">Lihat Semua Transaksi</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Invoice</th>
                                <th>Kontributor</th>
                                <th>Pilar Inisiatif</th>
                                <th>Nominal</th>
                                <th>Metode</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>#NUSA-982</code></td>
                                <td><strong>Indra Kusuma</strong></td>
                                <td><span class="badge" style="background-color: var(--nusa-vermilion-subtle); color: var(--nusa-vermilion);">Disaster Relief</span></td>
                                <td class="fw-bold" style="color: var(--nusa-vermilion);">Rp 500.000</td>
                                <td><span class="badge bg-light text-dark border">BCA</span></td>
                                <td><span class="badge bg-success">Terkonfirmasi</span></td>
                            </tr>
                            <tr>
                                <td><code>#NUSA-981</code></td>
                                <td><strong>Hamba Allah</strong></td>
                                <td><span class="badge" style="background-color: var(--nusa-muted-green-light); color: var(--nusa-muted-green);">Environmental</span></td>
                                <td class="fw-bold" style="color: var(--nusa-vermilion);">Rp 250.000</td>
                                <td><span class="badge bg-light text-dark border">QRIS</span></td>
                                <td><span class="badge bg-success">Terkonfirmasi</span></td>
                            </tr>
                            <tr>
                                <td><code>#NUSA-980</code></td>
                                <td><strong>Siti Rahma</strong></td>
                                <td><span class="badge bg-light text-primary border">Education</span></td>
                                <td class="fw-bold" style="color: var(--nusa-vermilion);">Rp 100.000</td>
                                <td><span class="badge bg-light text-dark border">Mandiri</span></td>
                                <td><span class="badge bg-success">Terkonfirmasi</span></td>
                            </tr>
                            <tr>
                                <td><code>#NUSA-979</code></td>
                                <td><strong>Rian Hendrawan</strong></td>
                                <td><span class="badge bg-light text-warning border">Economic</span></td>
                                <td class="fw-bold" style="color: var(--nusa-vermilion);">Rp 1.000.000</td>
                                <td><span class="badge bg-light text-dark border">Transfer BRI</span></td>
                                <td><span class="badge bg-warning text-dark">Menunggu Verifikasi</span></td>
                            </tr>
                            <tr>
                                <td><code>#NUSA-978</code></td>
                                <td><strong>Dewi Lestari</strong></td>
                                <td><span class="badge bg-light text-purple border" style="color: #7E22CE;">Social Welfare</span></td>
                                <td class="fw-bold" style="color: var(--nusa-vermilion);">Rp 300.000</td>
                                <td><span class="badge bg-light text-dark border">QRIS</span></td>
                                <td><span class="badge bg-success">Terkonfirmasi</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions & Status -->
    <div class="col-lg-4">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white border-bottom py-3">
                <h5 class="card-title mb-0" style="font-family: var(--font-heading); color: var(--nusa-charcoal);">
                    Aksi Cepat Tim NUSA
                </h5>
            </div>
            <div class="card-body">
                <div class="d-grid gap-2">
                    <a href="{{ route('admin.campaigns.create') }}" class="btn btn-nusa-vermilion py-2 text-start">
                        <i class="ti ti-plus me-2"></i> Tambah Inisiatif Baru (6 Pilar)
                    </a>
                    <a href="{{ route('admin.donations.index') }}" class="btn btn-outline-secondary py-2 text-start">
                        <i class="ti ti-checklist me-2"></i> Verifikasi Transfer Tertunda (6)
                    </a>
                    <a href="{{ route('home') }}" target="_blank" class="btn btn-outline-info py-2 text-start">
                        <i class="ti ti-external-link me-2"></i> Preview Portal Publik NUSA
                    </a>
                </div>

                <div class="p-3 rounded-3 mt-4" style="background-color: var(--nusa-muted-green-light); border-left: 4px solid var(--nusa-muted-green);">
                    <h6 class="fw-bold font-13 mb-1" style="color: var(--nusa-charcoal); font-family: var(--font-heading);">
                        <i class="ti ti-flag text-success me-1"></i> Tagline Platform
                    </h6>
                    <p class="font-12 mb-0" style="color: var(--nusa-charcoal);">
                        <strong>"Together, We Make a Difference."</strong> — Menggerakkan partisipasi publik untuk Indonesia yang resilien, berdaya, dan berkelanjutan.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

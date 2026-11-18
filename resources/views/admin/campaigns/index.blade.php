@extends('layouts.admin')

@section('title', 'Manajemen Inisiatif — NUSA Admin')
@section('page-title', 'Kelola Inisiatif Penggalangan Dana')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">NUSA Console</a></li>
<li class="breadcrumb-item active">Inisiatif</li>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white border-bottom py-3 d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0" style="font-family: var(--font-heading); color: var(--nusa-charcoal);">
                    Daftar Semua Inisiatif Terdaftar (6 Pilar)
                </h5>
                <a href="{{ route('admin.campaigns.create') }}" class="btn btn-sm" style="background-color: var(--nusa-vermilion); color: white;">
                    <i class="ti ti-plus me-1"></i> Inisiasi Program Baru
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Inisiatif</th>
                                <th>Pilar Utama</th>
                                <th>Target Kebutuhan</th>
                                <th>Dukungan Masuk</th>
                                <th>Capaian</th>
                                <th>Status</th>
                                <th class="text-end">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    <strong>Bantuan Logistik & Medis Darurat Korban Erupsi</strong>
                                    <br><small class="text-muted"><i class="ti ti-map-pin me-1"></i> Flores Timur, NTT</small>
                                </td>
                                <td><span class="badge" style="background-color: var(--nusa-vermilion-subtle); color: var(--nusa-vermilion);">Disaster Relief</span></td>
                                <td>Rp 200.000.000</td>
                                <td class="fw-bold" style="color: var(--nusa-vermilion);">Rp 156.400.000</td>
                                <td style="width: 140px;">
                                    <div class="progress" style="height: 6px;">
                                        <div class="progress-bar" style="width: 78%; background-color: var(--nusa-vermilion);"></div>
                                    </div>
                                    <small class="text-muted font-11">78%</small>
                                </td>
                                <td><span class="badge bg-success">Aktif</span></td>
                                <td class="text-end">
                                    <a href="{{ route('campaigns.show', 1) }}" target="_blank" class="btn btn-sm btn-outline-info" title="Lihat"><i class="ti ti-eye"></i></a>
                                    <a href="#" class="btn btn-sm btn-outline-warning" title="Edit"><i class="ti ti-pencil"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    <strong>Renovasi Fasilitas Belajar SD Pedalaman</strong>
                                    <br><small class="text-muted"><i class="ti ti-map-pin me-1"></i> Solor Selatan, NTT</small>
                                </td>
                                <td><span class="badge bg-light text-primary border">Education</span></td>
                                <td>Rp 50.000.000</td>
                                <td class="fw-bold" style="color: var(--nusa-vermilion);">Rp 21.000.000</td>
                                <td style="width: 140px;">
                                    <div class="progress" style="height: 6px;">
                                        <div class="progress-bar" style="width: 42%; background-color: var(--nusa-vermilion);"></div>
                                    </div>
                                    <small class="text-muted font-11">42%</small>
                                </td>
                                <td><span class="badge bg-success">Aktif</span></td>
                                <td class="text-end">
                                    <a href="{{ route('campaigns.show', 2) }}" target="_blank" class="btn btn-sm btn-outline-info" title="Lihat"><i class="ti ti-eye"></i></a>
                                    <a href="#" class="btn btn-sm btn-outline-warning" title="Edit"><i class="ti ti-pencil"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>
                                    <strong>Penanaman 10.000 Mangrove Penahan Abrasi</strong>
                                    <br><small class="text-muted"><i class="ti ti-map-pin me-1"></i> Demak, Jawa Tengah</small>
                                </td>
                                <td><span class="badge" style="background-color: var(--nusa-muted-green-light); color: var(--nusa-muted-green);">Environmental</span></td>
                                <td>Rp 60.000.000</td>
                                <td class="fw-bold" style="color: var(--nusa-vermilion);">Rp 39.000.000</td>
                                <td style="width: 140px;">
                                    <div class="progress" style="height: 6px;">
                                        <div class="progress-bar" style="width: 65%; background-color: var(--nusa-muted-green);"></div>
                                    </div>
                                    <small class="text-muted font-11">65%</small>
                                </td>
                                <td><span class="badge bg-success">Aktif</span></td>
                                <td class="text-end">
                                    <a href="{{ route('campaigns.show', 4) }}" target="_blank" class="btn btn-sm btn-outline-info" title="Lihat"><i class="ti ti-eye"></i></a>
                                    <a href="#" class="btn btn-sm btn-outline-warning" title="Edit"><i class="ti ti-pencil"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

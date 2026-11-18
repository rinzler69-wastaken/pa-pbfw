@extends('layouts.admin')

@section('title', 'Manajemen Program Donasi - Admin')
@section('page-title', 'Kelola Program Penggalangan Dana')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
<li class="breadcrumb-item active">Program Donasi</li>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title mb-0">Daftar Semua Kampanye</h4>
                <a href="{{ route('admin.campaigns.create') }}" class="btn btn-primary btn-sm">
                    <i class="ti ti-plus me-1"></i> Buat Program Baru
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-striped align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Program Donasi</th>
                                <th>Kategori</th>
                                <th>Target Dana</th>
                                <th>Terkumpul</th>
                                <th>Capaian</th>
                                <th>Status</th>
                                <th class="text-end">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    <strong>Bantu Dek Alif Berjuang Melawan Kelainan Jantung</strong>
                                    <br><small class="text-muted"><i class="ti ti-calendar me-1"></i> Batas: 24 Nov 2026</small>
                                </td>
                                <td><span class="badge bg-danger">Medis</span></td>
                                <td>Rp 60.000.000</td>
                                <td class="text-success fw-bold">Rp 45.000.000</td>
                                <td style="width: 140px;">
                                    <div class="progress" style="height: 6px;">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 75%"></div>
                                    </div>
                                    <small class="text-muted">75%</small>
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
                                    <strong>Renovasi Gedung Belajar SD Pelosok Negeri</strong>
                                    <br><small class="text-muted"><i class="ti ti-calendar me-1"></i> Batas: 02 Des 2026</small>
                                </td>
                                <td><span class="badge bg-warning text-dark">Pendidikan</span></td>
                                <td>Rp 50.000.000</td>
                                <td class="text-success fw-bold">Rp 21.000.000</td>
                                <td style="width: 140px;">
                                    <div class="progress" style="height: 6px;">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 42%"></div>
                                    </div>
                                    <small class="text-muted">42%</small>
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
                                    <strong>Paket Pangan & Sembako untuk 500 Lansia Dhuafa</strong>
                                    <br><small class="text-muted"><i class="ti ti-calendar me-1"></i> Batas: 21 Nov 2026</small>
                                </td>
                                <td><span class="badge bg-info text-dark">Kemanusiaan</span></td>
                                <td>Rp 35.000.000</td>
                                <td class="text-success fw-bold">Rp 31.150.000</td>
                                <td style="width: 140px;">
                                    <div class="progress" style="height: 6px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 89%"></div>
                                    </div>
                                    <small class="text-muted">89%</small>
                                </td>
                                <td><span class="badge bg-success">Aktif</span></td>
                                <td class="text-end">
                                    <a href="{{ route('campaigns.show', 3) }}" target="_blank" class="btn btn-sm btn-outline-info" title="Lihat"><i class="ti ti-eye"></i></a>
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

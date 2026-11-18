@extends('layouts.admin')

@section('title', 'Riwayat Transaksi Donasi - Admin')
@section('page-title', 'Kelola Transaksi & Riwayat Donasi')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
<li class="breadcrumb-item active">Riwayat Donasi</li>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title mb-0">Daftar Transaksi Masuk</h4>
                <div class="d-flex gap-2">
                    <button class="btn btn-outline-secondary btn-sm"><i class="ti ti-filter me-1"></i> Filter</button>
                    <button class="btn btn-outline-success btn-sm"><i class="ti ti-file-export me-1"></i> Export Excel</button>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-striped align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Invoice</th>
                                <th>Waktu</th>
                                <th>Donatur</th>
                                <th>Program Tujuan</th>
                                <th>Nominal</th>
                                <th>Metode</th>
                                <th>Status</th>
                                <th class="text-end">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>#DON-8921</code></td>
                                <td>18 Nov 2026, 16:30</td>
                                <td><strong>Hamba Allah</strong><br><small class="text-muted">ahmad@***.com</small></td>
                                <td>Bantu Dek Alif Operasi Jantung</td>
                                <td class="text-primary fw-bold">Rp 200.000</td>
                                <td><span class="badge bg-light text-dark border">QRIS</span></td>
                                <td><span class="badge bg-success">Berhasil</span></td>
                                <td class="text-end">
                                    <button class="btn btn-sm btn-outline-info" title="Detail"><i class="ti ti-receipt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td><code>#DON-8920</code></td>
                                <td>18 Nov 2026, 15:10</td>
                                <td><strong>Budi Santoso</strong><br><small class="text-muted">budi@gmail.com</small></td>
                                <td>Bantu Dek Alif Operasi Jantung</td>
                                <td class="text-primary fw-bold">Rp 500.000</td>
                                <td><span class="badge bg-light text-dark border">BCA</span></td>
                                <td><span class="badge bg-success">Berhasil</span></td>
                                <td class="text-end">
                                    <button class="btn btn-sm btn-outline-info" title="Detail"><i class="ti ti-receipt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td><code>#DON-8919</code></td>
                                <td>18 Nov 2026, 14:05</td>
                                <td><strong>Siti Rahma</strong><br><small class="text-muted">siti@yahoo.com</small></td>
                                <td>Paket Pangan 500 Lansia Dhuafa</td>
                                <td class="text-primary fw-bold">Rp 50.000</td>
                                <td><span class="badge bg-light text-dark border">Mandiri</span></td>
                                <td><span class="badge bg-success">Berhasil</span></td>
                                <td class="text-end">
                                    <button class="btn btn-sm btn-outline-info" title="Detail"><i class="ti ti-receipt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td><code>#DON-8918</code></td>
                                <td>18 Nov 2026, 11:45</td>
                                <td><strong>Rian Hendrawan</strong><br><small class="text-muted">rian@mail.com</small></td>
                                <td>Renovasi Gedung Belajar SD Pelosok</td>
                                <td class="text-primary fw-bold">Rp 1.000.000</td>
                                <td><span class="badge bg-light text-dark border">Transfer BRI</span></td>
                                <td><span class="badge bg-warning text-dark">Pending</span></td>
                                <td class="text-end">
                                    <button class="btn btn-sm btn-success" title="Verifikasi Terima"><i class="ti ti-check"></i></button>
                                    <button class="btn btn-sm btn-outline-danger" title="Tolak"><i class="ti ti-x"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td><code>#DON-8917</code></td>
                                <td>18 Nov 2026, 09:20</td>
                                <td><strong>Dewi Lestari</strong><br><small class="text-muted">dewi@live.com</small></td>
                                <td>Air Bersih Warga Gunung Kidul</td>
                                <td class="text-primary fw-bold">Rp 150.000</td>
                                <td><span class="badge bg-light text-dark border">QRIS</span></td>
                                <td><span class="badge bg-success">Berhasil</span></td>
                                <td class="text-end">
                                    <button class="btn btn-sm btn-outline-info" title="Detail"><i class="ti ti-receipt"></i></button>
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

@extends('layouts.admin')

@section('title', 'Buat Program Donasi Baru - Admin')
@section('page-title', 'Tambah Program Penggalangan Dana')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
<li class="breadcrumb-item"><a href="{{ route('admin.campaigns.index') }}">Program Donasi</a></li>
<li class="breadcrumb-item active">Tambah</li>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-9 mx-auto">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Formulir Kampanye Penggalangan Dana</h4>
            </div>
            <div class="card-body">
                <form action="#" method="POST" onsubmit="event.preventDefault(); alert('Simulasi: Program donasi baru berhasil disimpan!');">
                    @csrf
                    
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Judul Program Kampanye <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="title" placeholder="Contoh: Bantu Operasi Tumor Balita di Kupang" required>
                    </div>

                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Kategori Donasi <span class="text-danger">*</span></label>
                            <select class="form-select" name="category" required>
                                <option value="">-- Pilih Kategori --</option>
                                <option value="medis">Medis & Kesehatan</option>
                                <option value="pendidikan">Pendidikan & Sekolah</option>
                                <option value="bencana">Bencana Alam</option>
                                <option value="kemanusiaan">Kemanusiaan & Dhuafa</option>
                                <option value="sarana">Sarana & Tempat Ibadah</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Target Dana (Rp) <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" name="target_amount" placeholder="Contoh: 50000000" min="100000" required>
                        </div>
                    </div>

                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Batas Waktu Penggalangan <span class="text-danger">*</span></label>
                            <input type="date" class="form-control" name="deadline" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Foto Utama / Banner Program</label>
                            <input type="file" class="form-control" name="image" accept="image/*">
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-semibold">Deskripsi & Cerita Lengkap <span class="text-danger">*</span></label>
                        <textarea class="form-control" name="story" rows="6" placeholder="Ceritakan latar belakang pasien/penerima bantuan, rincian biaya yang dibutuhkan, serta kontak yang dapat dihubungi..." required></textarea>
                    </div>

                    <div class="d-flex justify-content-end gap-2">
                        <a href="{{ route('admin.campaigns.index') }}" class="btn btn-secondary">Batal</a>
                        <button type="submit" class="btn btn-primary"><i class="ti ti-device-floppy me-1"></i> Simpan Program</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

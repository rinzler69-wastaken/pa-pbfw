@extends('layouts.admin')

@section('title', 'Inisiasi Program Baru — NUSA Admin')
@section('page-title', 'Tambah Inisiatif Penggalangan Dana')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">NUSA Console</a></li>
<li class="breadcrumb-item"><a href="{{ route('admin.campaigns.index') }}">Inisiatif</a></li>
<li class="breadcrumb-item active">Baru</li>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-9 mx-auto">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white border-bottom py-3">
                <h5 class="card-title mb-0" style="font-family: var(--font-heading); color: var(--nusa-charcoal);">
                    Formulir Inisiatif Kolektif NUSA
                </h5>
            </div>
            <div class="card-body">
                <form action="#" method="POST" onsubmit="event.preventDefault(); alert('Inisiatif baru NUSA berhasil disimpan!');">
                    @csrf
                    
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Judul Inisiatif / Program <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="title" placeholder="Contoh: Konservasi Hutan Mangrove & Sabuk Hijau Pesisir" required>
                    </div>

                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Pilar Utama NUSA <span class="text-danger">*</span></label>
                            <select class="form-select" name="category" required>
                                <option value="">-- Pilih 1 dari 6 Pilar --</option>
                                <option value="environmental">1. Environmental Protection</option>
                                <option value="disaster">2. Disaster Relief and Recovery</option>
                                <option value="health">3. Health and Wellbeing</option>
                                <option value="economic">4. Economic Empowerment</option>
                                <option value="education">5. Education</option>
                                <option value="social">6. Social Welfare</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Target Dukungan Dana (Rp) <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" name="target_amount" placeholder="Contoh: 100000000" min="100000" required>
                        </div>
                    </div>

                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Target Wilayah / Provinsi <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="location" placeholder="Contoh: Flores Timur, Nusa Tenggara Timur" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Batas Waktu Kampanye <span class="text-danger">*</span></label>
                            <input type="date" class="form-control" name="deadline" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Dokumentasi Foto / Banner Program</label>
                        <input type="file" class="form-control" name="image" accept="image/*">
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-semibold">Deskripsi, Dampak yang Diharapkan, & Rencana Penyaluran <span class="text-danger">*</span></label>
                        <textarea class="form-control" name="story" rows="6" placeholder="Jelaskan tantangan yang dihadapi, target penerima manfaat, dan bagaimana inisiatif ini akan menghasilkan dampak terukur..." required></textarea>
                    </div>

                    <div class="d-flex justify-content-end gap-2">
                        <a href="{{ route('admin.campaigns.index') }}" class="btn btn-secondary">Batal</a>
                        <button type="submit" class="btn btn-primary" style="background-color: var(--nusa-vermilion); border-color: var(--nusa-vermilion);">
                            <i class="ti ti-device-floppy me-1"></i> Terbitkan Inisiatif
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

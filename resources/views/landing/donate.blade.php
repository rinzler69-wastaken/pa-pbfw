@extends('layouts.landing')

@section('title', 'Salurkan Dukungan Kolektif — NUSA')

@section('content')
<div class="py-5" style="background-color: var(--nusa-warm-white);">
  <div class="container py-3">
    <div class="row justify-content-center">
      <div class="col-lg-7 col-md-9">
        <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5" style="background-color: var(--nusa-pure-white);">
          <div class="text-center mb-4">
            <span class="badge badge-pillar badge-disaster mb-2">Aksi Gotong Royong</span>
            <h3 class="fw-bold" style="font-family: var(--font-heading); color: var(--nusa-charcoal);">
              Bersama NUSA, Buat Perubahan Nyata
            </h3>
            <p class="text-muted small">Pilih inisiatif prioritas dan tentukan kontribusi terbaik Anda.</p>
          </div>

          <form action="#" method="POST" onsubmit="event.preventDefault(); alert('Simulasi Donasi NUSA Berhasil! Bersama kita membuat perubahan nyata.');">
            @csrf

            <!-- Program Selection -->
            <div class="mb-4">
              <label class="form-label fw-bold" style="font-family: var(--font-heading);">Pilih Inisiatif / Program</label>
              <select class="form-select form-select-lg" name="campaign_id" required>
                <option value="1" selected>[Disaster Relief] Bantuan Logistik & Medis Darurat Korban Bencana Erupsi</option>
                <option value="2">[Education] Renovasi Fasilitas Belajar SD Pedalaman Flores Timur</option>
                <option value="3">[Social Welfare] Paket Nutrisi & Pangan Bergizi 500 Lansia Dhuafa</option>
                <option value="4">[Environmental] Penanaman 10.000 Mangrove Penahan Abrasi Pesisir Pantura</option>
                <option value="5">[Economic] Permodalan Usaha Perahu & Alat Tangkap Nelayan Tradisional</option>
                <option value="6">[Health] Layanan Kesehatan Gratis & Intervensi Gizi Anak Pesisir</option>
              </select>
            </div>

            <!-- Donation Amount Buttons -->
            <div class="mb-4">
              <label class="form-label fw-bold" style="font-family: var(--font-heading);">Pilih Nominal Donasi (Rp)</label>
              <div class="row g-2 mb-2">
                <div class="col-4">
                  <button type="button" class="btn btn-nusa-outline w-100 py-2" onclick="setNominal(50000)">Rp 50.000</button>
                </div>
                <div class="col-4">
                  <button type="button" class="btn btn-nusa-outline w-100 py-2" onclick="setNominal(100000)">Rp 100.000</button>
                </div>
                <div class="col-4">
                  <button type="button" class="btn btn-nusa-outline w-100 py-2" onclick="setNominal(250000)">Rp 250.000</button>
                </div>
                <div class="col-4">
                  <button type="button" class="btn btn-nusa-outline w-100 py-2" onclick="setNominal(500000)">Rp 500.000</button>
                </div>
                <div class="col-4">
                  <button type="button" class="btn btn-nusa-outline w-100 py-2" onclick="setNominal(1000000)">Rp 1.000.000</button>
                </div>
                <div class="col-4">
                  <button type="button" class="btn btn-nusa-outline w-100 py-2" onclick="setNominal(2500000)">Rp 2.500.000</button>
                </div>
              </div>
              <input type="number" id="nominalInput" name="amount" class="form-control form-control-lg mt-2" placeholder="Ketik nominal lainnya (min. 10.000)" value="100000" min="10000" required>
            </div>

            <!-- Donor Information -->
            <h5 class="fw-bold border-bottom pb-2 mb-3 mt-4" style="font-family: var(--font-heading);">Informasi Donatur</h5>
            <div class="mb-3">
              <label class="form-label fw-semibold">Nama Lengkap</label>
              <input type="text" name="donor_name" class="form-control form-control-lg" placeholder="Masukkan nama Anda" value="Budi Dharmawan" required>
            </div>

            <div class="row g-3 mb-3">
              <div class="col-md-6">
                <label class="form-label fw-semibold">Alamat Email</label>
                <input type="email" name="donor_email" class="form-control" placeholder="nama@email.com" value="budi@example.com" required>
              </div>
              <div class="col-md-6">
                <label class="form-label fw-semibold">Nomor WhatsApp</label>
                <input type="tel" name="donor_phone" class="form-control" placeholder="08123456789" value="081234567890" required>
              </div>
            </div>

            <div class="form-check mb-3">
              <input class="form-check-input" type="checkbox" id="anonCheck">
              <label class="form-check-label text-muted small" for="anonCheck">
                Sembunyikan nama saya pada riwayat publik (sebagai <strong>Kawan NUSA</strong>)
              </label>
            </div>

            <div class="mb-4">
              <label class="form-label fw-semibold">Doa & Pesan Solidaritas</label>
              <textarea name="notes" class="form-control" rows="3" placeholder="Tuliskan kata-kata penyemangat untuk saudara-saudara kita penerima manfaat..."></textarea>
            </div>

            <!-- Payment Method -->
            <h5 class="fw-bold border-bottom pb-2 mb-3" style="font-family: var(--font-heading);">Metode Pembayaran Aman</h5>
            <div class="row g-2 mb-4">
              <div class="col-6">
                <div class="border rounded-3 p-3 d-flex align-items-center gap-2">
                  <input type="radio" name="payment_method" id="payQris" value="qris" checked>
                  <label for="payQris" class="mb-0 fw-semibold cursor-pointer">QRIS Instan (Gopay/OVO/Shopee)</label>
                </div>
              </div>
              <div class="col-6">
                <div class="border rounded-3 p-3 d-flex align-items-center gap-2">
                  <input type="radio" name="payment_method" id="payBca" value="bca">
                  <label for="payBca" class="mb-0 fw-semibold cursor-pointer">Bank BCA</label>
                </div>
              </div>
              <div class="col-6">
                <div class="border rounded-3 p-3 d-flex align-items-center gap-2">
                  <input type="radio" name="payment_method" id="payMandiri" value="mandiri">
                  <label for="payMandiri" class="mb-0 fw-semibold cursor-pointer">Bank Mandiri</label>
                </div>
              </div>
              <div class="col-6">
                <div class="border rounded-3 p-3 d-flex align-items-center gap-2">
                  <input type="radio" name="payment_method" id="payBri" value="bri">
                  <label for="payBri" class="mb-0 fw-semibold cursor-pointer">Bank BRI</label>
                </div>
              </div>
            </div>

            <button type="submit" class="btn btn-nusa-vermilion btn-lg w-100 fw-bold py-3 rounded-pill">
              Lanjut Pembayaran Donasi <i class="fas fa-arrow-right ms-2"></i>
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('scripts')
<script>
function setNominal(amount) {
  document.getElementById('nominalInput').value = amount;
}
</script>
@endpush

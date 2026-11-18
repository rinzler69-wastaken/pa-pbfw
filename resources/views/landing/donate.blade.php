@extends('layouts.landing')

@section('title', 'Formulir Donasi Online')

@section('content')
<div class="py-5 bg-light">
  <div class="container py-3">
    <div class="row justify-content-center">
      <div class="col-lg-7 col-md-9">
        <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5 bg-white">
          <div class="text-center mb-4">
            <span class="badge bg-primary px-3 py-2 text-uppercase mb-2">Salurkan Donasi</span>
            <h3 class="fw-bold">Wujudkan Kebaikan Hari Ini</h3>
            <p class="text-muted small">Pilih program donasi dan masukkan nominal bantuan terbaik Anda.</p>
          </div>

          <form action="#" method="POST" onsubmit="event.preventDefault(); alert('Simulasi Donasi Berhasil Dibuat! (Frontend Prototype)');">
            @csrf

            <!-- Program Selection -->
            <div class="mb-4">
              <label class="form-label fw-bold">Pilih Program Penggalangan Dana</label>
              <select class="form-select form-select-lg" name="campaign_id" required>
                <option value="1" selected>Bantu Dek Alif Berjuang Melawan Kelainan Jantung Bawaan</option>
                <option value="2">Renovasi Gedung Belajar SD Pelosok Negeri yang Nyaris Roboh</option>
                <option value="3">Paket Pangan & Sembako untuk 500 Lansia Dhuafa Sebatang Kara</option>
                <option value="4">Air Bersih untuk Warga Desa Kekeringan di Gunung Kidul</option>
                <option value="5">Beasiswa Pendidikan Santri Yatim Penghafal Al-Quran</option>
              </select>
            </div>

            <!-- Donation Amount Buttons -->
            <div class="mb-4">
              <label class="form-label fw-bold">Pilih Nominal Donasi (Rp)</label>
              <div class="row g-2 mb-2">
                <div class="col-4">
                  <button type="button" class="btn btn-outline-primary w-100 py-2 nominal-btn" onclick="setNominal(25000)">Rp 25.000</button>
                </div>
                <div class="col-4">
                  <button type="button" class="btn btn-outline-primary w-100 py-2 nominal-btn" onclick="setNominal(50000)">Rp 50.000</button>
                </div>
                <div class="col-4">
                  <button type="button" class="btn btn-outline-primary w-100 py-2 nominal-btn" onclick="setNominal(100000)">Rp 100.000</button>
                </div>
                <div class="col-4">
                  <button type="button" class="btn btn-outline-primary w-100 py-2 nominal-btn" onclick="setNominal(250000)">Rp 250.000</button>
                </div>
                <div class="col-4">
                  <button type="button" class="btn btn-outline-primary w-100 py-2 nominal-btn" onclick="setNominal(500000)">Rp 500.000</button>
                </div>
                <div class="col-4">
                  <button type="button" class="btn btn-outline-primary w-100 py-2 nominal-btn" onclick="setNominal(1000000)">Rp 1.000.000</button>
                </div>
              </div>
              <input type="number" id="nominalInput" name="amount" class="form-control form-control-lg mt-2" placeholder="Atau ketik nominal lainnya (min. 10.000)" value="50000" min="10000" required>
            </div>

            <!-- Donor Information -->
            <h5 class="fw-bold border-bottom pb-2 mb-3 mt-4">Informasi Donatur</h5>
            <div class="mb-3">
              <label class="form-label fw-semibold">Nama Lengkap</label>
              <input type="text" name="donor_name" class="form-control form-control-lg" placeholder="Masukkan nama Anda" value="Ahmad Fauzi" required>
            </div>

            <div class="row g-3 mb-3">
              <div class="col-md-6">
                <label class="form-label fw-semibold">Alamat Email</label>
                <input type="email" name="donor_email" class="form-control" placeholder="nama@email.com" value="ahmad@example.com" required>
              </div>
              <div class="col-md-6">
                <label class="form-label fw-semibold">Nomor WhatsApp</label>
                <input type="tel" name="donor_phone" class="form-control" placeholder="08123456789" value="081234567890" required>
              </div>
            </div>

            <div class="form-check mb-3">
              <input class="form-check-input" type="checkbox" id="anonCheck">
              <label class="form-check-label text-muted small" for="anonCheck">
                Sembunyikan nama saya pada halaman publik (sebagai <strong>Hamba Allah</strong>)
              </label>
            </div>

            <div class="mb-4">
              <label class="form-label fw-semibold">Doa atau Pesan Dukungan (Opsional)</label>
              <textarea name="notes" class="form-control" rows="3" placeholder="Tuliskan doa atau kata-kata semangat untuk penerima donasi..."></textarea>
            </div>

            <!-- Payment Method -->
            <h5 class="fw-bold border-bottom pb-2 mb-3">Metode Pembayaran</h5>
            <div class="row g-2 mb-4">
              <div class="col-6">
                <div class="border rounded-3 p-3 d-flex align-items-center gap-2">
                  <input type="radio" name="payment_method" id="payQris" value="qris" checked>
                  <label for="payQris" class="mb-0 fw-semibold cursor-pointer">QRIS (Gopay/OVO/ShopeePay)</label>
                </div>
              </div>
              <div class="col-6">
                <div class="border rounded-3 p-3 d-flex align-items-center gap-2">
                  <input type="radio" name="payment_method" id="payBca" value="bca">
                  <label for="payBca" class="mb-0 fw-semibold cursor-pointer">Transfer Bank BCA</label>
                </div>
              </div>
              <div class="col-6">
                <div class="border rounded-3 p-3 d-flex align-items-center gap-2">
                  <input type="radio" name="payment_method" id="payMandiri" value="mandiri">
                  <label for="payMandiri" class="mb-0 fw-semibold cursor-pointer">Transfer Mandiri</label>
                </div>
              </div>
              <div class="col-6">
                <div class="border rounded-3 p-3 d-flex align-items-center gap-2">
                  <input type="radio" name="payment_method" id="payBri" value="bri">
                  <label for="payBri" class="mb-0 fw-semibold cursor-pointer">Transfer Bank BRI</label>
                </div>
              </div>
            </div>

            <button type="submit" class="btn btn-warning btn-lg w-100 fw-bold py-3 text-dark shadow">
              Lanjut Pembayaran Donasi <i class="fas fa-lock ms-2"></i>
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

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href="css/metro-bootstrap.css" rel="stylesheet">
  <link href="css/metro-bootstrap-responsive.css" rel="stylesheet">
  <link href="css/iconFont.css" rel="stylesheet">
  <link href="css/docs.css" rel="stylesheet">
  <link href="scroll-persen.css" rel="stylesheet">

  <!-- Load JavaScript Libraries -->
  <script src="js/jquery/jquery.min.js"></script>
  <script src="js/jquery/jquery.widget.min.js"></script>
  <script src="js/jquery/jquery.mousewheel.js"></script>


  <!-- Metro UI CSS JavaScript plugins -->
  <script src="js/load-metro.js"></script>
  <script src="js/docs.js"></script>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <title>Form Pemesanan</title>
</head>
<style>
  table {
    width: 95%;
    border-collapse: collapse;
    margin: 30px 0;
    font-size: 12px;
    text-align: center;
  }

  body {
    background-color: grey;
  }
</style>

<body class="metro">
  <header class="bg-dark" data-load="header.php"></header>
  <div class="container mt-5">
    <h2 class="text-center mb-4">Form Pemesanan Paket Wisata</h2>
    <form id="pemesananForm" action="proses_pemesanan.php" method="post">
      <!-- Form fields -->
      <div class="row">
        <div class="col-md-6">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
          </div>
        </div>
        <div class="col-md-6">
          <div class="mb-3">
            <label for="nomor_hp" class="form-label">Nomor HP/Telpon</label>
            <input type="tel" class="form-control" id="nomor_hp" name="nomor_hp" required>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="mb-3">
            <label for="tanggal_pesan" class="form-label">Tanggal Pesan</label>
            <input type="date" class="form-control" id="tanggal_pesan" name="tanggal_pesan" required>
          </div>
        </div>
        <div class="col-md-6">
          <div class="mb-3">
            <label for="waktu_pelaksanaan" class="form-label">Waktu Pelaksanaan</label>
            <input type="time" class="form-control" id="waktu_pelaksanaan" name="waktu_pelaksanaan" required>
          </div>
        </div>
      </div>

      <div class="mb-3">
        <label for="jumlah_peserta" class="form-label">Jumlah Peserta</label>
        <input type="number" class="form-control" id="jumlah_peserta" name="jumlah_peserta" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Pilihan Lain</label>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="penginapan" name="pilihan[]" value="Penginapan">
          <label class="form-check-label" for="penginapan">
            Penginapan (Rp 1.000.000)
            <input type="hidden" id="harga_penginapan" value="1000000">
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="transportasi" name="pilihan[]" value="Transportasi">
          <label class="form-check-label" for="transportasi">
            Transportasi (Rp 1.200.000)
            <input type="hidden" id="harga_transportasi" value="1200000">
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="servis_makan" name="pilihan[]" value="Servis/Makan">
          <label class="form-check-label" for="servis_makan">
            Servis/Makan (Rp 500.000)
            <input type="hidden" id="harga_servis_makan" value="500000">
          </label>
        </div>
      </div>

      <div class="mb-3">
        <label for="harga_paket" class="form-label">Harga Paket Perjalanan</label>
        <input type="number" class="form-control" id="harga_paket" name="harga_paket" required>
      </div>

      <div class="mb-3">
        <label for="jumlah_tagihan" class="form-label">Jumlah Tagihan</label>
        <input type="number" class="form-control" id="jumlah_tagihan" name="jumlah_tagihan" required>
      </div>

      <div class="mb-3 text-center">
        <button type="button" id="hitungButton" class="btn btn-primary">Hitung</button>
        <button type="submit" class="btn btn-success">Kirim Pemesanan</button>
        <button type="submit" class="btn btn-success">reset</button>
      </div>
    </form>
    <div id="totalHarga" class="mt-4">
      <h4>Total Harga: <span id="totalAmount">0</span></h4>
    </div>
  </div>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- JavaScript untuk menghitung total harga -->
  <script>
    document.getElementById('hitungButton').addEventListener('click', function() {
      let hargaPenginapan = document.getElementById('penginapan').checked ? parseFloat(document.getElementById('harga_penginapan').value) : 0;
      let hargaTransportasi = document.getElementById('transportasi').checked ? parseFloat(document.getElementById('harga_transportasi').value) : 0;
      let hargaServisMakan = document.getElementById('servis_makan').checked ? parseFloat(document.getElementById('harga_servis_makan').value) : 0;

      let hargaPaket = hargaPenginapan + hargaTransportasi + hargaServisMakan;
      document.getElementById('harga_paket').value = hargaPaket;

      let waktuPelaksanaan = parseFloat(document.getElementById('waktu_pelaksanaan').value);
      let jumlahPeserta = parseFloat(document.getElementById('jumlah_peserta').value);
      let jumlahTagihan = waktuPelaksanaan * jumlahPeserta * hargaPaket;

      document.getElementById('jumlah_tagihan').value = jumlahTagihan;

      // Update total harga di bagian bawah
      document.getElementById('totalAmount').textContent = jumlahTagihan.toLocaleString('id-ID', {
        style: 'currency',
        currency: 'IDR'
      });
    });
  </script>
</body>

</html>
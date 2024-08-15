<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wisata";

$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ambil ID pesanan dari URL
$id = $_GET['id'];

// Ambil data pesanan berdasarkan ID
$sql = "SELECT * FROM pemesanan WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "Pesanan tidak ditemukan";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pesanan</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h2>Edit Pesanan</h2>
        <form action="update_pesanan.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $row['nama']; ?>">
            </div>
            <div class="mb-3">
                <label for="nomor_hp" class="form-label">Nomor HP</label>
                <input type="text" class="form-control" id="nomor_hp" name="nomor_hp" value="<?php echo $row['nomor_hp']; ?>">
            </div>
            <div class="mb-3">
                <label for="tanggal_pesan" class="form-label">Tanggal Pesan</label>
                <input type="date" class="form-control" id="tanggal_pesan" name="tanggal_pesan" value="<?php echo $row['tanggal_pesan']; ?>">
            </div>
            <div class="mb-3">
                <label for="waktu_pelaksanaan" class="form-label">Waktu Pelaksanaan</label>
                <input type="time" class="form-control" id="waktu_pelaksanaan" name="waktu_pelaksanaan" value="<?php echo $row['waktu_pelaksanaan']; ?>">
            </div>
            <div class="mb-3">
                <label for="jumlah_peserta" class="form-label">Jumlah Peserta</label>
                <input type="number" class="form-control" id="jumlah_peserta" name="jumlah_peserta" value="<?php echo $row['jumlah_peserta']; ?>">
            </div>
            <div class="mb-3">
                <label for="harga_paket" class="form-label">Harga Paket</label>
                <input type="number" class="form-control" id="harga_paket" name="harga_paket" value="<?php echo $row['harga_paket']; ?>">
            </div>
            <div class="mb-3">
                <label for="jumlah_tagihan" class="form-label">Jumlah Tagihan</label>
                <input type="number" class="form-control" id="jumlah_tagihan" name="jumlah_tagihan" value="<?php echo $row['jumlah_tagihan']; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Pilihan Lain</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="penginapan" name="penginapan" <?php echo $row['penginapan'] ? 'checked' : ''; ?>>
                    <label class="form-check-label" for="penginapan">Penginapan</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="transportasi" name="transportasi" <?php echo $row['transportasi'] ? 'checked' : ''; ?>>
                    <label class="form-check-label" for="transportasi">Transportasi</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="servis_makan" name="servis_makan" <?php echo $row['servis_makan'] ? 'checked' : ''; ?>>
                    <label class="form-check-label" for="servis_makan">Servis/Makan</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Update Pesanan</button>
        </form>
    </div>
</body>

</html>
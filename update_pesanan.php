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

// Ambil data dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$nomor_hp = $_POST['nomor_hp'];
$tanggal_pesan = $_POST['tanggal_pesan'];
$waktu_pelaksanaan = $_POST['waktu_pelaksanaan'];
$jumlah_peserta = $_POST['jumlah_peserta'];
$harga_paket = $_POST['harga_paket'];
$jumlah_tagihan = $_POST['jumlah_tagihan'];
$penginapan = isset($_POST['penginapan']) ? 1 : 0;
$transportasi = isset($_POST['transportasi']) ? 1 : 0;
$servis_makan = isset($_POST['servis_makan']) ? 1 : 0;

// Query untuk update data
$sql = "UPDATE pemesanan SET nama='$nama', nomor_hp='$nomor_hp', tanggal_pesan='$tanggal_pesan', waktu_pelaksanaan='$waktu_pelaksanaan', jumlah_peserta=$jumlah_peserta, harga_paket=$harga_paket, jumlah_tagihan=$jumlah_tagihan, penginapan=$penginapan, transportasi=$transportasi, servis_makan=$servis_makan WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    // Jika berhasil, alihkan ke halaman beranda
    header("Location: tampildata.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

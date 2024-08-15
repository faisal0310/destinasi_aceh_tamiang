<?php
include 'koneksi.php'; // Sertakan file koneksi

if (isset($_GET['id'])) { // Periksa apakah ID ada di URL
    $id = $_GET['id']; // Ambil ID dari URL

    // Query untuk menghapus data dari tabel pemesanan
    $sql = "DELETE FROM pemesanan WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        // Jika berhasil, redirect kembali ke halaman tampil_data.php
        header("Location: tampildata.php");
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    echo "ID tidak ditemukan.";
}

$conn->close();

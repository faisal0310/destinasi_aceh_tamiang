<?php
// proses_pemesanan.php

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
$nama = $_POST['nama'];
$nomor_hp = $_POST['nomor_hp'];
$tanggal_pesan = $_POST['tanggal_pesan'];
$waktu_pelaksanaan = $_POST['waktu_pelaksanaan'];
$jumlah_peserta = $_POST['jumlah_peserta'];
$harga_paket = $_POST['harga_paket'];
$jumlah_tagihan = $_POST['jumlah_tagihan'];

// Pilihan tambahan
$pilihan = isset($_POST['pilihan']) ? implode(', ', $_POST['pilihan']) : '';

// Query untuk memasukkan data
$sql = "INSERT INTO pemesanan (nama, nomor_hp, tanggal_pesan, waktu_pelaksanaan, jumlah_peserta, harga_paket, jumlah_tagihan, pilihan)
VALUES ('$nama', '$nomor_hp', '$tanggal_pesan', '$waktu_pelaksanaan', $jumlah_peserta, $harga_paket, $jumlah_tagihan, '$pilihan')";

if ($conn->query($sql) === TRUE) {
    echo "Pemesanan berhasil!";
    //jika berhasil diahlihkan ke beranda
    header("location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

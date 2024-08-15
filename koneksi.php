<?php
$servername = "localhost"; // Nama server MySQL
$username = "root";        // Username MySQL
$password = "";            // Password MySQL
$dbname = "wisata";     // Nama database

// Membuat koneksi
$conn = new mysqli("localhost", "root", "", "wisata");

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

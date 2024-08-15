    <?php
    // Sertakan file koneksi
    include 'koneksi.php';

    // Query untuk mengambil data dari tabel pemesanan
    $sql = "SELECT id, nama, nomor_hp, tanggal_pesan, waktu_pelaksanaan, jumlah_peserta, harga_paket, jumlah_tagihan, penginapan, transportasi, servis_makan FROM pemesanan";
    $result = $conn->query($sql);

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="css/metro-bootstrap.css" rel="stylesheet">
    <link href="css/metro-bootstrap-responsive.css" rel="stylesheet">
    <link href="css/iconFont.css" rel="stylesheet">
    <link href="css/docs.css" rel="stylesheet">

    <!-- Load JavaScript Libraries -->
    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/jquery/jquery.widget.min.js"></script>
    <script src="js/jquery/jquery.mousewheel.js"></script>

    <!-- Metro UI CSS JavaScript plugins -->
    <script src="js/load-metro.js"></script>
    <script src="js/docs.js"></script>


    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Data Pemesanan</title>
        <style>
            table {
                width: 95%;
                border-collapse: collapse;
                margin: 30px 0;
                font-size: 12px;
                text-align: center;
            }

            body {
                background-color: aliceblue;
            }

            th,
            td {
                padding: 12px;
                border-bottom: 2px solid #ddd;
            }

            th {
                background-color: blanchedalmond;
            }

            tr:nth-child(even) {
                background-color: dimgray;
            }
        </style>
    </head>

    <body class="metro">
        <header class="bg-warning" data-load="header.php"></header>

        <h1>Data Pemesanan</h1>

        <?php
        if ($result->num_rows > 0) {
            echo "<table>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Nomor HP</th>
                    <th>Tanggal Pesan</th>
                    <th>Waktu Pelaksanaan</th>
                    <th>Jumlah Peserta</th>
                    <th>Harga Paket</th>
                    <th>Jumlah Tagihan</th>
                    <th>Penginapan</th>
                    <th>Transportasi</th>
                    <th>Servis/Makan</th>
                    <th>Aksi</th>
                    
                </tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["nama"] . "</td>
                    <td>" . $row["nomor_hp"] . "</td>
                    <td>" . $row["tanggal_pesan"] . "</td>
                    <td>" . $row["waktu_pelaksanaan"] . "</td>
                    <td>" . $row["jumlah_peserta"] . "</td>
                    <td>" . $row["harga_paket"] . "</td>
                    <td>" . $row["jumlah_tagihan"] . "</td>
                    <td>" . ($row["penginapan"] ? 'Ya' : 'Tidak') . "</td>
                    <td>" . ($row["transportasi"] ? 'Ya' : 'Tidak') . "</td>
                    <td>" . ($row["servis_makan"] ? 'Ya' : 'Tidak') . "</td>
                    <td class='action-buttons'>
                        <a class='edit' href='edit_pesanan.php?id=" . $row["id"] . "'>Edit</a>
                        <a class='delete' href='hapus_pesanan.php?id=" . $row["id"] . "' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'>Hapus</a>
                    </td>
                    </tr>";
            }
            echo "</table>";
        } else {
            echo "Tidak ada data yang ditemukan.";
        }

        $conn->close();
        ?>

    </body>

    </html>
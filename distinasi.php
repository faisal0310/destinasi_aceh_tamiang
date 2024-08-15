<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinasi Wisata Aceh Tamiang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

</head>

<body style="background-color: rgba(0, 121, 111, 0.164)">

    <div class="container mt-5">
        <!-- Tombol Kembali -->

        <a href="index.php" class="btn btn-secondary mb-6">
            <i class="bi bi-arrow-left-circle"></i> Kembali
        </a>
        <h1 class="text-center">Destinasi Wisata Aceh Tamiang</h1>
        <div class="row">
            <?php
            // Contoh data statis, bisa diganti dengan data dari database
            $destinasi = [
                [
                    "nama" => "Bukit Awan",
                    "deskripsi" => "Pemandangan perbukitan yang luas dengan keindahan awan yang seperti lautan.",
                    "gambar" => "img/AWAN.jpg"
                ],
                [
                    "nama" => "Kuala Paret",
                    "deskripsi" => "Destinasi kuala paret.",
                    "gambar" => "img/PARET.jpg"
                ],
                [
                    "nama" => "SANGKA PANE",
                    "deskripsi" => "Sangka pane merupakan destinasi wisata aceh tamiang.",
                    "gambar" => "img/PANE.jpg"
                ]


            ];

            // Looping untuk menampilkan destinasi
            foreach ($destinasi as $d) {
                echo '
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img class="card-img-top" src="' . $d["gambar"] . '" alt="' . $d["nama"] . '">
                        <div class="card-body">
                            <h5 class="card-title">' . $d["nama"] . '</h5>
                            <p class="card-text">' . $d["deskripsi"] . '</p>
                        </div>
                    </div>
                </div>';
            }
            ?>
        </div>
    </div>
</body>
<footer class="text-center text-lg-start">
    <div class="container p-4">
        <nav class="navbar navbar-expand-lg navbar-light"></nav>
    </div>
    <!--footer-->
    <div class="mt-4 p-4 bg-dark text-white text-center">
        <p>FAISAL AMRI - WISATA ACEH TAMIANG</p>
    </div>
</footer>

</html>
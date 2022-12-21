<?php 
require 'function.php';

if(isset($_POST["btn-peminjaman"])){
    $nama = $_POST["nama"];    
    $nim = $_POST["nim"];    
    $ruangan = $_POST["ruangan"];
    $tanggal = $_POST["tanggal"];

    $peminjam = $nama . ' - ' . $nim;

    mysqli_query($db, "INSERT INTO perlengkapan_proyektor VALUES('', '$nama', '$nim', '$ruangan', '$tanggal') ");
    
    mysqli_query($db, "UPDATE status SET status = 'NOT READY' WHERE ruangan = '$ruangan' ");

    mysqli_query($db, "INSERT INTO admin VALUES('', '$peminjam', '$ruangan', '$tanggal') ");

    echo "
        <script>
            alert('Peminjaman Berhasil Dilakukan!')
            window.location = 'peminjaman.php';
        </script>
    ";
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB MAHASISWA FT UNTIRTA</title>
    <link rel="stylesheet" href="../library/bootstrap/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../library/style.css">
</head>
<body>
<div class="container-peminjaman pb-5">

    <nav class="navbar navbar-expand-lg opacity fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse navbar-slide" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link text-light" aria-current="page" href="../">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-light" aria-current="page" href="ft.php">FT</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-warning" aria-current="page" href="#">Proyektor</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-light" href="about.php">About</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <center>
    <div class="mt-5 pt-5">
        <div class="card col-4">
            <div class="card-body text-center">
                <h3 class="h3">RUANGAN</h3>
                <h2 class="h2 text-warning"><?= $_GET["ruangan"] ?></h2>
                <hr>
            <form action="" method="POST">
                <label for="ruangan"></label>
                <input name="ruangan" type="hidden" id="ruangan" value="<?= $_GET["ruangan"]; ?>">

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input name="nama" type="text" class="form-control" id="nama" aria-describedby="namahelp" required>
                    <div id="namahelp" class="form-text">Silahkan Masukan Nama Anda</div>
                </div>
                <div class="mb-3">
                    <label for="nim" class="form-label">Nim</label>
                    <input name="nim" type="text" class="form-control" id="nim" aria-describedby="nimhelp" required>
                    <div id="nimhelp" class="form-text">Silahkan Masukan Nim Anda</div>
                </div>
                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input name="tanggal" type="date" class="form-control" id="tanggal" aria-describedby="tanggalhelp" required>
                    <div id="tanggalhelp" class="form-text">Silahkan Pilih Tanggal Peminjaman</div>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                    <label class="form-check-label" for="exampleCheck1">Menyetujui Syarat dan Ketentuan Peminjaman Perlengkapan Proyektor</label>
                </div>
                <button type="submit" class="btn btn-warning" name="btn-peminjaman">Pinjam</button>
            </form>
            </div>
        </div>
    </div>

    <a href="peminjaman.php" class="btn btn-danger mt-5">Kembali</a>
    </center>
    
    



</div>
<script src="../library/bootstrap/js/bootstrap.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
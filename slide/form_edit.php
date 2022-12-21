<?php 
require 'function.php';
$ruangan = $_GET["ruangan"];

$result = mysqli_query($db, "SELECT * FROM perlengkapan_proyektor WHERE ruangan = '$ruangan' ");
$result = mysqli_fetch_assoc($result);

if(isset($_POST["btn-peminjaman"])){
    $nama = $_POST["nama"];    
    $nim = $_POST["nim"];    
    $tanggal = $_POST["tanggal"];

    $peminjam = $nama . ' - ' . $nim;

    mysqli_query($db, "UPDATE perlengkapan_proyektor SET nama = '$nama', nim = '$nim', ruangan = '$ruangan', tanggal = '$tanggal' ");

    mysqli_query($db, "UPDATE admin SET peminjam = '$peminjam', ruangan = '$ruangan', tanggal = '$tanggal' ");

    echo "
        <script>
            alert('Data Berhasil Berhasil DiUbah!')
            window.location = 'admin.php';
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
                <h2 class="h2 text-warning"><?= $ruangan; ?></h2>
                <hr>
            <form action="" method="POST">
                <label for="ruangan"></label>
                <input name="ruangan" type="hidden" id="ruangan" value="<?= $ruangan; ?>">

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input name="nama" type="text" class="form-control" id="nama" aria-describedby="namahelp" value="<?= $result["nama"]; ?>" required>
                    <div id="namahelp" class="form-text">Silahkan Masukan Nama Anda</div>
                </div>
                <div class="mb-3">
                    <label for="nim" class="form-label">Nim</label>
                    <input name="nim" type="text" class="form-control" id="nim" aria-describedby="nimhelp" value="<?= $result["nim"]; ?>" required>
                    <div id="nimhelp" class="form-text">Silahkan Masukan Nim Anda</div>
                </div>
                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input name="tanggal" type="date" class="form-control" id="tanggal" aria-describedby="tanggalhelp" value="<?= $result["tanggal"]; ?>" required>
                    <div id="tanggalhelp" class="form-text">Silahkan Pilih Tanggal Peminjaman</div>
                </div>
                <button type="submit" class="btn btn-warning" name="btn-peminjaman">Update</button>
            </form>
            </div>
        </div>
    </div>

    <a href="edit.php" class="btn btn-danger mt-5">Kembali</a>
    </center>
    
    



</div>
<script src="../library/bootstrap/js/bootstrap.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
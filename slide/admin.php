<?php 
require 'function.php';
$result = query("SELECT * FROM perlengkapan_proyektor");
$i = 1;
if(isset($_POST["btn-cek"])){
    $tanggal_reset = $_POST["tanggal_reset"];  
    $result = query("SELECT * FROM perlengkapan_proyektor WHERE tanggal = '$tanggal_reset' ");
};

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
            <div class="collapse navbar-collapse navbar-admin" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link text-light" aria-current="page" href="../">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-light" aria-current="page" href="ft.php">FT</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-light" aria-current="page" href="peminjaman.php">Proyektor</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-light" href="about.php">About</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-warning" href="#">Admin</a>
            </li>
        </ul>
    </div>
</div>
</nav>

<div class="text-admin pt-5 ms-4">
    <div class="mt-4">
        <span class="h1">HALAMAN</span>
        <span class="h1 text-warning">ADMIN</span>
    </div>
</div>
<center>
    <div class="pt-5">
        <div class="card col-8">
            <div class="card-body text-center">
            <table class="table table-hover table-dark">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Peminjam</th>
                    <th scope="col">Ruangan</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($result as $r): ?>
                    <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td><?= $r["nama"] . ' - ' . $r["nim"]; ?></td>
                    <td><?= $r["ruangan"]; ?></td>
                    <td><?= $r["tanggal"]; ?></td>
                    <td>
                        <a href="form_edit.php?ruangan=<?= $r["ruangan"]; ?>" class="btn btn-info text-light">Edit</a>
                        <a href="redirect.php?hal=hapus&ruangan=<?= $r["ruangan"]; ?>" class="btn btn-danger">Delete</a>
                    </td>
                    </tr>
                    <?php
                        $i = $i + 1;
                        endforeach;
                    ?>
                </tbody>
            </table>
            <form action="" method="POST" class="pt-4">
                <div class="mb-3 col-md-2">
                    <label for="tanggal_reset" class="form-label">Cek Tanggal</label>
                    <input type="date" class="form-control" id="tanggal_reset" name="tanggal_reset">
                    <button type="submit" class="btn btn-primary mt-2" name="btn-cek">Lihat</button>
                </div>
            </form>         
            </div>
        </div>
    </div>

    <a href="peminjaman.php" class="btn btn-warning mt-5">Home</a>
    </center>
    
    


</div>
<script src="../library/bootstrap/js/bootstrap.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
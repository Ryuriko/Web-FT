<?php 
session_start();
require 'function.php';
if(!isset($_SESSION['username'])){
    echo "
        <script>
            window.location = 'login.php';
        </script>
    ";
}
$result = query("SELECT * FROM status");
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
<div class="container-peminjaman pt-5">

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
    
    <div class="text-peminjaman pt-4">
        <span class="h1 text-dark mt-4 ms-3">PERLENGKAPAN</span>
        <span class="h1 text-dark">PROYEKTOR </span>
        <span class="h1 text-warning">FT. UNTIRTA</span>
    </div>

    <div class="row row-peminjaman ps-5 pb-5">
        <?php
            foreach($result as $r):
            if($r["status"] == "READY"):
        ?>
        <div class="card col-4 mt-5 ms-4 bg-info" style="width: 18rem;">
            <div class="card-body text-center">
                <img src="https://ceklist.id/wp-content/uploads/2022/06/Merk-Proyektor-Terbaik.jpg" class="card-img-top" height="50%">
                <h4 class="card-text mt-5 mb-5">Ruangan <?= $r["ruangan"]; ?></h4>
                <div class="text-center">
                <a href="form_peminjaman.php?ruangan=<?= $r["ruangan"]; ?>" class="btn btn-warning">Pinjam</a>
                </div>
            </div>
        </div>
        <?php
            endif;
            endforeach;
        ?>
    </div>

    <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_contact">
            <h4>
              Contact Us
            </h4>
            <div class="contact_link_box">
              <a href="https://goo.gl/maps/WgT859L3NfpNt4US7">
              <i class='fa fa-location-arrow'></i>
                <span>
                  Location
                </span>
                <a href="mailto:ft@untirta.ac.id">
                  <i class='fa fa-envelope'></i>
                  <span>
                    Gmail
                  </span>
                </a>
              </a>
              <a href="http://wa.me/62254376712">
                <i class='fa fa-phone'></i>
                <span>
                  Call 
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <div class="footer_detail">
            <a href="https://untirta.ac.id/" class="footer-logo">
              Untirta
            </a>
            <p>
                Web peminjaman perlengkapan proyektor ini dibuat untuk mempermudah para mahasiswa yang ingin meminjam proyektor!
            </p>
            <div class="footer_social">
              <a href="https://web.facebook.com/ftuntirtaofficial1/?_rdc=1&_rdr">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="https://twitter.com/HumasUntirta?t=DqGNT_-ycjD-u5uEgqEepQ&s=09">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="https://www.linkedin.com/school/universitassultanagengtirtayasa/">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="https://www.instagram.com/untirta_official/">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <h4>
            Info peminjaman!
          </h4>
          <p>
           Pengambilan proyektor dibuka pukul <b>06.30 AM</b> dan pengembalian paling lambat pukul <b>08.00 PM</b>
          </p>
        </div>
      </div>
      <div class="footer-info">
        <p>
          &copy; <span id="displayYear"></span> 
          <a href="https://untirta.ac.id/"><b>Universitas Sultan Ageng Tirtayasa</b></a><br><br>
          &copy; <span id="displayYear"></span> Made by
          <a href="https://www.instagram.com/ryuriko_/" target="_blank"><b>Ahmad Khoirul Umam (3337210006)</b> — <a href="https://www.instagram.com/firmans43_/" target="_blank"><b>Firmansyah Sutan Wahyu (3337210030)</b> — <a href="https://www.instagram.com/anjeellun/" target="_blank"><b>Anjeli Gusnawan (3337210040)</b> — </a>
          <a href="https://www.instagram.com/accounts/login/" target="_blank"><b>M Fariz Abqory (3337210058)</b></a>
        </p>
      </div>
    </div>
  </footer>



</div>
<script src="../library/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
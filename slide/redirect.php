<?php 
require 'function.php';

$hal = $_GET["hal"];
$ruangan = $_GET["ruangan"];

if($hal == "hapus"){
    mysqli_query($db, "DELETE FROM perlengkapan_proyektor WHERE ruangan = '$ruangan' ");

    mysqli_query($db, "UPDATE status SET status = 'READY' WHERE ruangan = '$ruangan' ");

    echo "
        <script>
            alert('Data Berhasil Dihapus');
            window.location = 'admin.php';
        </script>
    ";
};
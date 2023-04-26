<?php
    include("konfigurasi.php");

    $cnn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME,DBPORT) or die("koneksi gagal");
    /*
    if($cnn){
        echo "koneksi sukses";
    }else{
        echo "konseksi gagal";
    mysqli_close($cnn);
    */
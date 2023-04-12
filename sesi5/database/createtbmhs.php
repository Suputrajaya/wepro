<?php
    include("koneksi.php");

    $tbel = "CREATE TABLE tbMHS(
        id INT AUTO_INCREMENT PRIMARY KEY,
        nama VARCHAR(35),
        nim VARCHAR(25),
        prodi VARCHAR(255),
        jenis kelamin VARCHAR(1),
        tglahir DATE,
        idmhs VARCHAR(255)
    );";

    $hsl = mysqli_query($cnn , $tbel);
    if($hsl){
        echo "tabel tbMHS ==> sukses";
    }
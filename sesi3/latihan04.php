<?php

    function TentangAplikasi(){
        echo "<h3> Aplikasi Apa Saja</h3>";
        echo "<sup>versi 1.0</sup>";
    }

    function cetaklabel01($tx){
        echo "isi label : ".$tx;
    }

    function cetaklabel02($tx="isikan label"){
        echo "isi label : ".$tx;
    }

    function jumlahkan($angka1=1, $angka2=3){
        return $angka1+$angka2;
    }
<?php
    $cars = array("volvo","BMW","Toyota","suzuki"); 

    $jmldata = count($cars);
    echo "jumlah data : ". $jmldata . "<br>";
    for($i=0;$i<$jmldata;$i++){
         echo "<br>kendaraan ". $cars[$i];
    }

    echo "<hr>";

    echo "<ol class='mobil'>";
    foreach($cars as $data){
        echo "<li> kendaraan ". $data . "</li>";
    }
    echo "</ol>";
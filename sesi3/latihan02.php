<?php
$age = array("budi"=>"26", "alit"=>"21", "mayun"=>"20");

echo "umur dari budi ".$age["budi"]. " tahun<br> ";

echo "<hr>";

foreach($age as $nama => $umur){
    echo "umur dari ". $nama . " : " . $umur. "<br>";
} 

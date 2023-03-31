<?php

$mhs = array(
    array("nama"=>"boboiboy", "id"=>"1234", "kota"=>"durian runtuh"),
    array("nama"=>"naruto", "id"=>"234", "kota"=>"konoha"),
    array("nama"=>"sepongbob", "id"=>"34", "kota"=>"bikinibotom"),
    array("nama"=>"goku", "id"=>"4", "kota"=>"panjer"),
);

// echo $mhs[0]["nama"];

// echo "<hr>";

// foreach($mhs as $data){

//     foreach ($data as $lb => $nval){
//         echo $lb. " : ". $nval . "<br>";
//     }
//     echo "<br>";
// }
// // print_r($mhs);

header("content-type: application/json");
echo json_encode ($mhs);
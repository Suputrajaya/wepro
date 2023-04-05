<?php
    $filez = "";
    $path = "upGAMBAR/";
    if(isset($_POST["upfile"])){
       $filez = $path . basename ($_FILES["upGAMBAR"]["name"]);
       move_uploaded_file($_FILES["upGAMBAR"]["tmp_name"], $filez);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=cgf, initial-scale=1.0">
    <title>form upload file</title>
</head>
<body>
    <form method="POST" action="latihan04.php" enctype="multipart/form-data">
        <div>
            Upload gambar
            <input type="file" name="upGAMBAR">
        </div>
        <div>
            <button type="submit">upload file</button>
        </div>
        <input type="hidden" name="upfile" value="ok">
    </form>
    <div><?="<img src='$filez' width='200'>";?>

    </div>
</body>
</html>
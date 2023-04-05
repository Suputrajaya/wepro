<?php
    $user = " ";
    $pass = " ";
    $euser = "";
    $epass = "";
    if(isset($_POST["txUSER"])){
        $user = $_POST["txUSER"];
        $pass = $_POST["txPASKY"];

        if ($user==""){
            $euser = "<div style='color:red;font-size: 10px:'> field user masih kosong </div>";
        }
        
        if ($pass==""){
            $epass = "<div style='color:red;font-size: 10px:'> field password masih kosong </div>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form method POST</title>
</head>
<body>
    
<form method="POST" action="latihan02.php">

    <div>
        User name
        <input type="text" name="txUSER">
        <?=$euser;?>
    </div>
    <div>
        Password
        <input type="password" name="txPASKY">
        <?=$epass;?>
    </div>
    <div>
        <button>Login</button>
    </div>
</form>
    <div>
        Isi dari Form : <br>
            1. User Name: <?=$user?><br>
            2. Password: <?=$pass?><br> 
    </div>
</body> 
</html>
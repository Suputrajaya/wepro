<?php
    $user = " ";
    $pass = " ";
    if(isset($_REQUEST["txUSER"])){
        $user = $_REQUEST["txUSER"];
        $pass = $_REQUEST["txPASKY"];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form dengan reques handle</title>
</head>
<body>
    
<form method="POST" action="latihan03.php">

    <div>
        User name
        <input type="text" name="txUSER">
    </div>
    <div>
        Password
        <input type="password" name="txPASKY">
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan3</title>
</head>
<body>
    <form>
        <div>
            nama lengkap
            <input type="text" id="txNAMA" placeholder="nama lengkap" name=txNAMA value="nama lengkap">
        </div>

        <div>
            <button type="button" onclick="checknama()">checknama</button>
        </div>
    </from>

    <script>
        function checknama(){
            let nm = document.getElementById("txNAMA").value;
            alert("isi dari field txNAMA: "+nm);
        }
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan4</title>
</head>
<body>
    <form>
        <div>
            masukan alas
            <input type="number" id="txALAS" placeholder="masukan alas" name="txALAS" value="masukan alas">
        </div>
        <div>
            masukan tinggi
            <input type="number" id="txTINGGI" placeholder="masukan tinggi" name="txTINGGI" value="masukan tinggi">
        </div>
        <button type="button" onclick="checkhasil()">check hasil</button>
    </form>
    <script>
         function checkhasil(){
            let alas = document.getElementById("txALAS").value;
            let tinggi = document.getElementById("txTINGGI").value;

            let luas = 0.5*alas*tinggi;
                
            alert("hasil luas "+luas);
        }
    </script>
</body>
</html>
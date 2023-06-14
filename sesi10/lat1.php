<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>latihan1</title>
</head>
<body>
    <form class="container" name="lat1.php" method="POST" onsubmit="return checkform(this)">
    <div>
        NAMA<br>
        <input class="form-control" type="text" name="txNAMA" id="NAMA">
    </div>
    <div>
        NIM<br>
        <input class="form-control" type="text" name="txNIM" id="NIM">
    </div>
    <div>
        JENIS KELAMIN<br>
        <input type="radio" name="txJK" id="JK" value="Laki laki">Laki laki<br>
        <input type="radio" name="txJK" id="JK" value="Perempuan">Perempuan
        <input class="form-control" type="file" id="formFile">
    </div><br>
    <div>
        JURUSAN<br>
        <select name="txJURUSAN" id="JURUSAN">
        <option value="tata boga">tata boga</option>
        <option value="tata busana">tata busana</option>
        <option value="tata mesin">tata mesin</option>
        <option value="tata elektro">tata elektro</option>
        <option value="tata multimedia ">tata multimedia</option>
        </select>
    </div><br>
    <div>
        HOBI<br>
        <input type="checkbox" name="txMANCING" value="Mancing">Mancing
        <input type="checkbox" name="txTAWURAN" value="Tawuran">Tawuran
        <input type="checkbox" name="txSMACKDOWN" value="Smackdown">Smackdown
        <input type="checkbox" name="txBADMINTON" value="Badminton">Badminton
        <input type="checkbox" name="txSEPAKBOLA" value="Sepak bola">Sepak bola
    </div><br>
    <div>
        <button type="submit">Kirim Data</button>
    </div>
</form>

<script>
    function checkform(frm){
        let F = frm.elements;
        let nama = F.namedItem("txNAMA").value;
        let nim = F.namedItem("txNIM").value;
        let jk = F.namedItem("txJK").value;
        let jurusan = F.namedItem("txJURUSAN").value;
        let hobi_1 =[ 
            F.namedItem("txMANCING").checked,
            F.namedItem("txTAWURAN").checked,
            F.namedItem("txSMACKDOWN").checked,
            F.namedItem("txBADMINTON").checked,
            F.namedItem("txSEPAKBOLA").checked,   
    ]

        console.log("NAMA : "+nama)
        console.log("NIM : "+nim)
        console.log("Jenis Kelamin : "+jk)
        console.log("Jurusan : "+jurusan)
        console.log("Hobi : "+hobi_1)
        return false;
    }
</script>
</body>
</html>
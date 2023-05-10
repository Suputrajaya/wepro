<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 1</title>
</head>
<body>
    <div id="pesan">Pesan Singkat</div>
    <script src="latihan1.js"></script>
    <script>
        function myFunction() {
            document.write("<span style='color: red'> menulis dengan JavaScript</span>");}
        document.getElementById("pesan").innerHTML ="mengganti tulisan pesan singkat";
        document.getElementById("pesan").style.color ="blue";
    </script>
<button type="button" onclick="myFunction()">Try it</button>
</body>
</html>
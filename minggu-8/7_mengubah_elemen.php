<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p id="demo">Ubah saya..</p>
    <button onclick="Ganti()">Ganti</button><br>
    <div><div id="ganti_warna"><p>Ubah warna</p></div></div>
    <div>
        <button onclick="merah()">Merah</button>
        <button onclick="biru()">Biru</button>
    </div>
    <script>
        function Ganti(){
            document.getElementById("demo").innerHTML = "Saya sudah berubah..";
        }
        var id_a = document.getElementById("ganti_warna");
        function merah(){
            id_a.style.color = "red";
            document.getElementById("ganti_warna").innerHTML = "Warna sudah berubah merah";
        }function biru(){
            id_a.style.color = "blue";
            document.getElementById("ganti_warna").innerHTML = "Warna sudah berubah biru";
        }
    </script>
</body>
</html>
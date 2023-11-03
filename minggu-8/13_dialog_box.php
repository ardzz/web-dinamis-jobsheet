<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script lang="Javascript">
        function sapaan(){
            window.alert("Selamat datang di tutorial Javascript");
        }
        function konfirmasi(){
            let konfirmasi = confirm("Anda yakin ingin menhapus data ini?");
            if(konfirmasi){
                alert("Data telah dihapus")
            }else {
                alert("Tidak jadi dihapus")
            }
        }
        function tulisNama(){
            var nama = prompt("Siapa nama kamu?","");
            document.write("<p>Hello" + nama + "</p>");
        }
    </script>
</head>
<body>
    <button onclick="sapaan()">Klik saya</button>
    <button onclick="konfirmasi()">Hapus</button>
    <button onclick="tulisNama()">Menulis nama</button>
</body>
</html>
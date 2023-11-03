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
<?php
    class mahasiswa{
        public function data_mahasiswa(){
            return "Nama mahasiswa : Mariska,
            nim : 12345678, Alamat : Yogyakarta";
        }
    }
    class mhs_informatika extends mahasiswa{
        public function data_mahasiswa(){
            return "Nama mahasiswa : Jerry,
            nim 987654321, Alamat : Malang";
        }
    }

    $mahasiswa_baru = new mhs_informatika();
    echo $mahasiswa_baru->data_mahasiswa();
?>
</body>
</html>
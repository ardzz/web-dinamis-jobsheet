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
    class kuliah{
        protected $jam_perkuliahan = "4 jam pertemuan";
    }
    class praktikum extends kuliah{
        public function tampilkan_pertemuan(){
            return $this->jam_perkuliahan;
        }
    }
    $kuliah_baru = new praktikum();
    echo $kuliah_baru->tampilkan_pertemuan();
?>
</body>
</html>
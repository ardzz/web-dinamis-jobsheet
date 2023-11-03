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
    class laptop{
        public function hidupkan_laptop($pemilik, $merk){
            return "hidupkan laptop $merk punya $pemilik";
        }
    }
    $laptop_andi = new laptop();
    echo $laptop_andi->hidupkan_laptop("Andi", "Lenovo")
?>
</body>
</html>
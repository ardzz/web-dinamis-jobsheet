<!DOCTYPE html>
<html lang="en">
<head>
    <title>Konversi nilai</title>
</head>
<body>
<?php
$suhu = "32.13 derajat celcius";
echo "Tipe : ", gettype($suhu), "<br>";
echo "Nilai : $suhu <br>";

echo "Tipe double : ", doubleval($suhu) , "<br>";
echo "Tipe integer : ", intval($suhu) , "<br>";
echo "Tipe string : ", strval($suhu) , "<br>";
?>
</body>
</html>
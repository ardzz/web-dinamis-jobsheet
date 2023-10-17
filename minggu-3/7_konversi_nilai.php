<!DOCTYPE html>
<html lang="en">
<head>
    <title>Konversi nilai</title>
</head>
<body>
<?php
$suhu = "26.6 derajat celcius";
echo "Tipe : ", gettype($suhu), "<br>";
echo "Nilai : $suhu <br>";

settype($suhu, "double");
echo "Tipe : ", gettype($suhu), "<br>";
echo "Nilai : $suhu <br>";

settype($suhu, "integer");
echo "Tipe : ", gettype($suhu), "<br>";
echo "Nilai : $suhu <br>";

settype($suhu, "string");
echo "Tipe : ", gettype($suhu), "<br>";
echo "Nilai : $suhu <br>";
?>
</body>
</html>
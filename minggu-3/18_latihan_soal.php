<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan Soal</title>
</head>
<body>
<?php
$variabel_x = 100;
$variabel_y = 150;
$variabel_z = 300;

echo "variabel x = {$variabel_x} <br>";
echo "variabel y = {$variabel_y} <br>";
echo "variabel z = {$variabel_z} <br>";

echo "Operasi aritmatika penjumlahan ({$variabel_x} + {$variabel_y} + {$variabel_z}) = " . ($variabel_x + $variabel_y + $variabel_z) . "<br>";
echo "Operasi aritmatika pengurangan ({$variabel_x} - {$variabel_y} - {$variabel_z}) = " . ($variabel_x - $variabel_y - $variabel_z) . "<br>";
echo "Operasi aritmatika perkalian ({$variabel_x} * {$variabel_y} * {$variabel_z}) = " . ($variabel_x * $variabel_y * $variabel_z) . "<br>";
echo "Operasi aritmatika pembagian ({$variabel_x} / {$variabel_y} / {$variabel_z}) = " . ($variabel_x / $variabel_y / $variabel_z) . "<br>";

?>
</body>
</html>
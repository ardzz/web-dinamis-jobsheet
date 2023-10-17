<!DOCTYPE html>
<html lang="en">
<head>
    <title>Konversi nilai</title>
</head>
<body>
<?php
$a = 20;
$b = "20";

var_dump($a == $b); // true karena nilai sama meskipun tipe data berbeda
echo "<br>";
var_dump($a === $b); // false karena nilai sama tetapi tipe data berbeda
echo "<br>";
var_dump($a != $b); // false karena nilai sama meskipun tipe data berbeda
echo "<br>";
var_dump($a !== $b); // true karena nilai sama tetapi tipe data berbeda
echo "<br>";
var_dump($a < $b); // false karena nilai sama
echo "<br>";
var_dump($a > $b); // false karena nilai sama
echo "<br>";
var_dump($a <= $b); // true karena nilai sama
echo "<br>";
var_dump($a >= $b); // true karena nilai sama
var_dump($a <=> $b); // 0 karena nilai sama
?>
</body>
</html>
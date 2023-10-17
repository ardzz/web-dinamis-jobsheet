<!DOCTYPE html>
<html lang="en">
<head>
    <title>Konversi nilai</title>
</head>
<body>
<?php
echo strlen("Selamat natal"); echo "<br>";
echo str_word_count("Selamat natal"); echo "<br>";
echo str_replace("natal", "tahun baru", "Selamat natal"); echo "<br>";
echo substr("Selamat hari raya natal", 8, 4); echo "<br>";
echo strtolower("Selamat hari raya natal"); echo "<br>";
echo strtoupper("Selamat hari raya natal"); echo "<br>";
echo ucfirst("selamat hari raya natal"); echo "<br>";
echo ucwords("selamat hari raya natal"); echo "<br>";
?>
</body>
</html>
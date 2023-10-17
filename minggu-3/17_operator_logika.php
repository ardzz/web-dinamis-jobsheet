<!DOCTYPE html>
<html lang="en">
<head>
    <title>Konversi nilai</title>
</head>
<body>
<?php
$username = "root";
$password = "root123";

if ($username == "root" && $password == "root123") {
    echo "Login berhasil";
} else {
    echo "Login gagal";
}

$cart_total = 100000;
$coupon = "DISKON10";

if ($cart_total == 100000 && $coupon == "DISKON10") {
    echo "<br>";
    echo "Kamu dapat diskon 10%";
} else {
    echo "<br>";
    echo "Kamu tidak dapat diskon 10%";
}

$user_pertama = true;
$user_kedua = true;

if ($user_pertama XOR $user_kedua) {
    echo "<br>";
    echo "Hanya satu yang benar";
} else {
    echo "<br>";
    echo "Keduanya benar atau keduanya salah";
}

$nilai = 70;

if ($nilai != 100){
    echo "<br>";
    echo "Nilai tidak sama dengan 100";
}else{
    echo "<br>";
    echo "Nilai sama dengan 100";
}
?>
</body>
</html>
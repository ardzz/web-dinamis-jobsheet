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
    date_default_timezone_set("Asia/Jakarta");
    $batas_pembayaran = strtotime("14 November 2023 12:16:54 +1 days");
    $waktu_saat_ini = strtotime("now");
    $selisih = $batas_pembayaran - $waktu_saat_ini;

    $hari = floor($selisih/86400);

    $sisa = $selisih % 86400;
    $jam = floor($selisih / 3600);

    $sisa = $sisa %3600;
    $menit = floor($sisa/60);

    $sisa = $sisa %60;
    $detik = floor($sisa/1);

    echo "Sisa waktu untuk melakukan pembayaran : ".$hari." hari ".$jam." jam ".$menit." menit ".$detik." detik lagi";

?>
</body>
</html>
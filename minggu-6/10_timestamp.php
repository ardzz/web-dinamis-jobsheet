<?php

$current_time = time();

$dates = [
    "waktu sekarang" => date("d-m-Y H:i:s", $current_time),
    "waktu sekarang lebih 1 menit" => date("d-m-Y H:i:s", time() + 60),
    "waktu sekarang lebih 1 jam" => date("d-m-Y H:i:s", time() + 3600),
    "waktu sekarang lebih 1 hari" => date("d-m-Y H:i:s", time() + 3600 * 24),
    "waktu sekarang lebih 1 minggu" => date("d-m-Y H:i:s", time() + 3600 * 24 * 7),
    "waktu sekarang lebih 1 bulan" => date("d-m-Y H:i:s", time() + 3600 * 24 * 30),
    "waktu sekarang lebih 1 tahun" => date("d-m-Y H:i:s", time() + 3600 * 24 * 365),
];

foreach ($dates as $key => $value) {
    echo $key . " : " . $value . PHP_EOL;
}

$current_day = time();
$current_day_1 = $current_day / 86400;

$tomorrow = time() + (60 * 60 * 24);
$tomorrow_1 = mktime($tomorrow);

$distance = (int) (($tomorrow - $current_day) / 86400);

echo "Jarak antara hari ini dan besok adalah " . $distance . " hari" . PHP_EOL;

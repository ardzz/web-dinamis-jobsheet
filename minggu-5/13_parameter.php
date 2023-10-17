<?php

function perkenalan($nama, $salam){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama.PHP_EOL;
    echo "Senang berkenalan dengan anda\n";
}

perkenalan("Achmad Solichin", "Hi");
echo PHP_EOL;

$saya = "Indra";
$ucapanSalam = "Selamat Pagi";

perkenalan($saya, $ucapanSalam);
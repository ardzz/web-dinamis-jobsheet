<?php

function tambah_dua(&$nilai) {
    $nilai += 2;
}

function tambah_tiga(&$nilai) {
    $nilai += 3;
}

$nilai = 10;
tambah_dua($nilai);
echo "Nilai = $nilai\n"; // Nilai = 12
tambah_tiga($nilai);
echo "Nilai = $nilai\n"; // Nilai = 12

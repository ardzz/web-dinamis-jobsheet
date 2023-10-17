<?php

function whatIsMyAgeIs(int $birthYear) {
    return (int) date('Y') - $birthYear;
}

function perkenalan(string $nama, int $umur) {
    echo "Halo, nama saya {$nama}, umur saya {$umur} tahun.";
}

perkenalan("Reky", whatIsMyAgeIs(2005));

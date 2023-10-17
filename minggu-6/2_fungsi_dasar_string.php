<?php

$sentence = "Selamat pagi ...";

$str_function = [
    strlen($sentence), // 17
    strtoupper($sentence), // SELAMAT PAGI ...
    strtolower($sentence), // selamat pagi ...
    ucfirst($sentence), // Selamat pagi ...
    ucwords($sentence), // Selamat Pagi ...
    substr($sentence, 2, 4), // Selamat
    substr_count($sentence, 'a'), // 4
    strpos($sentence, 'pagi'), // 9
    strrev($sentence), // ... igap tamaleS
    str_replace('Selamat', 'Malam', $sentence) // Malam pagi ...
];

foreach ($str_function as $str) {
    echo $str . PHP_EOL;
}
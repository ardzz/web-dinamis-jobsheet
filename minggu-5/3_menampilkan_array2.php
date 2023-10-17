<?php

$favorite_coffee = [
    "Kopi Hitam", "Kopi Susu", "Es Kopi", "Es Kopi Susu"
];

for ($i = 0; $i < count($favorite_coffee); $i++) {
    echo "Saya suka minum " . $favorite_coffee[$i];
    echo PHP_EOL;
}
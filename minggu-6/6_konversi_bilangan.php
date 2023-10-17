<?php

$exec = [
    bindec("110011"),
    bindec("1101010"),
    decbin(51),
    decbin(106),
    decoct(77),
    octdec(77),
    dechex(255),
    hexdec("ff"),
    number_format(1000000, 2),
    number_format(1000000, 2, ",", "."),
];

foreach ($exec as $key => $value) {
    echo $value . PHP_EOL;
}
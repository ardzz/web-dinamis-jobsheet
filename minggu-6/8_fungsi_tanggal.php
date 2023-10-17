<?php

date_default_timezone_set("Asia/Jakarta");

var_dump(checkdate(2, 29, 2001));
var_dump(checkdate(2, 29, 2004));

$dates = [
    date("d m y"),
    date("D, d F Y, G:i:s"),
    date("G A"),
];

foreach ($dates as $date) {
    echo $date . PHP_EOL;
}
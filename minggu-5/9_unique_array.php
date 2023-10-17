<?php

$values = [80, 90, 80, 26, 90, 83, 46, 90, 88, 80];
$unique = array_unique($values);

foreach ($unique as $key => $value) {
    echo "Nilai ke-" . ($key + 1) . " = " . $value . PHP_EOL;
}
<?php

$class_A_score = [80, 90, 75, 70, 85];
$class_B_score = [100, 95, 80, 75, 70];

$diff = array_diff($class_A_score, $class_B_score);
print_r($diff);

foreach ($diff as $key => $value) {
    echo "Index ke $key adalah $value" . PHP_EOL;
}
<?php

function factorial($number): float|int
{
    if ($number < 2) {
        return 1;
    } else {
        return ($number * factorial($number-1));
    }
}

echo "Factorial 5 is " . factorial(5) . "\n";
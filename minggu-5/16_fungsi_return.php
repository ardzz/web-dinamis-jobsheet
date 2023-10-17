<?php

function whatIsMyAgeIs($birthYear) {
    $age = date('Y') - $birthYear;
    return $age;
}

echo "Umur saya adalah ".whatIsMyAgeIs(2005)." tahun. \n";
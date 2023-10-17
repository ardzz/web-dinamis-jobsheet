<?php
$password = "admin123";

try {
    $salt = random_int(100000, 999999);
} catch (Exception $e) {
    echo "Exception: " . $e->getMessage() . PHP_EOL;
}

$fn_names = [
    "crc32", "md5", "sha1", "crypt"
];

foreach ($fn_names as $fn_name) {
    echo "Hasil enkripsi dari \"" . $password . "\" menggunakan " . $fn_name . " adalah: ";
    if ($fn_name == "crypt") {
        echo $fn_name($password, $salt);
    } else {
        echo $fn_name($password);
    }
    echo PHP_EOL;
}
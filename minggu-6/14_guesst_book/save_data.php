<?php

$required = [
    "name", "email", "interest", "gender"
];

foreach ($required as $field){
    if (is_null($_POST[$field])){
        die("$field harus diisi");
    }
}

$name = $_POST["name"];
$email = $_POST["email"];
$gender = $_POST['gender'];
$interest = $_POST["interest"];
$save_to = __DIR__ . "/data.json";

$data = [
    "name" => $name,
    "email" => $email,
    "gender" => $gender,
    "interest" => $interest
];

if (file_exists($save_to)){
    $json = file_get_contents($save_to);
    $json = json_decode($json, true);
} else {
    $json = [];
}

$json[] = $data;

$json = json_encode($json, JSON_PRETTY_PRINT);
file_put_contents($save_to, $json);

echo "Data berhasil disimpan";
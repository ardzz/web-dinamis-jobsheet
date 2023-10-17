<?php

$students = [
    'id' => [1, 2, 3],
    'name' => ['John', 'Jane', 'Doe'],
    'address' => ['Medan', 'Medan', 'Medan'],
    'subject' => ['Marine Biology', 'Mathematics', 'Physics'],
];

for ($i = 0; $i < count($students['id']); $i++) {
    echo "ID: " . $students['id'][$i] . "<br>";
    echo "Name: " . $students['name'][$i] . "<br>";
    echo "Address: " . $students['address'][$i] . "<br>";
    echo "Subject: " . $students['subject'][$i] . "<br>";
    echo "<br>";
}
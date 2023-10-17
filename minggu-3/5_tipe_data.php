<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tipe-tipe data</title>
</head>
<body>
<?php
$data = [
    5,
    "lima",
    5.0,
];

foreach ($data as $d) {
    echo gettype($d);
    echo "<br>";
}
?>
</body>
</html>
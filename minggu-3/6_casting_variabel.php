<!DOCTYPE html>
<html lang="en">
<head>
    <title>Casting variable</title>
</head>
<body>
<?php
$default = 4.90;

echo "{$default} : " . gettype($default) . "<br />";

$temp = (int) $default;
echo "{$temp} : " . gettype($temp) . "<br />";

$temp = (string) $default;
echo "{$temp} : " . gettype($temp) . "<br />";

$temp = (boolean) $default;
echo "{$temp} : " . gettype($temp) . "<br />";
?>
</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
class laptop {
    public function turnOn(string $uuid = "f40705c3-841e-4fda-a419-bad66fd1b5fa", $os = "unix"): string
    {
        return "[DEBUG][TURNING_UP] UUID: {$uuid} OS: {$os}";
    }

    public static function make(): laptop
    {
        return new self();
    }
}

$nana = laptop::make();
echo $nana->turnOn() . "<br>";
echo $nana->turnOn("996fef65-228a-4902-9f18-73bea5407c30", "windows") . "<br>";
?>
</body>
</html>
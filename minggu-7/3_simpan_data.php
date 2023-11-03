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
    public string $owner;

    function turnOn(): void
    {
        echo "[{$this->owner}] turning on laptop...";
    }

    static function make(string $owner): laptop
    {
        $laptop = new laptop();
        $laptop->owner = $owner;
        return $laptop;
    }
}

$instances = [
        laptop::make("kiki"),
        laptop::make("nana"),
        laptop::make("mina"),
];

/** @var laptop $instance */
foreach ($instances as $instance) {
    $instance->turnOn();
    echo "<br>";
}
?>
</body>
</html>
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
    $object1 = new User();
    $object1->name = "Alisa";
    $object2 = $object1;
    $object2->name = "Amira";
    echo "Object1 name = " . $object1->name."<br>";
    echo "Object2 name = " . $object2->name."<br>";

    class User{
        public $name;
    }
?>
</body>
</html>
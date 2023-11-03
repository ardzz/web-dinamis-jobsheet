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
class User{
    public string $username;

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): User
    {
        $this->username = $username;
        return $this;
    }
}

$obj1 = new User();
$obj1->setUsername("Rizal");

$obj2 = clone $obj1;
$obj2->setUsername("Huda");

echo "obj1: {$obj1->getUsername()} <br>";
echo "obj2: {$obj2->getUsername()} <br>";
?>
</body>
</html>
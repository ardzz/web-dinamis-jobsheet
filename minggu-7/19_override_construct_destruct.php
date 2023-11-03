<?php
class Student {
    public function __construct()
    {
        echo "Constructor dari class Student <br>";
    }
    public function __destruct()
    {
        echo "Destructor dari class Student <br>";
    }
}
class ComputerScience extends Student {
    public function __construct()
    {
        echo "Constructor dari class ComputerScience <br>";
    }
    public function __destruct()
    {
        echo "Destructor dari class ComputerScience <br>";
    }
}
class Biology extends ComputerScience {
    public function __construct()
    {
        echo "Constructor dari class Biology <br>";
    }
    public function __destruct()
    {
        echo "Destructor dari class Biology <br>";
    }
}
$bio = new Biology();
echo "Belajar OOP PHP <br>";
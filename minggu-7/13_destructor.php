<?php
class laptop {
    private string $owner = "Nanang Fattah";
    private string $merk  = "Asus";

    public function __construct()
    {
        echo "Constructor dari class laptop <br>";
    }

    public function __destruct()
    {
        echo "Destructor dari class laptop <br>";
    }

    public function hidupkan_laptop(): string
    {
        return "Hidupkan Laptop {$this->merk} punya {$this->owner} <br>";
    }
}

$laptop_anto = new laptop();
echo $laptop_anto->hidupkan_laptop();


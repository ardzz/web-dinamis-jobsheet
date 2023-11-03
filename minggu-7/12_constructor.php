<?php
    class laptop{
        private $pemilik = "Andi";
        private $merk = "Lenovo";
        public function __construct(){
            echo "Ini berasal dari constructor laptop";
        }
        public function hidupkan_laptop(){
            return "Hidupkan laptop $this->merk punya $this->pemilik";
        }
        public function __destruct(){
            echo "Ini berasal dari Destructor laptop";
        }
    }
    $laptop_andi = new laptop();
    echo "<br />";
    echo $laptop_andi->hidupkan_laptop();
    echo "<br />";

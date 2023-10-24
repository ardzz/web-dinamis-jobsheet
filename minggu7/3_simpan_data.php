<?php
    class laptop{
        var $pemilik;
        function hidupkan_laptop(){
            return "hidupkan_laptop";
        }
    }
    $laptop_anto = new laptop();
    $laptop_andi = new laptop();
    $laptop_dina = new laptop();

    $laptop_anto->pemilik="Diana";
    $laptop_andi->pemilik="Mona";
    $laptop_dina->pemilik="Donna";

    echo $laptop_anto->pemilik;
    echo "<br />";
    echo $laptop_andi->pemilik;
    echo "<br />";
    echo $laptop_dina->pemilik;
    echo "<br />";

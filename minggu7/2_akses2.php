<?php
    class laptop{
        var $pemilik;
        var $merk;
        var $ukuran_layar;
        function hidupkan_laptop(){
            return "hidupkan_laptop";
        }
        function matikan_laptop(){
            return "matikan_laptop";
        }
    }
    $laptop_anto = new laptop();
    $laptop_anto->pemilik = "Wira";
    $laptop_anto->merk = "Accer";
    $laptop_anto->ukuran_layar = "14 inchi";

    echo $laptop_anto->pemilik;echo "<br />";
    echo $laptop_anto->merk;echo "<br />";
    echo $laptop_anto->ukuran_layar;echo "<br />";
    echo $laptop_anto->hidupkan_laptop();echo "<br />";
    echo $laptop_anto->matikan_laptop();
?>
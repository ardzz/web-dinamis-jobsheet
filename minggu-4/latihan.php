<?php

$cuaca = "mendung";
$waktu = "siang";

function pilih_minuman($cuaca, $waktu): string
{
    if($cuaca == "mendung"){
        if($waktu == "pagi"){
            return "Es Teh";
        }elseif($waktu == "siang"){
            return "Es Jeruk";
        }elseif($waktu == "sore"){
            return "Kopi Susu";
        }elseif($waktu == "malam"){
            return "Teh Hangat";
        }
    }elseif($cuaca == "cerah"){
        if($waktu == "pagi"){
            return "Jus Jeruk";
        }elseif($waktu == "siang"){
            return "Es Jeruk";
        }elseif($waktu == "sore"){
            return "Es Teh";
        }elseif($waktu == "malam"){
            return "Air Putih";
        }
    }
}

echo pilih_minuman($cuaca, $waktu);
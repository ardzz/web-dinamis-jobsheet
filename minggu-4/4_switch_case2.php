<?php

$kendaraan = "sepeda";

switch ($kendaraan)
{
    case "mobil":
        echo "Ini adalah mobil";
        break;
    case "motor":
        echo "Ini adalah motor";
        break;
    case "sepeda":
        echo "Ini adalah sepeda";
        break;
    case "grab":
    case "gojek":
        echo "Ini adalah kendaraan online";
        break;
    default:
        echo "Ini bukan kendaraan";
}
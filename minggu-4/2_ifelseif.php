<?php
$nama_hari = date("D");

if ($nama_hari == "Sun"){
    echo "Minggu";
} elseif ($nama_hari == "Mon"){
    echo "Senin";
} elseif ($nama_hari == "Tue"){
    echo "Selasa";
} elseif ($nama_hari == "Wed"){
    echo "Rabu";
} elseif ($nama_hari == "Thu"){
    echo "Kamis";
} elseif ($nama_hari == "Fri"){
    echo "Jumat";
} else {
    echo "Sabtu";
}
<?php
    include ('4_tampilkan_data_peminjam.php');
    $db = new database();
    if (isset($_GET['id'])){
        $kode_peminjam = $_GET['id'];
        $db->hapus_data_peminjam($kode_peminjam);
        header('location:4_tampilkan_data_peminjam.php');
    }
    else{
        header('location:4_tampilkan_data_peminjam.php');
    }

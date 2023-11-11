<?php
    include ('4_tampilkan_data_peminjam.php');
    if (isset($_GET['id'])){
        $kode_peminjam = $_GET['id'];
        DataPeminjam::getInstace()->delete_data_peminjam($kode_peminjam);
    }
    header('location:4_tampilkan_data_peminjam.php');

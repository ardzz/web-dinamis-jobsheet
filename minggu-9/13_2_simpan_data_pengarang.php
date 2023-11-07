<?php
include('3_config.php');
$koneksi = new database();
$koneksi->tambah_data_pengarang($_POST['kode_pengarang'], $_POST['nama_pengarang']);
header('location:13_3_tampil_data_pengarang.php');

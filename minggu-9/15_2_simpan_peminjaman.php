<?php
include('3_config.php');
$koneksi = new database();
$koneksi->tambah_peminjaman($_POST['kode_buku'], $_POST['kode_peminjam']);
header('location:15_3_tampil_peminjaman.php');

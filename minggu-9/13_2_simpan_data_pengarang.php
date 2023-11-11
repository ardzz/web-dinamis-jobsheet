<?php
include('Buku.php');
Buku::connect();
Buku::getInstace()->tambah_data_pengarang($_POST['kode_pengarang'], $_POST['nama_pengarang']);
header('location:13_3_tampil_data_pengarang.php');

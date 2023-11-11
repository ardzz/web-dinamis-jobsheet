<?php
include('Buku.php');
Buku::getInstace()->tambah_peminjaman($_POST['kode_buku'], $_POST['kode_peminjam']);
header('location:15_3_tampil_peminjaman.php');

<?php
    include('Buku.php');
    Buku::getInstace()->tambah_data_jenis_buku($_POST['kode_jenis_buku'],$_POST['nama_jenis_buku']);
    header('location:11_3_tampil_data_jenis_buku.php');
<?php
    include ('DataPeminjam.php');
    DataPeminjam::connect();
    DataPeminjam::getInstace()->add_data_peminjam(
        $_POST['kode_peminjam'],
        $_POST['nama_peminjam'],
        $_POST['jenis_kelamin'],
        $_POST['tanggal_lahir'],
        $_POST['alamat'],
        $_POST['pekerjaan']);
    header('location:4_tampilkan_data_peminjam.php');

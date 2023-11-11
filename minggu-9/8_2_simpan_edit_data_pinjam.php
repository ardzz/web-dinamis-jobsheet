<?php
    include('DataPeminjam.php');

    $jenis_kelamin = $_POST['jenis_kelamin'];
    $kode_jk = null;

    if ($jenis_kelamin == "Perempuan") {
        $kode_jk = "P";
    }
    elseif ($jenis_kelamin == "Laki-laki"){
        $kode_jk = "L";
    }
    DataPeminjam::connect();
    DataPeminjam::getInstace()->edit_data_peminjam(
       $_POST['kode_peminjam'],
       $_POST['nama_peminjam'],
       $kode_jk,
       $_POST['tanggal_lahir'],
       $_POST['alamat'],
       $_POST['pekerjaan']
    );
    header('location:4_tampilkan_data_peminjam.php');
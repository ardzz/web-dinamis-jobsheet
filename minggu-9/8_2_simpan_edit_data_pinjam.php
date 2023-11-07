<?php
    include('3_config.php');
    $jenis_kelamin = $_POST['jenis_kelamin'];
    if ($jenis_kelamin == "Perempuan") {
        $kode_jk = "P";
    }
    elseif ($jenis_kelamin == "Laki-Laki"){
        $kode_jk = "L";
    }
    $koneksi = new database();
    $koneksi->edit_data_peminjam($_POST['kode_peminjam'], $_POST['nama_peminjam'], $kode_jk, $_POST['tanggal_lahir'], $_POST['alamat'], $_POST['pekerjaan']);
    header('location:4_tampilkan_data_peminjam.php');
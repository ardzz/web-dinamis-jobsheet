<?php
    include('3_config.php');
    $koneksi = new database();
    $koneksi->tambah_data_penerbit($_POST['kode_penerbit'], $_POST['nama_penerbit']);
    header('location:12_3_tampil_data_penerbit.php');

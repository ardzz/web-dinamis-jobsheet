<?php
    include('Buku.php');
    Buku::connect();
    Buku::getInstace()->tambah_data_penerbit($_POST['kode_penerbit'], $_POST['nama_penerbit']);
    header('location:12_3_tampil_data_penerbit.php');

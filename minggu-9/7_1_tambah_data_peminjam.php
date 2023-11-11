<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    include 'DataPeminjam.php';
    DataPeminjam::connect();
?>
<h3>Tambah Data Peminjam</h3>
<form action="7_2_simpan_data_peminjam.php" method="post">
<table>
    <tr>
        <td>Kode Peminjam</td>
        <td><input type="text" name="kode_peminjam"></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td><input type="text" name="nama_peminjam"></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>
            <select name = "jenis_kelamin">
                <option value ="--"></option>
                <?php
                $no = 1;
                foreach(DataPeminjam::getInstace()->show_data_jenis_kelamin() as $x){
                    echo '<option value = "'.$x['kode_jk'].'">'.$x['keterangan_jk'].'</option>';
                }
                ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>Tanggal Lahir</td>
        <td><input type="date" name="tanggal_lahir"></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td><textarea name="alamat"></textarea></td>
    </tr>
    <tr>
        <td>Pekerjaan</td>
        <td><input type="text" name="pekerjaan"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="Simpan"></td>
    </tr>
</table>
</form>
</body>
</html>
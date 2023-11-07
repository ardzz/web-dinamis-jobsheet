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
include '3_config.php';
$db = new database();
?>
<h3>Tambaha Data Jenis Buku</h3>
<form action="13_2_simpan_data_pengarang.php" method="post">
    <table>
        <tr>
            <td>Kode Pengarang</td>
            <td><input type="text" name="kode_pengarang"></td>
        </tr>
        <tr>
            <td>Nama Pengarang</td>
            <td><input type="text" name="nama_pengarang"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan"></td>
        </tr>
    </table>
</form>
</body>
</html>
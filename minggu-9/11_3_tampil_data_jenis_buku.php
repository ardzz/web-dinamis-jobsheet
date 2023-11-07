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
<table border="1">
    <tr>
        <th>No</th>
        <th>Kode Jenis Buku</th>
        <th>Nama Jenis Buku</th>
    </tr>
    <?php
        $no = 1;
        foreach($db->tampil_data_jenis_buku() as $x){
    ?>
    <tr>
        <td><?php echo $no++?></td>
        <td><?php echo $x['kode_jenis_buku']; ?></td>
        <td><?php echo $x['nama_jenis_buku']; ?></td>
    </tr>
    <?php
        }
    ?>
</table>
</body>
</html>
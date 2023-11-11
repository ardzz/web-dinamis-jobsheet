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
<table>
    <tr>
        <th>No</th>
        <th>Kode Peminjam</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Tanggal Lahir</th>
        <th>Alamat</th>
        <th>Pekerjaan</th>
        <th>Edit</th>
        <th>Hapus</th>
    </tr>
    <?php
        $no = 1;
        foreach (DataPeminjam::getInstace()->show_data_peminjam_with_join() as $x){
    ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $x['kode_peminjam']; ?></td>
        <td><?php echo $x['nama_peminjam']; ?></td>
        <td><?php echo $x['keterangan_jk']; ?></td>
        <td><?php
            $tanggal_lahir = $x['tanggal_lahir'];
            $tanggal_lahir_ganti_format = date("d-m-Y", strtotime($tanggal_lahir));
            echo $tanggal_lahir_ganti_format;
            ?></td>
        <td><?php echo $x['alamat']; ?></td>
        <td><?php echo $x['pekerjaan']; ?></td>
        <td><a href="8_1_edit_data_peminjam.php?id=<?php echo $x['kode_peminjam']; ?>">Edit</a></td>
        <td><a href="9_hapus_data_peminjam.php?id=<?php echo $x['kode_peminjam']; ?>">Hapus</a></td>
    </tr>
    <?php
        }
    ?>
</table>
</body>
</html>
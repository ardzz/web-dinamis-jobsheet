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
    if (isset($_GET['id'])){
        $kode_peminjam = $_GET['id'];
        $data_peminjam = DataPeminjam::getInstace()->show_kode_peminjam($kode_peminjam);
    }else{
        echo "aaaa";
        header('Location: 4_tampilkan_data_peminjam.php');
    }
?>
<h3>Edit Data Peminjam</h3>
<form action="8_2_simpan_edit_data_pinjam.php" method="POST">
    <input type="hidden" name="kode_peminjam" value="<?php echo $data_peminjam[0]['kode_peminjam']; ?>"/>
    <table>
        <tr>
            <td>Kode Peminjam</td>
            <td><input type="text" name="kode_peminjam" value="<?php echo $data_peminjam[0]['kode_peminjam']; ?>" disabled></td>
        </tr>
        <tr>
            <td>Nama Peminjam</td>
            <td><input type="text" name="nama_peminjam" value="<?php echo $data_peminjam[0]['nama_peminjam']; ?>"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>
                <select name = "jenis_kelamin">
                    <option value="--"></option>
                    <?php
                        $no = 1;
                        $kode_jenis_kelamin = $data_peminjam[0]['jenis_kelamin'];
                        foreach (DataPeminjam::getInstace()->show_data_jenis_kelamin() as $x){
                            echo "<option value='".$x['keterangan_jk']."'";
                            if($x['kode_jk'] == $kode_jenis_kelamin){echo " selected=selected";}
                            echo "> ".$x['keterangan_jk']."</option>";
                        }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td><input type="date" name="tanggal_lahir" value ="<?php echo $data_peminjam[0]['tanggal_lahir']; ?>"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><textarea name="alamat" cols="30" rows="10"><?php echo $data_peminjam[0]['alamat']; ?></textarea></td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td><input name="pekerjaan" value ="<?php echo $data_peminjam[0]['pekerjaan']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan"></td>
        </tr>
    </table>
</form>

</body>
</html>
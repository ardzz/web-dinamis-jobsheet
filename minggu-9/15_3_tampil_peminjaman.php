<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <title>Document</title>
</head>
<body>
<?php
include 'Buku.php';
Buku::connect();
?>
<table border="1">
    <tr>
        <th>No</th>
        <th>Kode Buku</th>
        <th>Judul Buku</th>
        <th>Peminjaman</th>
        <th>Tanggal Pinjam</th>
        <th>Tanggal Kembali</th>
        <th>Status Peminjaman</th>
    </tr>
    <?php
    $no = 1;
    foreach(Buku::getInstace()->tampil_peminjaman() as $x){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $x['kode_buku']; ?></td>
            <td><?php echo $x['judul_buku']; ?></td>
            <td><?php echo $x['nama_peminjam']; ?></td>
            <td><?php
                $tanggal_pinjam = $x['tanggal_pinjam'];
                $tanggal_pinjam1 = date("d F Y", strtotime($tanggal_pinjam));
                echo $tanggal_pinjam1;
            ?>
            </td>
            <td><?php
                $tanggal_kembali = $x['tanggal_kembali'];
                $tanggal_kembali1 = date("d F Y", strtotime($tanggal_kembali));
                echo $tanggal_kembali1;
                ?>
                </td>
            <td><?php
                    $status_peminjaman = $x['status'];
                    if($status_peminjaman == '1'){
                        $tanggal_hari_ini = date('d F Y');
                        if(strtotime($tanggal_hari_ini) < strtotime($tanggal_kembali1)){
                            echo "Belum dikembalikan";
                         }
                        else{
                            $waktu_kembali2 = date_create($tanggal_kembali1);
                            $tanggal_hari_ini = date("d F Y");
                            $tanggal_hari_ini2 = date_create($tanggal_hari_ini);
                            $diff = date_diff($waktu_kembali2, $tanggal_hari_ini2);
                            echo "Belum dikembalikan <b>(terlambat ".$diff->days." hari)</b>";
                        }
                    }
                    else if($status_peminjaman = '2'){
                        echo "Sudah dikembalikan";
                    }
                    ?>
            </td>
        </tr>
    <?php
    }
    ?>
</table>
</body>
</html>
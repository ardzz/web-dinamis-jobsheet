<?php
include "3_config.php";
class DataPeminjam extends database
{
    static function getInstace(): DataPeminjam
    {
        return new self();
    }
    function show_data_peminjam(): array
    {
        $data = self::getConnection()
            ->query("SELECT * FROM data_peminjam");
        return $this->asocToArray($data);
    }

    function show_data_peminjam_with_join(): array
    {
        // kelamin = p (data_peminjam)
        // p = perempuan (jenis_kelamin)
        $data = self::getConnection()
            ->query("SELECT a.*, b.* FROM data_peminjam a INNER JOIN jenis_kelamin b ON b.kode_jk = a.jenis_kelamin;");
        return $this->asocToArray($data);
    }

    function show_data_jenis_kelamin(): array
    {
        $data = self::getConnection()
            ->query("SELECT * FROM jenis_kelamin");
        return $this->asocToArray($data);
    }

    function add_data_peminjam(
        string $kode_peminjam,
        string $nama_peminjam,
        string $jenis_kelamin,
        string $tanggal_lahir,
        string $alamat,
        string $pekerjaan,
        string $user_id,
        string $foto): bool {
        $data = self::getConnection()
            ->query("INSERT INTO data_peminjam (kode_peminjam, nama_peminjam, jenis_kelamin, tanggal_lahir, alamat, pekerjaan, user_id, foto) VALUES ('$kode_peminjam', '$nama_peminjam', '$jenis_kelamin', '$tanggal_lahir', '$alamat', '$pekerjaan', '$user_id', '$foto')");
        return $data;
    }

    function edit_data_peminjam(
        string $kode_peminjam,
        string $nama_peminjam,
        string $jenis_kelamin,
        string $tanggal_lahir,
        string $alamat,
        string $pekerjaan,
        string $user_id,
        string $foto): bool {
        return self::getConnection()
            ->query("UPDATE data_peminjam SET nama_peminjam='$nama_peminjam', jenis_kelamin='$jenis_kelamin', tanggal_lahir='$tanggal_lahir', alamat='$alamat', pekerjaan='$pekerjaan', user_id='$user_id', foto='$foto' WHERE kode_peminjam='$kode_peminjam'");
    }

    function show_kode_peminjam(string $kode): array
    {
        $data = self::getConnection()
            ->query("SELECT a.*, b.* FROM data_peminjam a INNER JOIN jenis_kelamin b ON b.kode_jk = a.jenis_kelamin WHERE kode_peminjam='$kode'");
        return $this->asocToArray($data);
    }
}
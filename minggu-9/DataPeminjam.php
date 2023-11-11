<?php
include "3_config.php";
class DataPeminjam extends database
{
    use Model;
    function show_data_peminjam(): array
    {
        $data = self::executeQuery("SELECT * FROM data_peminjam");
        return $this->asocToArray($data);
    }

    function show_data_peminjam_with_join(): array
    {
        // kelamin = p (data_peminjam)
        // p = perempuan (jenis_kelamin)
        $data = self::executeQuery("SELECT a.*, b.* FROM data_peminjam a INNER JOIN jenis_kelamin b ON b.kode_jk = a.jenis_kelamin;");
        return $this->asocToArray($data);
    }

    function show_data_jenis_kelamin(): array
    {
        $data = self::executeQuery("SELECT * FROM jenis_kelamin");
        return $this->asocToArray($data);
    }

    function add_data_peminjam(
        string $kode_peminjam,
        string $nama_peminjam,
        string $jenis_kelamin,
        string $tanggal_lahir,
        string $alamat,
        string $pekerjaan): bool
    {
        return self::executeQuery("INSERT INTO data_peminjam (kode_peminjam, nama_peminjam, jenis_kelamin, tanggal_lahir, alamat, pekerjaan) VALUES ('$kode_peminjam', '$nama_peminjam', '$jenis_kelamin', '$tanggal_lahir', '$alamat', '$pekerjaan');");
    }

    function edit_data_peminjam(
        string $kode_peminjam,
        string $nama_peminjam,
        string $jenis_kelamin,
        string $tanggal_lahir,
        string $alamat,
        string $pekerjaan): bool
    {
        return self::executeQuery("UPDATE data_peminjam SET nama_peminjam='$nama_peminjam', jenis_kelamin='$jenis_kelamin', tanggal_lahir='$tanggal_lahir', alamat='$alamat', pekerjaan='$pekerjaan' WHERE kode_peminjam='$kode_peminjam'");
    }

    function show_kode_peminjam(string $kode): array
    {
        $data = self::executeQuery("SELECT a.*, b.* FROM data_peminjam a INNER JOIN jenis_kelamin b ON b.kode_jk = a.jenis_kelamin WHERE kode_peminjam='$kode'");
        return $this->asocToArray($data);
    }

    public function delete_data_peminjam(mixed $kode_peminjam): mysqli_result|bool
    {
        return self::executeQuery("DELETE FROM data_peminjam WHERE kode_peminjam='$kode_peminjam'");
    }
}
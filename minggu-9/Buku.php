<?php
if (!class_exists("database")){
    include "3_config.php";
}
class Buku extends database
{
    use Model;

    function delete_data_peminjam(string $kode_peminjam): bool
    {
        return self::executeQuery("DELETE FROM data_peminjam WHERE kode_peminjam='$kode_peminjam'");
    }

    function tambah_data_jenis_buku(
        string $kode_jenis_buku,
        string $nama_jenis_buku): bool
    {
        return self::executeQuery("INSERT INTO data_jenis_buku (kode_jenis_buku, nama_jenis_buku) VALUES ('$kode_jenis_buku', '$nama_jenis_buku')");
    }

    function tampil_data_jenis_buku(): array
    {
        $data = self::executeQuery("SELECT * FROM data_jenis_buku");
        return $this->asocToArray($data);
    }

    function tambah_data_penerbit(
        string $kode_penerbit,
        string $nama_penerbit,
    ): mysqli_result|bool
    {
        return self::executeQuery("INSERT INTO data_penerbit (kode_penerbit, nama_penerbit) VALUES ('$kode_penerbit', '$nama_penerbit')");
    }

    function tampil_data_penerbit(): array
    {
        $data = self::executeQuery("SELECT * FROM data_penerbit");
        return $this->asocToArray($data);
    }

    function tampil_data_pengarang(): array
    {
        $data = self::executeQuery("SELECT * FROM data_pengarang");
        return $this->asocToArray($data);
    }

    function tampil_jenis_buku(): array
    {
        $data = self::executeQuery("SELECT * FROM data_jenis_buku");
        return $this->asocToArray($data);
    }

    function tambah_data_buku(
        string $kode_buku, string $judul_buku, string $kode_pengarang,
        string $kode_jenis, string $kode_penerbit, string $isbn,
        string $tahun, string $deskripsi, int $jumlah): bool{
        return self::executeQuery("INSERT INTO data_buku (kode_buku, judul_buku, kode_pengarang, kode_jenis_buku, kode_penerbit, isbn, tahun, deskripsi, jumlah) VALUES ('$kode_buku', '$judul_buku', '$kode_pengarang', '$kode_jenis', '$kode_penerbit', '$isbn', '$tahun', '$deskripsi', '$jumlah')");
    }

    function tampil_data_buku(): array
    {
        $query =
            <<<QUERY
SELECT a.*, b.*, c.*, d.* FROM data_buku a
INNER JOIN data_pengarang b ON b.kode_pengarang = a.kode_pengarang
INNER JOIN data_jenis_buku c ON c.kode_jenis_buku = a.kode_jenis_buku
INNER JOIN data_penerbit d ON d.kode_penerbit = a.kode_penerbit
QUERY;
        $data = self::executeQuery($query);
        return $this->asocToArray($data);
    }

    function tampil_peminjaman(): array
    {
    $query =
            <<<QUERY
SELECT a.*, b.*, c.* FROM peminjaman a
INNER JOIN data_buku b ON b.kode_buku = a.kode_buku
INNER JOIN data_peminjam c ON c.kode_peminjam = a.kode_peminjam
QUERY;
        $data = self::executeQuery($query);
        return $this->asocToArray($data);
    }

    public function tambah_data_pengarang(mixed $kode_pengarang, mixed $nama_pengarang): mysqli_result|bool
    {
        return self::executeQuery("INSERT INTO data_pengarang (kode_pengarang, nama_pengarang) VALUES ('$kode_pengarang', '$nama_pengarang')");
    }

    public function show_data_pengarang(): array
    {
        $data = self::executeQuery("SELECT * FROM data_pengarang");
        return $this->asocToArray($data);
    }

    public function show_data_jenis_buku()
    {
        $data = self::executeQuery("SELECT * FROM data_jenis_buku");
        return $this->asocToArray($data);
    }

    public function show_data_penerbit()
    {
        $data = self::executeQuery("SELECT * FROM data_penerbit");
        return $this->asocToArray($data);
    }

    public function show_data_buku()
    {
        $data = self::executeQuery("SELECT * FROM data_buku");
        return $this->asocToArray($data);
    }

    public function show_data_peminjam()
    {
        $data = self::executeQuery("SELECT * FROM data_peminjam");
        return $this->asocToArray($data);
    }

    public function tambah_peminjaman(mixed $kode_buku, mixed $kode_peminjam)
    {
        $tanggal_pinjam = date('Y-m-d');
        $tanggal_kembali = date('Y-m-d', strtotime('+7 days', strtotime($tanggal_pinjam)));
        $status = 1;
        return self::executeQuery("INSERT INTO peminjaman (kode_buku, kode_peminjam, tanggal_pinjam, tanggal_kembali, status) VALUES ('$kode_buku', '$kode_peminjam', '$tanggal_pinjam', '$tanggal_kembali', '$status')");
    }
}
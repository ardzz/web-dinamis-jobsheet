<?php
function add(int $a, int $b) {
    $result = $a + $b;
    echo "Hasil penjumlahan $a + $b = $result\n";
}
add(10, 20);
echo "Fungsi dengan parameter untuk string\n";
function biodata(string $nama, string $alamat, int $umur) {
    echo "Nama: $nama\n";
    echo "Alamat: $alamat\n";
    echo "Umur: $umur\n\n";
}
biodata("Rizki", "Jl. Raya", 20);
biodata("Budi", "Jl. Raya", 20);
biodata("Susi", "Jl. Raya", 20);
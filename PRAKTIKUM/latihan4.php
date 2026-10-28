<?php
// Nama: Muhammad Iqbal Zulkarnain
// Kelas: X RPL
// Tanggal: 2026-06-22

$nama = (string)readline("Masukkan nama Anda: ");
$tahun_lahir = (int)readline("Masukkan tahun lahir Anda: ");
$kota = (string)readline("Masukkan asal kota Anda: ");
$nomor = (string)readline("Masukkan nomor telepon Anda: ");
$tinggi_badan = (float)readline("Masukkan tinggi badan Anda: ");
$berat_badan = (float)readline("Masukkan berat badan Anda: ");

echo "\n";
echo "=== KARTU BIODATA === \n";
echo "Nama: $nama \n";
echo "Tahun Lahir: $tahun_lahir \n";
echo "Kota Asal: $kota \n";
echo "Nomor Telepon: $nomor \n";
echo "Tinggi Badan: $tinggi_badan \n";
echo "Berat Badan: $berat_badan";
?>
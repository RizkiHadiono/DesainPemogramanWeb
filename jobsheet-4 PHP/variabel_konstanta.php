<?php
$angka1 = 10;
$angka2 = 5;
$hasil = $angka1 + $angka2;
$benar = true;
$salah = false; 
echo "Hasil penjumlahan $angka1 dan $angka2 adalah $hasil.";

// Mendefinisikan konstanta untuk nilai tetap
define("NAMA_SITUS", "WebsiteKu.com");
define("TAHUN_PENDIRIAN", 2023);

// Menampilkan informasi
echo "Selamat datang di " . NAMA_SITUS . "<br>";
echo "situs yang didirikan pada tahun " . TAHUN_PENDIRIAN . "<br>";
?>
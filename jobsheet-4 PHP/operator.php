<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali   = $a * $b;
$hasilBagi   = $a / $b;
$sisaBagi    = $a % $b;
$pangkat     = $a ** $b;

echo "a = {$a} <br>";
echo "b = {$b} <br><br>";

echo "Hasil Tambah (a + b) = {$hasilTambah} <br>";
echo "Hasil Kurang (a - b) = {$hasilKurang} <br>";
echo "Hasil Kali (a * b) = {$hasilKali} <br>";
echo "Hasil Bagi (a / b) = {$hasilBagi} <br>";
echo "Sisa Bagi (a % b) = {$sisaBagi} <br>";
echo "Pangkat (a ** b) = {$pangkat} <br>";

echo "<hr>";

$hasilSama              = ($a == $b);
$hasilTidakSama         = ($a != $b);
$hasilLebihKecil        = ($a < $b);
$hasilLebihBesar        = ($a > $b);
$hasilLebihKecilSama    = ($a <= $b);
$hasilLebihBesarSama    = ($a >= $b);

echo "a == b : " . ($hasilSama ? "true" : "false") . "<br>";
echo "a != b : " . ($hasilTidakSama ? "true" : "false") . "<br>";
echo "a < b  : " . ($hasilLebihKecil ? "true" : "false") . "<br>";
echo "a > b  : " . ($hasilLebihBesar ? "true" : "false") . "<br>";
echo "a <= b : " . ($hasilLebihKecilSama ? "true" : "false") . "<br>";
echo "a >= b : " . ($hasilLebihBesarSama ? "true" : "false") . "<br>";

echo "<hr>";

$hasilAnd  = ($a && $b);
$hasilOr   = ($a || $b);
$hasilNotA = (!$a);
$hasilNotB = (!$b);

echo "a && b : " . ($hasilAnd ? "true" : "false") . "<br>";
echo "a || b : " . ($hasilOr ? "true" : "false") . "<br>";
echo "!a     : " . ($hasilNotA ? "true" : "false") . "<br>";
echo "!b     : " . ($hasilNotB ? "true" : "false") . "<br>";

echo "<hr>";

$a += $b;
echo "a += b = {$a} <br>";

$a = $b;
echo "a = b = {$a} <br>";

$a *= $b;
echo "a *= b = {$a} <br>";

$a /= $b;
echo "a /= b = {$a} <br>";

$a %= $b;
echo "a %= b = {$a} <br>";

echo "<hr>";

$hasilIdentik       = ($a === $b);
$hasilTidakIdentik  = ($a !== $b);

echo "a === b : " . ($hasilIdentik ? "true" : "false") . "<br>";
echo "a !== b : " . ($hasilTidakIdentik ? "true" : "false") . "<br>";

echo "<hr>";

// Soal cerita 3.6
$totalKursi   = 45;
$kursiTerisi  = 28;
$kursiKosong  = $totalKursi - $kursiTerisi;

// hitung persen kosong
$persenKosong = ($kursiKosong / $totalKursi) * 100;

echo "<h3>Soal Cerita 3.6: Kursi Restoran</h3>";
echo "Total kursi   : {$totalKursi} <br>";
echo "Kursi terisi  : {$kursiTerisi} <br>";
echo "Kursi kosong  : {$kursiKosong} <br>";
echo "Persentase kursi kosong : " . number_format($persenKosong, 2) . "%<br>";
?>
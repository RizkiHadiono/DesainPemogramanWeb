<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}

echo "<hr>";

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak $jarakTarget kilometer.";

echo "<hr>";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";

echo "<hr>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor";

echo "<hr>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: {$nilai} (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}

echo "<hr>";

// Soal Cerita 4.6
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

// 1. Cari 2 nilai tertinggi dan 2 nilai terendah secara manual
$nilaiTertinggi1 = 0;
$nilaiTertinggi2 = 0;
$nilaiTerendah1 = 100;
$nilaiTerendah2 = 100;

// loop untuk mencari nilai tertinggi & terendah
foreach ($nilaiSiswa as $nilai) {
    // cek nilai tertinggi
    if ($nilai > $nilaiTertinggi1) {
        $nilaiTertinggi2 = $nilaiTertinggi1;
        $nilaiTertinggi1 = $nilai;
    } elseif ($nilai > $nilaiTertinggi2) {
        $nilaiTertinggi2 = $nilai;
    }

    // cek nilai terendah
    if ($nilai < $nilaiTerendah1) {
        $nilaiTerendah2 = $nilaiTerendah1;
        $nilaiTerendah1 = $nilai;
    } elseif ($nilai < $nilaiTerendah2) {
        $nilaiTerendah2 = $nilai;
    }
}

// 2. Hitung total semua nilai
$totalSemua = 0;
foreach ($nilaiSiswa as $nilai) {
    $totalSemua += $nilai;
}

// 3. Hitung total setelah mengabaikan 2 tertinggi & 2 terendah
$totalFilter = $totalSemua - ($nilaiTertinggi1 + $nilaiTertinggi2 + $nilaiTerendah1 + $nilaiTerendah2);

// 4. Tampilkan hasil
echo "<h3>Soal Cerita 4.6</h3>";
echo "Nilai siswa: ";
foreach ($nilaiSiswa as $nilai) {
    echo $nilai . " ";
}
echo "<br>";
echo "2 nilai tertinggi: {$nilaiTertinggi1}, {$nilaiTertinggi2} <br>";
echo "2 nilai terendah: {$nilaiTerendah1}, {$nilaiTerendah2} <br>";
echo "Total setelah abaikan 2 tertinggi & 2 terendah: {$totalFilter} <br>";

echo "<hr>";

//Soal Cerita 4.8
$poin = 520;

// menggunakan ternary untuk menentukan hadiah tambahan
$hadiahTambahan = ($poin > 500) ? "YA" : "TIDAK";

// tampilkan hasil
echo "<h3>Soal Cerita 4.8</h3>";
echo "Total skor pemain adalah: $poin.";
echo "Apakah pemain mendapatkan hadiah tambahan? $hadiahTambahan.";
?>
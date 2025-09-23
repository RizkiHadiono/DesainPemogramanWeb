<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];
$nilaiLulus = [];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        $nilaiLulus[] = $nilai;
    }
}

echo "Daftar nilai siswa yang lulus: " . implode(", ", $nilaiLulus);

echo "<hr>";

$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];

$karyawanPengalamanLimaTahun = [];

foreach ($daftarKaryawan as $karyawan) {
    if ($karyawan[1] > 5) {
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}

echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: " . implode(", ", $karyawanPengalamanLimaTahun);

echo "<hr>";

// Soal Cerita 5.4
$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];

$matakuliah = 'Fisika';

echo "Daftar nilai mahasiswa dalam mata kuliah {$matakuliah}: <br>";

foreach ($daftarNilai[$matakuliah] as $nilai) {
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
}

echo "<hr>";

// Data nilai siswa (array dua dimensi)
$daftarNilai = [
    ["Alice", 85],
    ["Bob", 92],
    ["Charlie", 78],
    ["David", 64],
    ["Eva", 90]
];

// Hitung total nilai untuk mencari rata-rata
$totalNilai = 0;
$jumlahSiswa = count($daftarNilai);

foreach ($daftarNilai as $siswa) {
    $totalNilai += $siswa[1];
}

$rataRata = $totalNilai / $jumlahSiswa;

// Tampilkan daftar nilai
echo "<h3>Soal Cerita 5.4</h3>";
echo "Daftar nilai siswa:<br>";
foreach ($daftarNilai as $siswa) {
    echo "Nama: {$siswa[0]}, Nilai: {$siswa[1]}<br>";
}

echo "<br>Rata-rata kelas: {$rataRata}<br><br>";

// Tampilkan siswa yang nilainya di atas rata-rata
echo "Siswa yang mendapat nilai di atas rata-rata:<br>";
foreach ($daftarNilai as $siswa) {
    if ($siswa[1] > $rataRata) {
        echo "- {$siswa[0]} (Nilai: {$siswa[1]})<br>";
    }
}
?>
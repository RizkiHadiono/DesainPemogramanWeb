<?php
// Lokasi penyimpanan file yang diunggah (ubah direktori)
$targetDirectory = "images/"; 
$allowedExtensions = array("jpg", "jpeg", "png", "gif"); 
$maxsize = 5*1024*1024; // Contoh batasan 5MB

// Periksa apakah direktori penyimpanan ada, jika tidak maka buat
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

if (isset($_FILES['files']) && $_FILES['files']['name'][0]) {
    $totalFiles = count($_FILES['files']['name']);
    $uploadSuccess = 0;
    $uploadFailure = 0;

    // Loop melalui semua file yang diunggah
    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['files']['name'][$i];
        $fileTmpName = $_FILES['files']['tmp_name'][$i];
        $fileSize = $_FILES['files']['size'][$i];
        $targetFile = $targetDirectory . $fileName;

        // Mendapatkan ekstensi file untuk validasi
        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Pengecekan validasi
        if (in_array($fileType, $allowedExtensions) && $fileSize <= $maxsize) {
            
            // Pindahkan file yang diunggah ke direktori penyimpanan
            if (move_uploaded_file($fileTmpName, $targetFile)) {
                echo "File **$fileName** berhasil diunggah.<br>";
                // Tambahkan kode untuk menampilkan thumbnail (opsional, seperti Bagian 1 Langkah 9)
                echo "<img src='$targetFile' style='width: 100px; height: auto;' alt='Thumbnail $fileName'><br>";
                $uploadSuccess++;
            } else {
                echo "Gagal mengunggah file **$fileName** (Kesalahan Server/Izin).<br>";
                $uploadFailure++;
            }
        } else {
            echo "Gagal mengunggah file **$fileName** (Tidak valid/Ukuran melebihi batas).<br>";
            $uploadFailure++;
        }
    }
    echo "<br>Ringkasan: $uploadSuccess file berhasil, $uploadFailure file gagal.";
} else {
    echo "Tidak ada file yang diunggah.";
}
?>
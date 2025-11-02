<?php
// Lokasi penyimpanan file yang diunggah
$targetDirectory = "images/"; 
$allowedExtensions = array("jpg", "jpeg", "png", "gif"); 
$maxsize = 5*1024*1024; // Contoh batasan 5MB

// Periksa apakah direktori penyimpanan ada, jika tidak maka buat
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

if (isset($_FILES['files']) && $_FILES['files']['name'][0]) {
    $totalFiles = count($_FILES['files']['name']);
    $output = "";
    
    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['files']['name'][$i];
        $fileTmpName = $_FILES['files']['tmp_name'][$i];
        $fileSize = $_FILES['files']['size'][$i];
        $targetFile = $targetDirectory . $fileName;
        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Pengecekan validasi
        if (in_array($fileType, $allowedExtensions) && $fileSize <= $maxsize) {
            
            if (move_uploaded_file($fileTmpName, $targetFile)) {
                $output .= "File **$fileName** berhasil diunggah.<br>";
            } else {
                $output .= "Gagal mengunggah file **$fileName** (Kesalahan Server/Izin).<br>";
            }
        } else {
            $output .= "Gagal mengunggah file **$fileName** (Bukan gambar/Ukuran melebihi batas 5MB).<br>";
        }
    }
    echo $output;

} else {
    echo "Tidak ada file yang diunggah.";
}
?>
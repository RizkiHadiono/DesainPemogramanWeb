<?php
$nama = $email = $password = "";
$errors = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Ambil data
    $nama = isset($_POST["nama"]) ? trim($_POST["nama"]) : "";
    $email = isset($_POST["email"]) ? trim($_POST["email"]) : "";
    $password = isset($_POST["password"]) ? $_POST["password"] : "";
    
    // Validasi Nama - Harus diisi
    if (empty($nama)) { $errors[] = "Nama harus diisi."; }
    
    // Validasi Email
    if (empty($email)) {
        $errors[] = "Email harus diisi.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid.";
    }

    // Validasi Password (Server-Side - Minimal 8 Karakter)
    if (strlen($password) < 8) {
        $errors[] = "Password harus memiliki minimal 8 karakter.";
    }
    
    // Hasil Validasi
    if (!empty($errors)) {
        echo "<h3>Kesalahan Validasi (Server):</h3>";
        echo "<ul>";
        foreach ($errors as $error) {
            echo "<li>" . htmlspecialchars($error) . "</li>";
        }
        echo "</ul>";
    } else {
        // Lanjutkan pemrosesan data
        echo "Data berhasil dikirim: Nama = " . htmlspecialchars($nama) . ", Email = " . htmlspecialchars($email) . ", Password OK.";
        // Catatan: Seharusnya password di-hash sebelum disimpan, BUKAN ditampilkan!
    }
} else {
    echo "Formulir harus disubmit.";
}
?>
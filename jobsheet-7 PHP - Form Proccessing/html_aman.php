<?php
    $input = "";
    $email = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // LANGKAH 2: Menggunakan htmlspecialchars untuk input umum
        if (isset($_POST['input'])) {
            $input = $_POST['input'];
            // Sanitasi input dengan htmlspecialchars (Langkah 2)
            $input_aman = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
        }
    }

    // LANGKAH 6: Menggunakan filter_var untuk validasi email
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        // Memeriksa apakah input adalah email yang valid
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_aman = $email;
            $pesan_email = "Email valid: " . htmlspecialchars($email_aman);
        } else {
            $pesan_email = "Format email tidak valid.";
        }
    }
?>
<?php
include "koneksi.php";

$username = $_POST['username'];
$password = md5($_POST['password']); 

$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";

$result = mysqli_query($connect, $query);
$cek = mysqli_num_rows($result);

if ($cek > 0) {
    $row  = mysqli_fetch_assoc($result); 
    
    if ($row['level'] == 1) { // Level 1 untuk Admin
        echo "Anda berhasil login, silahkan menuju "; ?>
        <a href="homeAdmin.html">Halaman HOME</a>
    <?php
    } else if ($row['level'] == 2) { // Level 2 untuk Guest
        echo "Anda berhasil login, silahkan menuju "; ?>
        <a href="homeGuest.html">Halaman HOME</a>
    <?php
    } else {
        echo "Anda gagal login, level akses tidak valid" ?>
        <a href="loginForm.html">Login kembali</a>
    <?php
    }
} else {
    echo "Anda gagal login, silahkan " ?>
    <a href="loginForm.html">Login kembali</a>
    <?php
}
?>
<?php
$hostname = "localhost"; 
$username = "root";    
$password = "";        
$database = "prakwebdb"; 

$connect = mysqli_connect($hostname, $username, $password, $database);

if (mysqli_connect_errno()) {

    echo "Koneksi database gagal: " . mysqli_connect_error();
    die();
}

?>
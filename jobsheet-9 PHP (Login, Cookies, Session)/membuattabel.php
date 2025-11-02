<?php
$sql = "CREATE TABLE user (
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL
)";
$query = mysqli_query($connect, $sql);
if ($query) {
    echo "Tabel user berhasil dibuat";
} else {
    echo "Gagal membuat tabel user: " . mysqli_error($connect);
}
?>
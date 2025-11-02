<?php
$password_md5 = '202cb962ac59075b964b07152d234b70'; 
$sql = "INSERT INTO user (id, username, password) VALUES (1, 'admin', '$password_md5')";
$query = mysqli_query($connect, $sql);
if ($query) {
    echo "Data user berhasil ditambahkan";
} else {
    echo "Gagal menambahkan data user: " . mysqli_error($connect);
}
?>
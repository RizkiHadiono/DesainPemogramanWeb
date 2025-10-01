<?php
// membuat fungsi
function perkenalan($nama, $salam = "Assalamualaikum") {
    echo $salam . ", ";
    echo "Perkenalkan, nama saya " . $nama . "<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

// memanggil fungsi dengan parameter salam
perkenalan("Hamdana", "Hallo");

echo "<hr>";

$saya = "Mokhamad Rizki Hadiono Singgih";
$ucapanSalam = "Selamat pagi";

// memanggil lagi tanpa mengisi parameter salam (pakai default)
perkenalan($saya);
?>

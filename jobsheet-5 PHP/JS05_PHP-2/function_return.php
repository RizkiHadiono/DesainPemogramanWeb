<?php
// membuat fungsi untuk menghitung umur
function hitungUmur($thn_lahir, $thn_sekarang) {
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

// membuat fungsi perkenalan
function perkenalan($nama, $salam = "Assalamualaikum") {
    echo $salam . ",<br/>";
    echo "Perkenalkan, nama saya " . $nama . "<br/>";
    // memanggil fungsi lain
    echo "Saya berusia " . hitungUmur(1988, 2023) . " tahun<br/>";
    echo "Senang berkenalan dengan anda<br/>";
}

// memanggil fungsi perkenalan
perkenalan("Elok");
?>

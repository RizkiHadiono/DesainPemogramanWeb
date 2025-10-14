<?php
    $pattern = '/[a-z]/'; // Cocokkan satu huruf kecil.
    $text = 'This is a Sample Text.';

    if (preg_match($pattern, $text)) {
        echo "Huruf kecil ditemukan!<br>";
    } else {
        echo "Tidak ada huruf kecil!<br>";
    }

    $pattern = '/[0-9]+/'; // Cocokkan satu atau lebih digit.
    $text = 'There are 123 apples.';

    if (preg_match($pattern, $text, $matches)) {
        echo "Cocokkan: " . $matches[0] . "<br>";
    } else {
        echo "Tidak ada yang cocok!<br>";
    }

    $pattern = '/apple/';
    $replacement = 'banana';
    $text_ganti = 'I like apple pie.';
    $new_text = preg_replace($pattern, $replacement, $text_ganti);
    echo $new_text . "<br>"; // Output: "I like banana pie."

    $pattern = '/go*d/'; // Cocokkan "gd", "god", "good", "gooood", dll.
    $text = 'god is good.';
    if (preg_match($pattern, $text, $matches)) {
        echo "Cocokkan: " . $matches[0] . "<br>";
    } else {
        echo "Tidak ada yang cocok!<br>";
    }

    $pattern_q = '/go?d/'; // Cocokkan "gd" atau "god".
    $text = 'god is good.';
    if (preg_match($pattern_q, $text, $matches_q)) {
        echo "Cocokkan: " . $matches_q[0] . "<br>";
    } else {
        echo "Tidak ada yang cocok!<br>";
    }

    $pattern_nm = '/go{2,3}d/'; // Cocokkan "good" atau "goood" (2 hingga 3 'o').
    $text_kuantifier = 'god is good.'; // Atau ganti dengan 'goood' untuk melihat kecocokan
    if (preg_match($pattern_nm, $text_kuantifier, $matches_nm)) {
        echo "Cocokkan: " . $matches_nm[0] . "<br>";
    } else {
        echo "Tidak ada yang cocok!<br>";
    }
?>
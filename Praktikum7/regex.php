<?php 
    // Soal 5.1
    $pattern = '/[a-z]/';
    $text = 'This is a Sample Text.';
    if (preg_match($pattern, $text)) {
        echo "Huruf kecil ditemukan! <br>";
    } else {
        echo "Tidak ada huruf kecil!";
    }

    // Soal 5.2
    $pattern = '/[0-9]+/';
    $text = 'There are 123 apples.';
    if (preg_match($pattern, $text, $matches)) {
        echo "Cocokkan: ". $matches[0];
    } else {
        echo "Tidak ada yang cocok!";
    }
?>
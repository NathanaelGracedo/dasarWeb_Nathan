<?php 
    // Soal 2.1
    $myArray = array();
    if (empty($myArray)) {
        echo "Array tidak terdefinisi atau kosong.<br>";
    } else {
        echo "Array terdefinisi dan tidak kosong";
    }

    // Soal 2.2
    if (empty($nonExistentVar)) {
        echo "Variabel tidak terdefinisi atau kosong.";
    } else {
        echo "Variabel terdefinisi dan tidak kosong.";
    }
?>
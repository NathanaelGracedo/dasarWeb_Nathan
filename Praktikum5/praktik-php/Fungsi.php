<?php 
    function perkenalan($nama, $salam) {
        echo $salam. ", ";
        echo "Perkennalkan, nama saya ".$nama."</br>";
        echo "Senang berkenalan dengan anda </br>";
    }

    //memanggil fungsi yang sudah dimuat
    perkenalan("Hamdana", "Hallo");
    
    echo "<hr>";

    $saya = "Nathan";
    $ucapanSalam = "Selamat pagi";

    //memanggil lagi
    perkenalan($saya, $ucapanSalam);
?>
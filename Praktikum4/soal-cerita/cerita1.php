<?php
echo "<h2>Soal Cerita Praktikum Bagian 3</h2>";
echo "Sebuah restoran memiliki 45 kursi di dalamnya. <br> 
Pada suatu malam, 28 kursi telah ditempati oleh pelanggan. <br>
Berapa persen kursi yang masih kosong di restoran tersebut? <br>";

$kursiTerpakai = 28;
$totalKursi = 45;
$persentaseKursi = ($totalKursi - $kursiTerpakai) / $totalKursi * 100;
echo "<BR><b>Persentase Total kursi kosong = <b>" . number_format($persentaseKursi,2) ."%";
?>
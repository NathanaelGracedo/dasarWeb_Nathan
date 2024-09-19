<?php
echo "<h2>Soal Cerita Praktikum Bagian 4</h2>";
echo "Seorang pelanggan ingin membeli sebuah produk dengan harga Rp 120.000. <br>
Toko tersebut menawarkan diskon sebesar 20% untuk pembelian di atas Rp 100.000. <br>
Bantu pelanggan ini untuk menghitung harga yang harus dibayar setelah mendapatkan diskon. <br>";

echo "<br><b>Jawab: </b><br>";

$hrgBrng = 120000;
$hrgStlhDskn = 0;
if ($hrgBrng > 100000) {
    $diskon = 0.2;
    $hrgStlhDskn = $hrgBrng - ($hrgBrng * $diskon) ;
}

echo "<br><b>Harga barang setelah diskon adalah $hrgStlhDskn <b>";
?>
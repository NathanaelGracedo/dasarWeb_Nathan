<?php 
echo "<h2>Soal Cerita Praktikum Bagian 4</h2>";
echo "Seorang pemain game ingin menghitung total skor mereka dalam permainan.<br>
Mereka mendapatkan skor berdasarkan poin yang mereka kumpulkan. <br>
Jika mereka memiliki lebih dari 500 poin, maka mereka akan mendapatkan hadiah tambahan. <br>
Buat tampilan baris pertama “Total skor pemain adalah: (poin)”. <br>
Dan baris kedua “Apakah pemain mendapatkan hadiah tambahan? (YA/TIDAK)” <br>";

echo "<br><b>Jawab: </b><br>";

$poinPemain = 625;
echo"Total Skor Pemain Adalah <b>$poinPemain</b> poin<BR>";
echo"Apakah pemain mendapatkan hadiah tambahan? <b>(YA/TIDAK)</b><BR>";
if ($poinPemain > 500) {
    $poinStlhBns = $poinPemain + 200;
    echo"<b>Ya</b>, pemain mendapatkan hadiah tambahan.
    <br>Selamat pemain mendapatkan hadiah berupa poin tambahan sebesar <b>200 poin</b>. 
    <br>Sehingga poin pemain menjadi <b>$poinStlhBns</b> dan <b>2 buah extra nyawa dalam game.</b>";
} else {
    echo"Tidak, anda tidak mendapatkan hadiah tambahan.";
    }

?>
<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Bilangan A: 10 <br> Bilangan B: 5 <br><br>";
echo "Operator Aritmatika: <br>";
echo "Hasil Jumlah A dan B: {$hasilTambah} <br>";
echo "Hasil Kurang A dan B: {$hasilKurang} <br>";
echo "Hasil kali A dan B: {$hasilKali} <br>";
echo "Hasil bagi A dan B: {$hasilBagi} <br>";
echo "Sisa pembagian A dan B: {$sisaBagi} <br>";
echo "Hasil Pemangkatan A dan B: {$pangkat} <br><br>";

$hasilSama = $a == $b;
$hasilTdkSama = $a != $b;
$hasilLebihKecil =  $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Operator Pembanding:<br>";
echo "Hasil Sama: {$hasilSama}<br>";
echo "Hasil Tidak Sama: {$hasilTdkSama}<br>";
echo "Hasil Lebih Kecil: {$hasilLebihKecil}<br>";
echo "Hasil Lebih Besar: {$hasilLebihBesar}<br>";
echo "Hasil Lebih Kecil Sama: {$hasilLebihKecilSama}<br>";
echo "Hasil Lebih Besar Sama: {$hasilLebihBesarSama}<br>";
?>
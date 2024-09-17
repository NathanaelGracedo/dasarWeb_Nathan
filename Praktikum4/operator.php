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

echo "Operator Pembanding: <br>";
echo "Hasil Sama: {$hasilSama} <br>";
echo "Hasil Tidak Sama: {$hasilTdkSama} <br>";
echo "Hasil Lebih Kecil: {$hasilLebihKecil} <br>";
echo "Hasil Lebih Besar: {$hasilLebihBesar} <br>";
echo "Hasil Lebih Kecil Sama: {$hasilLebihKecilSama} <br>";
echo "Hasil Lebih Besar Sama: {$hasilLebihBesarSama} <br><br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Operator Logika: <br>";
echo "Hasil And: {$hasilAnd} <br>";
echo "Hasil Or: {$hasilOr} <br>";
echo "Hasil NotA: {$hasilNotA} <br>";
echo "Hasil NotB: {$hasilNotB} <br><br>";

echo "Operator Penugasan: <br>";
$a += $b;
echo "Hasil A += B = $a <br>";
$a -= $b;
echo "Hasil A -= B = $a <br>";
$a *= $b;
echo "Hasil A *= B = $a <br>";
$a /= $b;
echo "Hasil A /= B = $a <br>";
$a %= $b;
echo "Hasil A %= B = $a <br>";

echo "Operator Identik: <br>";
$hasilIdentik = $a === $b;
echo "Hasil Identik = $hasilIdentik <br>";

$tidakIdentik = $a !== $b;
echo "Hasil Tidak Identik = $tidakIdentik <br>";
?>
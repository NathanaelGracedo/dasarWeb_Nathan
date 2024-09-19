<?php
echo "<h2>Soal Cerita Praktikum Bagian 4</h2>";
echo "Ada seorang guru ingin menghitung total nilai dari 10 siswa dalam ujian matematika. <br>
Guru ini ingin mengabaikan dua nilai tertinggi dan dua nilai terendah. <br>
Bantu guru ini menghitung total nilai yang akan digunakan untuk menentukan nilai rata-rata setelah mengabaikan nilai tertinggi dan terendah. <br>
Berikut daftar nilai dari 10 siswa (85, 92, 78, 64, 90, 75, 88, 79, 70, 96) <br>";

echo "<br><b>Jawab: </b><br>";
$daftarNilai = [85,92,78,64,90,75,88,79,70,96];

$nilaiMax1 = $daftarNilai[0];
$nilaiMax2 = $daftarNilai[0];
for ($i = 1; $i < count($daftarNilai); $i++) {
    if ($daftarNilai[$i] > $nilaiMax1) {
        $nilaiMax2 = $nilaiMax1; 
        $nilaiMax1 = $daftarNilai[$i]; 
    } elseif ($daftarNilai[$i] > $nilaiMax2 && $daftarNilai[$i] != $nilaiMax1) {
        $nilaiMax2 = $daftarNilai[$i]; 
    }
}
echo"<br>Nilai Maximal 1 adalah " . $nilaiMax1 . " Nilai Maximal 2 adalah ". $nilaiMax2. '';

for ($i = 0; $i < count($daftarNilai); $i++) {
    if ($daftarNilai[$i] == $nilaiMax1 || $daftarNilai[$i] == $nilaiMax2) {
        for ($j = $i; $j < count($daftarNilai) - 1; $j++) {
            $daftarNilai[$j] = $daftarNilai[$j + 1];
        }
        array_pop($daftarNilai); 
        $i--; 
    }
}

$nilaiMin1 = $daftarNilai[0];
$nilaiMin2 = $daftarNilai[0];
for ($i = 1; $i < count($daftarNilai); $i++) {
    if ($daftarNilai[$i] < $nilaiMin1) {
        $nilaiMin2 = $nilaiMin1; 
        $nilaiMin1 = $daftarNilai[$i]; 
    } elseif ($daftarNilai[$i] < $nilaiMin2 && $daftarNilai[$i] != $nilaiMin1) {
        $nilaiMin2 = $daftarNilai[$i];
    }
}

for ($i = 0; $i < count($daftarNilai); $i++) {
    if ($daftarNilai[$i] == $nilaiMin1 || $daftarNilai[$i] == $nilaiMin2) {
        for ($j = $i; $j < count($daftarNilai) - 1; $j++) {
            $daftarNilai[$j] = $daftarNilai[$j + 1];
        }
        array_pop($daftarNilai); 
        $i--;
    }
}

echo"<br>Nilai Minimal 1 adalah " . $nilaiMin1 . " Nilai Minimal 2 adalah ". $nilaiMin2. '';

$total = 0;
for ($i = 0; $i < count($daftarNilai); $i++) {
        $total += $daftarNilai[$i];
}
$rataRata = $total / (count($daftarNilai));
echo"<b><BR>Total Nilai Matematika adalah ". $total ." dan mendapatkan rataRata ". $rataRata ."<b>";
?>
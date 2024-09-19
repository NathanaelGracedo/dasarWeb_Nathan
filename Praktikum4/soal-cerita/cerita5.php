<?php 
    echo "<h2>Soal Cerita Praktikum Bagian 5</h2>";
    echo "Seorang guru ingin mencetak daftar nilai siswa dalam ujian matematika. <br>
    Guru tersebut memiliki data setiap siswa terdrir dari nama dan nilai. <br>
    Bantu guru ini mencetak daftar nilai siswa yang mencapai nilai di atas rata-rata kelas. <br>
    Dengan ketentuan nama dan nilai siswa Alice dapat 85, Bob dapat 92, Charlie dapat 78, David dapat 64, Eva dapat 90 <br>";

    echo "<br><b>Jawab: </b><br>";

    $nilaiMat = [
        ["Alice", 85],
        ["Bob", 92],
        ["Charlie", 78],
        ["David", 64],
        ["Eva", 90],
        ];
        
        echo"Daftar Siswa yang lulus: <br>";
        for ($i=0; $i < count($nilaiMat) ; $i++) { 
            if ($nilaiMat[$i][1] > 75) {
                echo "Nama: {$nilaiMat[$i][0]},<br> Nilai: {$nilaiMat[$i][1]}<br><br>";
            }
        }
?>
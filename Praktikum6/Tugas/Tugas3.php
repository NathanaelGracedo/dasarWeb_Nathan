<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="styleTugas3.css"/>
    <link rel="stylesheet" type="text/css" href="styleSlide.css">
    <script src="jquery-3.7.1.js"></script>
    <script>
        $(document).ready(function() {
            $("#flip").click(function() {
                $("#dataTable").slideToggle("slow");
                $("#rataRataUmur").slideToggle("slow");
            });
        });
    </script>
</head>
<body>
    <h2>Data Siswa</h2>
    <div id="flip" style="cursor: pointer;">Klik untuk melihat data siswa</div>
    <div id="dataTable" style="display: none;">
        <table>
            <tr>
                <th>Nama</th>
                <th>Umur</th>
                <th>Kelas</th>
                <th>Alamat</th>
            </tr>
            <?php 
                $Mahasiswa = array(
                    array("Nathan", 14, "2H", "Kediri"),
                    array("Nael", 12, "2A", "Blitar"),
                    array("Juan", 22, "2D", "Ponorogo"),
                    array("Juju", 18, "2F", "Malang"),
                    array("Gracedo", 20, "2G", "Medan")
                );

                function hitungRataRataUmur($data) {
                    $totalUmur = 0;
                    $jumlahSiswa = count($data);

                    foreach ($data as $siswa) {
                        $totalUmur += $siswa[1]; 
                    }

                    return $jumlahSiswa > 0 ? $totalUmur / $jumlahSiswa : 0; 
                }

                foreach ($Mahasiswa as $siswa) {
                    echo "<tr>";
                    echo "<td>" . $siswa[0] . "</td>";
                    echo "<td>" . $siswa[1] . "</td>";
                    echo "<td>" . $siswa[2] . "</td>";
                    echo "<td>" . $siswa[3] . "</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </div>

    <div id="rataRataUmur" style="display: none;">
        <h3>Rata-rata Umur Siswa: <?php echo hitungRataRataUmur($Mahasiswa); ?> tahun</h3>
    </div>
</body>
</html>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="styleTugas2.css"/>
    </head>
    <body>
        <h2>Data Siswa</h2>
        <table>
            <tr>
                <th>Nama</th>
                <th>Umur</th>
                <th>Kelas</th>
                <th>Alamat</th>
            </tr>
            <?php 
                $movie = array(
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

                foreach ($movie as $siswa) {
                    echo "<tr>";
                    echo "<td>" . $siswa[0] . "</td>";
                    echo "<td>" . $siswa[1] . "</td>";
                    echo "<td>" . $siswa[2] . "</td>";
                    echo "<td>" . $siswa[3] . "</td>";
                    echo "</tr>";
                }
            ?>
        </table>

        <h3>Rata-rata Umur Siswa: <?php echo hitungRataRataUmur($movie); ?> tahun</h3>
    </body>
</html>

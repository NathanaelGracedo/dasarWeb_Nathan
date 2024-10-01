<!DOCTYPE HTML>
<html>
    <head>
    </head>
    <body>
        <h1>Data Mahasiswa Array Multidimensi</h1>
        <ul>
            <?php 
                $Mahasiswa = array(
                    array("Nathanael", 2341823, "TI", "nathanael@example.com"),
                    array("Juan", 2345423, "Kimia", "juan@example.com"),
                    array("Gracedo", 2345423, "Sipil", "gracedo@example.com")
                );

                foreach ($Mahasiswa as $data) {
                    echo "<li> Nama: $data[0]</li>"; 
                    echo "<li> NIM: $data[1]</li>";
                    echo "<li> Jurusan: $data[2]</li>";
                    echo "<li> Email: $data[3]</li><br>";
                }
            ?>
        </ul>
    </body>
</html>

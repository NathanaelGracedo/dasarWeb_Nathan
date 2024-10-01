<DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title></title>
        </head>
        <body>
            <?php 
                $Dosen = [
                    'nama' => 'Elok Nur Hamdana',
                    'domisili' => 'Malang',
                    'jenis_kelamin' => 'Perempuan' 
                ];
            ?>
            
            <h2>Biodata Dosen</h2>
            <table border="1" cellpadding="10" cellspacing="0">
                <tr>
                    <th style="background-color: #B7E0FF">Nama</th>
                    <th style="background-color: #B7E0FF">Domisili</th>
                    <th style="background-color: #B7E0FF">Jenis Kelamin</th>
                </tr>
                <tr>
                    <td><?php echo $Dosen['nama']; ?></td>
                    <td><?php echo $Dosen['domisili']; ?></td>
                    <td><?php echo $Dosen['jenis_kelamin']; ?></td>
                </tr>
            </table>
        </body>
    </html>
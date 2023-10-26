<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PHP OOP</title>
</head>

<body>
    <div >
        <div>
            <div >
                <h2>Data Mahasiswa</h2>
                <hr style="height: 1px;color: black;background-color: black;">
                <a href="tambah.php"> Input Data</a>
            </div>
        </div>
        <div >
            <div >
                <table  border="2px">
                    <thead>
                        <tr >
                            <th>NO</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Umur</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'database.php';
                        $model = new Data();
                        $rows = $model->tampil();
                        $i = 1;
                        if (!empty($rows)) {
                            foreach ($rows as $row) {
                        ?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $row['nama']; ?></td>
                                    <td><?php echo $row['alamat']; ?></td>
                                    <td><?php echo $row['umur']; ?></td>
                                    <td>
                                        <a href="hapus.php?id=<?php echo $row['nama']; ?>">Hapus</a>
                                    </td>
                                </tr>
                        <?php
                            }
                        } 
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
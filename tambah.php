<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>PHP OOP</title>
</head>

<body>
    <div>
        <div>
            <div >
                <h2 >TAMBAH DATA</h2>
                <hr style="height: 1px;color: black;background-color: black;">
            </div>
        </div>
        <div >
            <div >
                <?php
                include 'database.php';
                $model = new Data();
                $insert = $model->insert();
                ?>
                <form opsi="" method="post">
                    <tr >
                    <td><label for="">Nama</label></td>
                    <td> <label for="">:</label></td>
                    <td><input type="text" name="nama"></td>
                        
                       
                        
                    </tr>
                    <tr >
                        <td><label for="">Alamat</label></td>
                        <td><label for="">:</label></td>
                        <td> <input type="text" name="alamat"></td>
                    </tr>
                    <tr >
                    <td><label for="">Umur</label></td>
                        <td><label for="">:</label></td>
                        <td> <input type="text" name="umur"></td>
                    </tr>
                    <div >
                        <button type="submit" name="submit" >Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
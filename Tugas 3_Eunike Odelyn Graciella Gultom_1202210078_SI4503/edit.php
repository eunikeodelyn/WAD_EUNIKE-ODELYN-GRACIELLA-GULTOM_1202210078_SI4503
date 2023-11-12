<?php

require 'databaseConnect.php';
$id = $_GET['id'];
$edit = "SELECT * from alatmusik WHERE id=$id";
$result = mysqli_query($conn, $edit);
$row = mysqli_fetch_assoc($result);

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $namabarang = $_POST['namabarang'];
    $merk = $_POST['merk'];
    $harga = $_POST['harga'];
    $stock = $_POST['stock'];

    $sql = "UPDATE alatmusik SET id='$id', namabarang='$namabarang', merk='$merk', harga='$harga', stock='$stock' WHERE id='$id'";
    $query = mysqli_query($conn, $sql);

    if( $query ) {
        header('Location: index.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <style>
            h1 {
                text-align: center;
            }
            .container {
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .mb-3 {
                margin: 30px;
            }
            .form-control {
                width: 500px;
            }
            .submit {
                padding: 20px;
            }
        </style>
        <title>Update Alat Musik</title>
    </head>
    <body>
        <h1>Update Data Alat Musik</h1>
        <br>
        <div class="container">
            <form action="" method="post">
                <input type="hidden" name="id" value="<?= $row['id']; ?>">
                <ul>
                    <li>
                        <label for="id">ID</label>
                        <input type="text" name="id" id="id" required value="<?= $row['id']; ?>">
                    </li>
                    <br>
                    <li>
                        <label for="namabarang">Nama barang</label>
                        <input type="text" name="namabarang" id="namabarang" required value="<?= $row['namabarang']; ?>">
                    </li>
                    <br>
                    <li>
                        <label for="merk">Merk</label>
                        <input type="text" name="merk" id="merk" required value="<?= $row['merk']; ?>">
                    </li>
                    <br>
                    <li>
                        <label for="harga">Harga</label>
                        <input type="text" name="harga" id="harga" required value="<?= $row['harga']; ?>">
                    </li>
                    <br>
                    <li>
                        <label for="stock">Stock</label>
                        <input type="text" name="stock" id="stock" required value="<?= $row['stock']; ?>">
                    </li>
                    <br>
                </ul>
            </form>
        </div>
        <div class="container">
            <input type="submit" name="submit" id="submit">
        </div>
        <br>
        <div class="container">
            <a href="index.php" class="btn btn-primary">Back</a>
        </div>
    </body>
</html>
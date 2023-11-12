<?php

require 'databaseConnect.php';

//insert data from the form to database
if(isset($_POST['submit'])){
    $id = isset($_POST['id']) ? $_POST['id'] : null;
    $namabarang = $_POST['namabarang'];
    $merk = $_POST['merk'];
    $harga = $_POST['harga'];
    $stock = $_POST['stock'];

    // var_dump($judul, $penulis);

    $sql = "INSERT INTO alatmusik (id, namabarang, merk, harga, stock) VALUES ('$id', '$namabarang', '$merk', '$harga', '$stock')";
    $query = mysqli_query($conn, $sql);

    if( $query ) {

    } else {
        die("Gagal menyimpan perubahan...");
    }
}

?>

<!DOCTYPE HTML> 
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
    <title>Input Data Alat Musik</title>
</head>
<body>
    <h1>Input Data</h1>
    <div class="container">
        <form action="" method="post">
            <div class="mb-3">
                <label for="id" class="form-label">ID</label>
                <input type="text" class="form-control" id="id" name="id">
            </div>
            <div class="mb-3">
                <label for="namabarang" class="form-label">Nama barang</label>
                <input type="text" class="form-control" id="namabarang" name="namabarang">
            </div>
            <div class="mb-3">
                <label for="merk" class="form-label">Merk</label>
                <input type="text" class="form-control" id="merk" name="merk">
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="text" class="form-control" id="harga" name="harga">
            </div>
            <div class="mb-3">
                <label for="stock" class="form-label">Stock</label>
                <input type="text" class="form-control" id="stock" name="stock">
            </div>

            <div class="submit">
                <input type="submit" class="form-control" id="submit" name="submit">
            </div>
        </form>
    </div>
    <div class="container">
        <a href="index.php" class="btn btn-primary">Back</a>
    </div>
    <div class="container">
        <?php if(isset($_POST['submit'])) : ?>
            <?php if( $query ) : ?>
                <div class="alert alert-success" role="alert">
                    Data berhasil ditambahkan!
                </div>
            <?php else : ?>
                <div class="alert alert-danger" role="alert">
                    Data gagal ditambahkan!
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</body>
</html>
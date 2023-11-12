<?php

require 'databaseConnect.php';

//read table perpustakaan
$contact = mysqli_query($conn, "SELECT * FROM alatmusik");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Toko Alat Musik</title>
</head>
<body>
    <div class="container">
        <h1>Data Alat Musik</h1>
        <hr>
        <a href="crud.php" class="btn btn-primary">Add Data</a>
        <hr>
        <table class="table table-bordered">
            <tr>
                <th>id</th>
                <th>Nama barang</th>
                <th>Merk</th>
                <th>Harga</th>
                <th>Stock</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach($alatmusik as $row) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $row["id"]; ?></td>
                <td><?= $row["nama barang"]; ?></td>
                <td><?= $row["merk"]; ?></td>
                <td><?= $row["harga"]; ?></td>
                <td><?= $row["stock"]; ?></td>
                <td>
                    <a href="edit.php?id=<?= $row['id']; ?>" target="_blank">Edit</a>
                    <br>
                    <a href="delete.php?id=<?= $row['id']; ?>" onclick="alertfunction()">Delete</a>
                </td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </div>
    <script>
        function alertfunction() {
            alert("Delete?");
        }
    </script>
</body>
</html>
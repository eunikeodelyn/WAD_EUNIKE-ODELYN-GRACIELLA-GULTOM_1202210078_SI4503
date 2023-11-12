<?php

require 'databaseConnect.php';

$id = $_GET['id'];
$hapus = "DELETE from alatmusik WHERE id=$id";
$query = mysqli_query($conn, $hapus);

if ($query) {
    header('Location: index.php');
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
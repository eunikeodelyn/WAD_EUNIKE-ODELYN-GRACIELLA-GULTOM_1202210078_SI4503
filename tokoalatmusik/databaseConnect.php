<?php

$server = "localhost";
$username = "root";
$password = "";
$databasename = "tokoalatmusik";

// Create connection
$conn = mysqli_connect($server, $username, $password, $databasename);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
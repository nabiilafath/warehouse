<?php

$servername ="localhost";
$username = "root";
$password = "";
$nama_database = "warehouse";

//create connection
$conn = new mysqli ($servername, $username, $password, $nama_database);

//check connection
if ($conn->connect_error) {
    die("connection failed : " . $conn->connect_error);
}


?>


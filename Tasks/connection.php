<?php
$server_name = "localhost";
$user_name = "root";
$password = "";
$database = "product";

$con= mysqli_connect($server_name, $user_name, $password, $database);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

?>

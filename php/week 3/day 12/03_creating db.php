<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password);
 echo "connection estiblish";

$sql = "CREATE DATABASE  mtalkz23";
$result = mysqli_query($conn, $sql);
?>

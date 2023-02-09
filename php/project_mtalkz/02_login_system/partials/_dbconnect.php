<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "users";

$conn = mysqli_connect($servername, $username, $password, $database);
if ($conn -> connect_error)
{
    echo "Failed to connect to MySQL: " . $conn -> connect_error;
}
?>

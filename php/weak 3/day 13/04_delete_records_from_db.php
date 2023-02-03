<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mtalkz";

$conn = mysqli_connect($servername, $username, $password, $database);
if ($conn -> connect_error)
{
    echo "Failed to connect to MySQL: " . $conn -> connect_error;
}
else 
    echo "Connection estiblish with server <br>";


$sql = "DELETE FROM `intern_data` WHERE name = 'vicky'";
$result = mysqli_query($conn, $sql);
echo "Data have been deleted <br>";
?>

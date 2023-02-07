<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mtalkz";

$conn = mysqli_connect($servername, $username, $password, $database);
 echo "connection estiblish for this session if you got the Data has been inserted confirmation \n ";

$name = "vikrant";
$profile = "intern";
$date_of_joining = '2023-01-23';
$sql = "INSERT INTO `intern_data` ( `name`, `profile`, `date_of_joining`) VALUES ('$name', '$profile', '$date_of_joining' );";
$result = mysqli_query($conn, $sql);
echo "Data  has been inserted ";
?>

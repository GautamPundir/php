<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mtalkz";
$conn = mysqli_connect($servername, $username, $password);
 echo "connection estiblish";

$sql = "CREATE TABLE `mtalkz`.`INTERN_data` (`sr no.` INT(11) NOT NULL , `name` VARCHAR(11) NOT NULL , `profile` VARCHAR(11) NOT NULL , `date_of_joining` DATE NOT NULL ) ENGINE = InnoDB;";
$result = mysqli_query($conn, $sql);
echo "Table has been created";
?>

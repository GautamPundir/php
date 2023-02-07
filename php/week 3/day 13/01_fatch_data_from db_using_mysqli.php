<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mtalkz";

$conn = mysqli_connect($servername, $username, $password, $database);
if ($conn -> connect_errno)
{
    echo "Failed to connect to MySQL: " . $conn -> connect_error;
}
else 
    echo "Connection estiblish with server <br>";


$sql = "SELECT * FROM `intern_data`";
$result = mysqli_query($conn, $sql);

$row = []; 
  
    if ($result->num_rows > 0) 
    {
        $row = $result->fetch_all(MYSQLI_ASSOC);  
    }   

    echo "Number of Rows is : " . mysqli_num_rows($result);
?>


<!DOCTYPE html>
<html>
<style>
    td,th {
        border: 1px solid black;
        padding: 10px;
        margin: 5px;
        text-align: center;
    }
</style>
  
<body>
    <table>
        <thead>
            <tr>
                <th>SERIAL NUMBER</th>
                <th>NAME</th>
                <th>PROFILE</th>
                <th>DATE OF JOINING</th>
            </tr>
        </thead>
        <tbody>
            <?php
               if(!empty($row))
               foreach($row as $rows)
              { 
            ?>
            <tr>
  
                <td><?php echo $rows['sr no.']; ?></td>
                <td><?php echo $rows['name']; ?></td>
                <td><?php echo $rows['profile']; ?></td>
                <td><?php echo $rows['date_of_joining']; ?></td>
                
  
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>

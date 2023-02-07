
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


$sql = "SELECT * FROM `intern_data` where name = 'Gautam' ";
$result = mysqli_query($conn, $sql);

$row = []; 
  
    if ($result->num_rows > 0) 
    {
        $row = $result->fetch_all(MYSQLI_ASSOC);  
    }   
    echo "Records before updatation " ;
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
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

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



$sql = "UPDATE `intern_data` SET `name` = 'gautam' WHERE name = 'Gautam' ";
$result = mysqli_query($conn, $sql);

?>

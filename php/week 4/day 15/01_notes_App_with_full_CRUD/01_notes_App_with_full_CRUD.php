<?php

$insert = false;
$delete = false;
$update = false;

$servername = "localhost";
$username = "root";
$password = "";
$database = "notes";

$conn = mysqli_connect($servername, $username, $password, $database);
if ($conn -> connect_errno)
{
    echo "Failed to connect to Database: " . $conn -> connect_error;
}
if(isset($_GET['delete'])){
  $pk = $_GET['delete'];
  $delete = true;
  $sql = "DELETE FROM `notes` WHERE `pk`=$pk";
  $result = mysqli_query($conn,$sql);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  if (isset( $_POST['pkEdit'])){
    
      $pk = $_POST["pkEdit"];
      $title = $_POST["titleEdit"];
      $description = $_POST["descriptionEdit"];
  
    
    $sql = "UPDATE `notes` SET `title` = '$title' , `description` = '$description' WHERE `notes`.`pk` = $pk";
    $result = mysqli_query($conn, $sql);
  if($result){
    $update = true;
  }
  else{
    echo "We could not update the record successfully";
  }
  }
  else{
      $title = $_POST["title"];
      $description = $_POST["description"];
  
    
    $sql = "INSERT INTO `notes` (`title`, `description`) VALUES ('$title', '$description')";
    $result = mysqli_query($conn, $sql);
  
     
    if($result){ 
        $insert = true;
    }
    else{
        echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
    } 
  }
  }
  ?>



<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">

  <title>NOTES app</title>


</head>

<body>


  <!-- Edit Modal -->
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Edit this Note</h5>
         
        </div>
        <form action="http://localhost/mtalkz/php/project_mtalkz/notes_app_using_php_crud/" method="POST">
          <div class="modal-body">
            <input type="hidden" name="pkEdit" id="pkEdit">
            <div class="form-group">
              <label for="title">Note Title</label>
              <input type="text" class="form-control" id="titleEdit" name="titleEdit" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
              <label for="desc">Note Description</label>
              <textarea class="form-control" id="descriptionEdit" name="descriptionEdit" rows="3"></textarea>
            </div>
          </div>
          <div class="modal-footer d-block mr-auto">
            
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>


  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">NOTES APP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Contact us<span class="sr-only"></span></a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container my-4 ">
    <form action="http://localhost/mtalkz/php/project_mtalkz/notes_app_using_php_crud/" method="POST">
      <h2>
        Add a note
      </h2>
      <div class="form-group">
        <label for="title">Note Title</label>

        <input type="text" class="form-control" id="title" name="title" aria-describedby="title"
          placeholder="Enter Note">
      </div>
      <div class="form-group">
        <label for="desc">Note Description</label>

        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Add Note</button>
    </form>
  </div>

  <?php
    if($insert){
      echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
      <strong>Success!</strong> Your Note have been inserted to the Database of Notes APP. You can check in list below.
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
      </button>
    </div>";}
  ?>
  <?php
  if($delete){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your note has been deleted successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  }
  ?>
  <?php
  if($update){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your note has been updated successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  }
  ?>
  
  
  

  <div class="container my-5">
    <table class="table" id="myTable">
      <thead>
        <tr>
          <th scope="col">S.No</th>
          <th scope="col">Title</th>
          <th scope="col">Description</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
            $sno=0;
            $sql = "SELECT * FROM `notes`";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)){
              $sno=$sno+1;
              echo "<tr>
              <th scope='row'>".$sno.".</th>
              <td>".$row['title']."</td>
              <td>".$row['description']."</td>
              <td><button class='edit btn btn-sm btn-primary'id=".$row['pk'].">Edit</button> <button class='delete btn btn-sm btn-primary' id=d".$row['pk'].">Delete</button></td>
            </tr>";
  
            }

    ?>

      </tbody>
    </table>
  </div>
  <hr>



  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
  <script>$(document).ready(function () {
      $('#myTable').DataTable();
    });</script>
  <script>
    deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        sno = e.target.id.substr(1);

        if (confirm("Are you sure you want to delete this note!")) {
          console.log("yes");
          window.location = `http://localhost/mtalkz/php/project_mtalkz/notes_app_using_php_crud/?delete=${sno}`;
        }
        else {
          console.log("no");
        }
      })
    })
  </script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
  <script>
    edits = document.getElementsByClassName('edit');
    Array.from(edits).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        tr = e.target.parentNode.parentNode;
        title = tr.getElementsByTagName("td")[0].innerText;
        description = tr.getElementsByTagName("td")[1].innerText;
        console.log(title, description);
        titleEdit.value = title;
        descriptionEdit.value = description;
        pkEdit.value = e.target.id;
        console.log(e.target.id)
        $('#editModal').modal('toggle');
      })
    })
  </script>
</body>

</html>

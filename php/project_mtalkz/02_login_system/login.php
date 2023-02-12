
<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'C:\xampp\htdocs\mtalkz\php\project_mtalkz\02_login_system\partials\_dbconnect.php';

    $username = $_POST["username"];
    $password = $_POST["password"];
    
    
    $sql = "Select * from users where username='$username'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        while($row=mysqli_fetch_assoc($result)){
            if (password_verify($password, $row['password'])){ 

                
                
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                header("location: http://localhost/mtalkz/php/project_mtalkz/02_login_system/welcome.php");
            } 
            else{
                echo $row['password'];
                $showError = " Invalid Password. Enter correct Password.";
            }
        }
        
    } 
    else{
        $showError = " Invalid Username. You have to signup first.";
    }
}
    
?>


<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Login</title>

    <style>
        body{
            /* filter: blur(8px);
  -webkit-filter: blur(8px); */
           backdrop-filter: blur(6px);
           background-image: url('./partials/mtalkz_web.png')
        }
    </style>

</head>

<body >

    <?php require 'partials/_nav.php';?>

    <?php
    if($login){
        echo '
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in to Mtalkz Web.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }


    if($showError){
        echo '
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong>'.$showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      ';
    }
      ?> 


    <div class="container ">
        <br><hr><br>
        <h1 class='text-center'>Login to Mtalkz</h1>

        <form action = "/mtalkz/php/project_mtalkz/02_login_system/login.php" method = "post" >
            <div class="form-group" >
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" 
                    placeholder="Enter username" autocomplete = 'off'>
                
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>

            
            <button type="submit" class="btn btn-primary">Login</button>
        </form>

        <br><hr><br>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>

<!DOCTYPE html>
<html>
    <head>
        <title>
            post request
        </title>
    </head>
    <body>
        <h1>
            this is header
        </h1>
        <form  method="Post">
            <label for="fname">First name:</label><br>
            <input type="text" id="fname" name="fname"><br>
            <label for="lname">Last name:</label><br>
            <input type="text" id="lname" name="lname">
            <input type="submit" >
        </form>
    </body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $name = $_POST['fname'];
    $last =$_POST['lname'];
    echo "My complete name is $name $last ";
}
?>

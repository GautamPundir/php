<?php

session_start();
echo $_SESSION['username'];
echo "<hr>";
echo "Your select ategory is " . $_SESSION['favcategory'];


?>

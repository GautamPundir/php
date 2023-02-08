<?php

$fptr = fopen("dummy_mytext.txt", "r");

// echo fgets($fptr);

// echo fgets($fptr);

// echo fgets($fptr);

// echo var_dump(fgets($fptr));


while (($a=fgets($fptr))) {
    echo $a,"<hr>";
}

rewind($fptr);

while (($a=fgetc($fptr))) {
    echo $a ,"<hr>";
}
?>

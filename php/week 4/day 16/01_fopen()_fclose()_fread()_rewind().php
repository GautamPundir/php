<?php

// $fptr = fopen("dummy_mytext.txt","r");
// echo var_dump($fptr);

$ptr = fopen("dummy_mytext.txt","r");
echo var_dump($ptr) ,"<br> <hr>";

$read = fread($ptr,"10");
echo ($read) ,"<br> <hr>";

$read = fread($ptr,filesize("dummy_mytext.txt"));
echo ($read) ,"<br> <hr>";

rewind($ptr);

// fseek(resource $stream, int $offset, int $whence = SEEK_SET): 0

$read = fread($ptr,filesize("dummy_mytext.txt"));
echo ($read) ,"<br> <hr>";

fclose($ptr);

// $read = fread($ptr,filesize("dummy_mytext.txt"));
// echo ($read) ,"<br> <hr>";
?>

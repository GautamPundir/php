<?php

$fptr = fopen("ai_text.txt", "w");
fwrite($fptr, "I am newly created file");
echo ( $fptr. " have been created");


$fptr = fopen("ai_text_2.txt", "a");

?>



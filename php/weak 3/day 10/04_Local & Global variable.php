
<?php
/*

$a="I am global";
echo $a;

function vari(){            //show error
    echo $a;

}

echo vari();

 */   
?>


<?php
$a="I am global <br>";
echo $a;

function vari(){
    global $a;
    echo $a;
}

echo vari();

?>





<!-- While loop -->

<?php
$i=0;
while($i<10){
    echo $i+1;
    echo "<br>";
    $i++;
}
?>


<!-- For loop  -->


<?php
for($i=0;$i<20;$i++){
    echo "I am ",$i,"<br>";
}
?>


<!-- Do while loop -->


<?php
$i=0;
do{
    echo "Here is ",$i,"<br>";
    $i++;
}
while($i<10);
?>



<!-- Foreach loop -->


<?php
$arr= array(4,5,6,4,6);
foreach ($arr as $value) {
    echo "I am ",$value."<br>";
}
?>

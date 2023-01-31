<?php
function myfunc($array){
    $n=count($array);
    $sum=0;
    for ($i=0;$i<$n;$i++){
        $sum = $sum + $array[$i];
    }
    return $sum;
}
function avg($array2){
    $fool= myfunc($array2);
    $avg1=$fool/count($array2);
    return $avg1;
}
$myarr = array(3,4,2,4,45,3,4,6,4,5,43234,5343,45343,3454,4);
$sum =  myfunc($myarr);


$num = count($myarr);
echo $sum,"<br>",$num,"<br>";

$myavgarr = array(3,3,3,4,45654,3456543,34543,33,5,3,23,4,3,4543,22);
$average= avg($myavgarr);
echo $average,"<br>",$num,"<br>";

?>

<?php
$arr =array(2,3,4,2);
$arr3 =array(67,45,3,65,34,54,76,87);
$a = $arr+$arr3;
$merge=array_merge($arr,$arr3);
echo var_dump($a);
echo "<br>";
echo var_dump($merge);
echo "<br>";
print_r($a);
echo "<br>";
print_r($merge);
?>

<!-- 
<?php
$str = "8560841836";
$mystr = array($str);
$string = strlen($str);
for($i=0; $i<$string; $i++){  
     echo $mystr[$i]."\n"; 
     }
?> -->



<?php
function check($mystr){
    // $mystr = array($myvalue);
    $string = strlen($mystr);
    $n=0;
    for($i=0; $i<$string; $i++){  
        if ($mystr[$i]=='a' || $mystr[$i]=='e' || $mystr[$i]=='i' || $mystr[$i]=='o' || $mystr[$i]=='u')
        $n++;
         }
         return $n;
}
$myarr = ['iamgoodboy','vgbnmvyubnijmko','bnjiyubnijyvtyubn','qwexrdcftvbgyhnujimko'];
// $x = check($string);
// echo $x;
// print_r($mystr);
// $n=0;
// $s = strlen($string);
// print_r($s);
// for($i=0; $i<$s; $i++){  
//     echo "<br>";
// print_r($string[$i]);
//              if ($string[$i]=='a' || $string[$i]=='e' || $string[$i]=='i' || $string[$i]=='o' || $string[$i]=='u')
//                     $n++;
//              }
// echo "<br>";
// print_r($n);
print_r(array_map("check",$myarr));
?>




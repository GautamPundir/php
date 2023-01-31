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
// function check($myvalue){
//     $mystr = array($myvalue);
//     $string = strlen($myst);
//     $n=0;
//     for($i=0; $i<$string; $i++){  
//         if ($mystr[i]=='a' || $mystr[i]=='e' || $mystr[i]=='i' || $mystr[i]=='o' || $mystr[i]=='u')
//         $n++;
//          }
//          return $n;
// }
$string = 'iamgoodboy';
// $x = check($string);
// echo $x;
// print_r($mystr);
$n=0;
$s = strlen($string);
for($i=0; $i<$s; $i++){  
             if ($string[$i]=='a' || $string[$i]=='e' || $string[$i]=='i' || $string[$i]=='o' || $string[$i]=='u');
            $n++;
             }
print_r($s);
echo "<br>";
print_r($n);
?>




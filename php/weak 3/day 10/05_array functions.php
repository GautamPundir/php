<?php
$hi = [3,4,3,4,3];
echo var_dump($hi);
echo is_array($hi);
?>

<br>

<?php
$hi = [3,4,3,4,3];

echo in_array(4,$hi);
?>


<br>


<?php
$hi = [3,4,3,4,3];

$unique = array_unique($hi);
foreach ($unique as  $value) {
     echo $value;
     echo "<br>";
}
?>



<br>

<?php
$hi = [3,4,3,4,3];

echo array_search(3,$hi);
?>


<br>

<?php
$hi = [3,4,3,4,3,45,65];

$unique = array_reverse($hi);
foreach ($unique as  $value) {
     echo $value;
     echo "<br>";
}
?>


<br>

<?php
$arrayone = [
    'Google',
    'Microsoft',
    'Apple',
    'Adobe',
    'Cisco',
    'Juniper',
    'Lenovo',
    'Samsung',
    'Red Hat'
];

$arraytwo = [
    'Google',
    'Microsoft',
    'Apple',
    'Adobe',
    'Cisco',
    'Juniper',
    'Lenovo',
    'Samsung'
];

$diff = array_diff($arrayone, $arraytwo);

print_r ($diff);

?>
<br>




<?php
$hi = [3,4,3,4,3,45,65];

    
     echo max($hi);

?>




<br>

<?php
$hi = [3,4,3,4,3,45,65];

    $maxr= array_rand($hi);
      echo $maxr;

?>



<br>


<?php
$hi = [3,4,3,4,3,45,65];

sort($hi);

print_r ($hi);
?>

<br>


<?php
$hi = [3,4,3,4,3,45,65];

array_push($hi,56);

print_r ($hi);
?>

<br>
<br>

<?php
$hi = [3,4,3,4,3,45,65];

array_pop($hi);

print_r ($hi);
?>
<br>


<?php
$hi = [3,4,3,4,3,45,65];

array_pop($hi);

print_r ($hi);
?>


<br><br>


<?php

$array = [
    'Apple Pies',
    'Apples',
    'Blueberries',
    'Pumpkins',
    'Corn',
    'Watermelons',
];

array_splice($array, 3, 1, 'Chocolates');
array_splice($array, 3, 1, 'banana');
print_r($array);

?>
<br>


<?php
    $array = [
        'Apple Pies',
        'Apples',
        'Blueberries',
        'Pumpkins',
        'Corn',
        'Watermelons',
    ];
    $hi = [3,4,3,4,3,45,65];
    print_r (array_merge($array,$hi));
?>



<?php
    $arr =array(2,3,4,2);
    print_r($arr);
    echo "<br>";
?>

<?php
    $arr =array(9,5,6,3);
    echo $arr[0];
    echo "<br>";
    echo $arr[1];
    echo "<br>";
    echo $arr[2];
    echo "<br>";
    echo $arr[3];
    echo "<br>";
    // echo $arr[4];
    // echo "<br>";             will give error cause index 5th is not present and php start indexing from 0
?>



<?php
$odd_numbers = [1,3,5,7,9];
$first_odd_number = $odd_numbers[0];

$second_odd_number = $odd_numbers[1];
$odd_numbers[5]=34;

echo "The first odd number is $first_odd_number\n";
echo "<br>";
echo "The second odd number is $second_odd_number\n";
echo "<br>";
print_r($odd_numbers);
?>



<?php
$odd_numbers = [1,3,5,7,9];
$first_odd_number = $odd_numbers[0];
$second_odd_number = $odd_numbers[1];
$odd_numbers[5]=34;

echo "The first odd number is $first_odd_number\n";
echo "The second odd number is $second_odd_number\n";
print_r($odd_numbers);

$odd_numbers = [1,3,5,7,9];
$first_item = reset($odd_numbers);
echo $first_item;
echo "<br>";
print_r($odd_numbers);
?>

<?php


// DONE
// TODO: add the even_numbers array here
$even_numbers=[2,4,6,8,10];

$male_names = ["Jake", "Eric", "John"];
$female_names = ["Jessica", "Beth", "Sandra"];

// TODO: join the male and female names to one array
$names = array_merge($male_names,$female_names);

print_r($even_numbers);
print_r($names);

?>

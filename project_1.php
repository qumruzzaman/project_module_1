<?php
// Project 1: Number Classifier
//Make a PHP script that checks a number. First, check if the number is positive or negative. Then, check if the number is even or odd.
// Show output like: "The number -4 is Negative and Even".
$number = -4;
if($number > 0){
    $sign =  "Positive";
}elseif($number < 0){
    $sign = "Negative";
}elseif($number == 0){
    $sign = "neither positive nor negative";
}else{
    $sign = "Invalid";
}

if($number%2 == 0){
    $parity =  "Even";
}elseif($number%2 != 0){
    $parity = "Odd";
}else{
    $parity = "Invalid";
}

echo "The number $number is $sign and $parity";

?>

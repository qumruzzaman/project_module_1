<?php
//  Project 4: Simple Electricity Bill Calculator
// If units are less than or equal to 50: bill = units * 3.50
//  If units are less than or equal to 100: bill = 50 * 3.50 + (units - 50) * 4.00
//  If units are less than or equal to 200: bill = 50 * 3.50 + 50 * 4.00 + (units - 100) * 5.20
//  If units are more than 200 means else case: bill = 50 * 3.50 + 50 * 4.00 + 100 * 5.20 + (units - 200) * 6.50
// Show the total amount clearly with a message.
$units = 101;
$bill = 0;

if($units<=50){
    $bill = $units * 3.50;
}elseif($units<=100){
    $bill = (50 * 3.50) + ($units - 50) * 4.00;
}elseif($units <=200){
    $bill = (50 * 3.50) + (50 * 4.00) + ($units - 100) * 5.20;
}else{
    $bill = (50 * 3.50) + (50 * 4.00) + (100 * 5.20) + ($units - 200) * 6.50;
}
printf("Total bill for %d units is: %.2f Taka<br>", $units, $bill);

?>

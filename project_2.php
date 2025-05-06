<?php
// Project 2: Temperature Converter
// The formula to convert Celsius to Fahrenheit is °F = (°C × 9/5) + 32. 
// This formula converts a temperature given in Celsius (°C) to its equivalent in Fahrenheit (°F). 

$celsius = 100;   // Temperature in Celsius
$fahrenheit = ($celsius * 9/5) + 32;  // Convert Celsius to Fahrenheit
echo "Celsius(" . $celsius . "°C) to Fahrenheit is " . $fahrenheit . "°F.\n";
echo '<br>';


// Fahrenheit to Celsius: (fahrenheit - 32) * 5/9 
// This formula converts a temperature given in Fahrenheit (°F) to its equivalent in Celsius (°C).
$fahrenheitNew = 212; // Temperature in Fahrenheit

$celsiusNew = ($fahrenheitNew - 32) * 5/9; // Convert Fahrenheit to Celsius  
echo "Fahrenheit(" . $fahrenheitNew . "°F) to Celsius is " . $celsiusNew . "°C.\n"; 

?>
   

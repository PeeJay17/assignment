<?php
// Given variables
$i = 49;
$d = 14.0;
$s = "Polyilaro ";

// Declare second integer, double, and String variables
$secondInteger;
$secondDouble;
$secondString;

// Read and save an integer, double, and String to your variables
echo "Enter an integer: ";
$secondInteger = intval(fgets(STDIN));

echo "Enter a double: ";
$secondDouble = doubleval(fgets(STDIN));

echo "Enter a string: ";
$secondString = rtrim(fgets(STDIN)); // Remove trailing newline characters

// Print the sum of both integer variables on a new line
echo $i + $secondInteger . "\n";

// Print the sum of the double variables on a new line
echo number_format($d + $secondDouble, 1) . "\n";

// Concatenate and print the String variables on a new line
echo $s . $secondString . "\n";
?>

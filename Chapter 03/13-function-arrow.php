<?php
$factor = 10;
$multiply = fn($number) => $number * $factor;

echo $multiply(5);  // output 50


$numbers = [1, 2, 3, 4, 5];

$odds = array_filter($numbers, fn($number) => $number % 2 == 1);

print_r($odds);  // Output: [1, 3, 5]

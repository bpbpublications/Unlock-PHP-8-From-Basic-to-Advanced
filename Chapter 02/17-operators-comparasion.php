<?php
$x = 10;
$y = "10";
var_dump($x == $y); // output: bool(true)

$x = 10;
$y = "10";
var_dump($x === $y); // output: bool(false)

$x = 10;
$y = 20;
var_dump($x != $y); // Output: bool(true), because 10 is not equal to 20.

$x = 10;
$y = "10";
var_dump($x !== $y); // Output: bool(true), because 10 (integer) is not identical to "10" (string).

$x = 10;
$y = 20;
var_dump($x < $y); // Output: bool(true), because 10 is less than 20.

$x = 30;
$y = 20;
var_dump($x > $y); // Output: bool(true), because 30 is greater than 20.

$x = 20;
$y = 20;
var_dump($x <= $y); // Output: bool(true), because 20 is equal to 20.

$x = 30;
$y = 20;
var_dump($x >= $y); // Output: bool(true), because 30 is greater than 20.


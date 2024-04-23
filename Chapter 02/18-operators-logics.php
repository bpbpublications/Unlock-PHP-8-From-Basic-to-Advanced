<?php
$x = 10;
$y = 20;
var_dump($x == 10 and $y == 20); // Output: bool(true), because both conditions are true.

$x = 30;
$y = 20;
var_dump($x == 10 || $y == 20); // Output: bool(true), because one of the conditions is true.

$x = 10;
$y = 20;
var_dump($x == 10 xor $y == 10); // Output: bool(true), because only one of the conditions is true.

$x = 10;
var_dump(!($x == 20)); // Output: bool(true), because $x is not equal to 20, and NOT operator inverts the false condition to true.
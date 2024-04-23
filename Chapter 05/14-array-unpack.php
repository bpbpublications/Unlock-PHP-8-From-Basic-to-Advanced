<?php

$part1 = [1, 2, 3];
$part2 = [4, 5, 6];

$combined = [...$part1, ...$part2];

print_r($combined); // [1, 2, 3, 4, 5, 6]


/*** PHP 8 */

$array1 = ["a" => "Apple", "b" => "Banana"];
$array2 = ["c" => "Cherry", "d" => "Date"];

$combined = ["e" => "Elderberry", ...$array1, ...$array2];

print_r($combined);
// output: Array ( [e] => Elderberry [a] => Apple [b] => Banana [c] => Cherry [d] => Date )
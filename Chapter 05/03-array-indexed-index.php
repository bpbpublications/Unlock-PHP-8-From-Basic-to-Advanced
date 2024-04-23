<?php
$being = [];
$being[3] = "PHP 8 Cookbook";
$being[100] = "Harry Potter";
$being[56] = "Lord of the Rings";
$being[69] = "Matrix";
$being[] = "Pokemon Book"; //the position will assume the last largest value incrementing by 1

print_r($being); //outputs
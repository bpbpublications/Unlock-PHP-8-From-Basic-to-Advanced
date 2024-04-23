<?php

$array1 = ['Apple', 'Banana', 'Cherry'];
$array2 = [1 => 'Apple', 0 => 'Banana', 2 => 'Cherry'];
$array3 = [1 => 'Apple', 'Banana', 'Cherry'];

var_dump(array_is_list($array1)); // bool(true)
var_dump(array_is_list($array2)); // bool(false)
var_dump(array_is_list($array3)); // bool(false)
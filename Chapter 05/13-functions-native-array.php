<?php
/** array_push */
$fruits = ["apple", "banana"];
array_push($fruits, "mango", "orange");
print_r($fruits);
// output: Array ( [0] => apple [1] => banana [2] => mango [3] => orange )

PHP_EOL;

/** array_pop() */
$fruits = ["apple", "banana", "mango"];
$lastFruit = array_pop($fruits);
echo $lastFruit; // output: mango

PHP_EOL;

/** array_shift() */
$fruits = ["apple", "banana", "mango"];
$firstFruit = array_shift($fruits);
echo $firstFruit; // output: apple
print_r($fruits); // output: Array (  [0] => banana [1] => mango )

PHP_EOL;

/** array_unshift */
$fruits = ["apple", "banana"];
array_unshift($fruits, "mango", "orange");
print_r($fruits);
// output: Array ( [0] => mango [1] => orange [2] => apple [3] => banana )

PHP_EOL;

/** array_slice */
$fruits = ["apple", "banana", "mango", "orange", "lemon"];
$slicedFruits = array_slice($fruits, 1, 3);
print_r($slicedFruits);
// output: Array ( [0] => banana [1] => mango [2] => orange )

PHP_EOL;

/** array_splice */
$fruits = ["apple", "banana", "mango", "orange", "lemon"];
array_splice($fruits, 2, 2, ["grape", "kiwi"]);
print_r($fruits);
// output: Array ( [0] => apple [1] => banana [2] => grape [3] => kiwi [4] => lemon )

PHP_EOL;

/**  array_map */
$fruits = ['Apple', 'Banana', 'Cherry', 'Date', 'Elderberry'];
$fruitsInUpperCase  = array_map(function($fruit) {
    return strtoupper($fruit);
}, $fruits);
print_r($fruitsInUpperCase);
// output: Array ( [0] => APPLE [1] => BANANA [2] => CHERRY [3] => DATE [4] => ELDERBERRY )

PHP_EOL;

/** array_filter  */
$fruits = ['Apple', 'Banana', 'Cherry', 'Date', 'Elderberry'];

$longFruits = array_filter($fruits, function($fruit) {
    return strlen($fruit) > 5;
});

print_r($longFruits);
// output: Array ( [1] => Banana [2] => Cherry [4] => Elderberry )

PHP_EOL;

/** array_reduce  */
$fruits = ['Apple', 'Banana', 'Cherry', 'Date', 'Elderberry'];

$result = array_reduce($fruits, function($carry, $item) {
    return empty($carry) ? $item : "$carry, $item";
});

echo $result; // output: Apple, Banana, Cherry, Date, Elderberry

PHP_EOL;

$fruits = ['Apple', 'Banana', 'Cherry', 'Date', 'Elderberry'];
$result = implode(', ', $fruits);
echo $result; // output: Apple, Banana, Cherry, Date, Elderberry

PHP_EOL;

$fruitString = 'Apple, Banana, Cherry, Orange, Elderberry';
$fruits = explode(', ', $fruitString);
print_r($fruits);
// output: Array ( [0] => Apple [1] => Banana [2] => Cherry [3] => Orange [4] => Elderberry )


$fruits = ["banana", "apple", "mango", "lemon"];
sort($fruits);
print_r($fruits);
// output: Array ( [0] => apple [1] => banana [2] => lemon [3] => mango )


$fruits = ["banana", "apple", "mango", "lemon"];
rsort($fruits);
print_r($fruits);
// output: Array ( [0] => mango [1] => lemon [2] => banana [3] => apple )


$fruits = ["a" => "banana", "b" => "apple", "c" => "mango", "d" => "lemon"];
asort($fruits);
print_r($fruits);
// output: Array ( [b] => apple [a] => banana [d] => lemon [c] => mango )


$fruits = ["a" => "banana", "b" => "apple", "c" => "mango", "d" => "lemon"];
arsort($fruits);
print_r($fruits);
// output: Array ( [c] => mango [d] => lemon [a] => banana [b] => apple )


$fruits = ["c" => "banana", "a" => "apple", "b" => "mango", "d" => "lemon"];
ksort($fruits);
print_r($fruits);
// output: Array ( [a] => apple [b] => mango [c] => banana [d] => lemon )

$fruits = ["c" => "banana", "a" => "apple", "b" => "mango", "d" => "lemon"];
krsort($fruits);
print_r($fruits);
// output: Array ( [d] => lemon [c] => banana [b] => mango [a] => apple )

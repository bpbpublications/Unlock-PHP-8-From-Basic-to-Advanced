<?php
$contact = [
    'name' => 'Roni', 
    'email' => 'roni@phpiando.com.br', 
    'phone' => '123-456-7890'
];

//Converting the associative array to an indexed array
$values = array_values($contact);

//Getting the number of elements in the array
$count = count($values);

//Using the for loop to iterate over the array values
for ($i = 0; $i < $count; $i++) {
    echo $values[$i] . PHP_EOL;
}


$contact = [
    'name' => 'Roni',
    'email' => 'roni@phpiando.com.br',
    'phone' => '123-456-7890'
];

// Using foreach loop to iterate over associative array
foreach ($contact as $key => $value) {
    echo "$key: $value" . PHP_EOL;
}

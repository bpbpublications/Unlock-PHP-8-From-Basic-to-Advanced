<?php

$employees = [
    "Roni" => ["age" => 34, "position" => "Developer"],
    "Alice" => ["age" => 25, "position" => "CEO"],
    "Bob" => ["age" => 28, "position" => "Designer"],
];

// foreach loop to traverse the $employees array
foreach ($employees as $name => $details) {
    echo "Nome: $name" . PHP_EOL;
    echo "Idade: " . $details["age"] . PHP_EOL;
    echo "Cargo: " . $details["position"] . PHP_EOL;
    echo PHP_EOL;
}
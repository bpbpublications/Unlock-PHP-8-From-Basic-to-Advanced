<?php

$employees = [
    "Roni" => ["age" => 34, "position" => "Developer"],
    "Alice" => ["age" => 25, "position" => "CEO"],
    "Bob" => ["age" => 28, "position" => "Designer"],
];

print_r($employees);

echo $employees["Roni"]["age"]; // output: 34
echo $employees["Alice"]["position"]; // output: Developer
echo $employees["Bob"]["age"]; // output: 28
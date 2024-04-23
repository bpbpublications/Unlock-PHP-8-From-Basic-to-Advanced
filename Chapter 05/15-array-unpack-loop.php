<?php

$users = [
    ['name' => 'Alice', 'age' => 25, 'email' => 'alice@example.com'],
    ['name' => 'Bob', 'age' => 30, 'email' => 'bob@example.com'],
    ['name' => 'Roni', 'age' => 34, 'email' => 'roni@example.com'],
];

foreach ($users as ['name' => $name, 'age' => $age, 'email' => $email]) {
    echo "Name: $name, Age: $age, Email: $email\n";
}
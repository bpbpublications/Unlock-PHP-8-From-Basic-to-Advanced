<?php
$pdo = new PDO('mysql:host=localhost;dbname=php_book', 'root', '');

$query = "UPDATE users SET email=:email WHERE name=:name";
$stmt = $pdo->prepare($query);

$data = [
    'name' => 'John Doe',
    'email' => 'john.doe_updated@example.com',
];

$stmt->execute($data);
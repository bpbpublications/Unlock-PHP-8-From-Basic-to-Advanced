<?php
$pdo = new PDO('mysql:host=localhost;dbname=php_book', 'root', '');

// Preparation
$query = "INSERT INTO users (name, email) VALUES (:name, :email)";
$stmt = $pdo->prepare($query);

// Binding and Execution
$data = [
    'name' => 'Roni Sommerfeld 2',
    'email' => 'roni.sommerfeld.2@example.com',
];

$stmt->execute($data);
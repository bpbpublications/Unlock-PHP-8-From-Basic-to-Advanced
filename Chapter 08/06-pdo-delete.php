<?php
$pdo = new PDO('mysql:host=localhost;dbname=php_book', 'root', '');

$query = "DELETE FROM users WHERE name=:name";
$stmt = $pdo->prepare($query);

$data = ['name' => 'John Doe'];
$stmt->execute($data);
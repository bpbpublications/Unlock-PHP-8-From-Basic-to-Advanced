<?php
$pdo = new PDO('mysql:host=localhost;dbname=php_book', 'root', '');

$name = "Jane Doe";
$email = "jane.doe@example.com";

$query = "INSERT INTO users (name, email) VALUES (:name, :email)";
$stmt = $pdo->prepare($query);

$stmt->bindValue(':name', $name);
$stmt->bindValue(':email', $email);

// This change will affect the query
$name = "John Smith";  
$email = "john.smith@example.com";  

$stmt->execute();

<?php
$pdo = new PDO('mysql:host=localhost;dbname=php_book', 'root', '');

$query = "SELECT name, email FROM users";
$stmt = $pdo->query($query);

while ($user = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "Name: {$user['name']}, Email: {$user['email']}<br>";
}
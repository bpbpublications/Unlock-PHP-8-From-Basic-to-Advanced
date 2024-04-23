<?php
$conn = new mysqli("localhost", "root", "", "php_book");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO users (name, login, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $login, $password);

$name = "Roni Sommerfeld";
$login = "roni.sommerfeld";
// Using password_hash for security
$password = password_hash("password123", PASSWORD_DEFAULT);
$stmt->execute();

$stmt->close();
$conn->close();

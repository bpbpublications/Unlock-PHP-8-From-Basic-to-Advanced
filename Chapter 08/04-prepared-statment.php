<?php
$conn = new mysqli("localhost", "root", "", "php_book");

// Step 1: Preparation
$stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");

// Step 2: Linking
$stmt->bind_param("ss", $username, $password);

$username = "roni";
$password = password_hash("securePass123", PASSWORD_DEFAULT);

// Step 3: Execution
$stmt->execute();

echo "New record inserted successfully";

$stmt->close();
$conn->close();

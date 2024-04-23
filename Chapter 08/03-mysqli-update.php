<?php
$conn = new mysqli("localhost", "root", "", "php_book");

$stmt = $conn->prepare("UPDATE users SET login = ? WHERE name = ?");
$stmt->bind_param("ss", $login, $name);

$name = "Roni Sommerfeld";
$login = "roni.sommerfeld.updated";
$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo "Record updated successfully";
} else {
    echo "No records updated";
}
$stmt->close();
$conn->close();
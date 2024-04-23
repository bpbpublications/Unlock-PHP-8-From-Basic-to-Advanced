<?php
$conn = new mysqli("localhost", "root", "", "php_book");

$stmt = $conn->prepare("DELETE FROM users WHERE name = ?");
$stmt->bind_param("s", $name);

$name = "Roni Sommerfeld";
$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo "Record deleted successfully";
} else {
    echo "No records deleted";
}
$stmt->close();
$conn->close();
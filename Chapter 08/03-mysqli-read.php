<?php
$conn = new mysqli("localhost", "root", "", "php_book");

$result = $conn->query("SELECT name, login FROM users");

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["name"] . " - Login: " . $row["login"] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

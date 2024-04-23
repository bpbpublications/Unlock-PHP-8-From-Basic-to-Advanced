<?php
$connection = new mysqli('localhost', 'username', 'password', 'database');
$declaration = $connection->prepare("INSERT INTO table (name, email) VALUES (?, ?)");
$declaration->bind_param("ss", $name, $email);

$name = $_POST['name'];
$email = $_POST['email'];
$declaration->execute();

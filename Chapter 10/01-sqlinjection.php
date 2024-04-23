<?php
$sql = "SELECT * FROM users WHERE login='" . $_POST['username'] . "' AND password='" . $_POST['password'] . "'";
$result = mysqli_query($connection, $sql);


$sql = "SELECT name, description, price FROM products WHERE id=" . $_GET['id'];
$result = mysqli_query($connection, $sql);


$stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
$stmt->bindParam(':username', $username);
$stmt->bindParam(':password', $password);
$stmt->execute();

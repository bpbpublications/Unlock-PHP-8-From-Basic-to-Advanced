<?php
$conn = new mysqli("localhost", "root", "", "php_book");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("UPDATE users SET password=? WHERE login=?");
$stmt->bind_param("ss", $password, $login);

// Suppose we have a list of logins and their
// respective passwords to update
$loginsPasswords = [
    ['roni.sommerfeld', 'newpassword1'],
    ['janesmith', 'newpassword2'],
    ['alicejohnson', 'newpassword3']
];

foreach ($loginsPasswords as $loginPassword) {
    [$login, $raw_password] = $loginPassword;
    // We use password_hash to ensure that the
    // password is stored securely
    $password = password_hash($raw_password, PASSWORD_DEFAULT);
    $stmt->execute();
}

$stmt->close();
$conn->close();

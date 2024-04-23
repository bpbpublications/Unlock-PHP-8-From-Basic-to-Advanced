<?php
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
if (!$email) {
    echo "Email is required.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email format.";
} else {
    echo "Valid email.";
}
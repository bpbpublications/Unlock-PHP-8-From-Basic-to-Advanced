<?php
$email = "example@example.com";
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email format.";
} else {
    echo "Valid email.";
}
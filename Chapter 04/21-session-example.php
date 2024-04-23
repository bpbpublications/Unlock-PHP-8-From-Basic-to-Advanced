<?php
session_start();

if ($loginWithSuccess) {
    $_SESSION['username'] = $username;
    $_SESSION['loggedin'] = true;
}

session_regenerate_id(); // Regenerate session id

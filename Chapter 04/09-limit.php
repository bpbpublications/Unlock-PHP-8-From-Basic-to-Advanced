<?php
session_start();

if (!isset($_SESSION['attempts'])) {
    $_SESSION['attempts'] = 0;
}

if ($_SESSION['attempts'] >= 5) {
    echo "You have made too many attempts. Please try again later.";
} else {
    //Process the form
    $_SESSION['attempts']++;
}
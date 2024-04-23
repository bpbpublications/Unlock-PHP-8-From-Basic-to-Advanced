<?php
session_start();

$_SESSION['name'] = 'Roni Sommerfeld';

$name = $_SESSION['name']; //Retrieve a value
$_SESSION['age'] = 25; //Set a value
unset($_SESSION['age']); //Remove a value


session_destroy();
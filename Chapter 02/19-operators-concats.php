<?php
$greeting = "Hello, ";
$name = "World!";
$completeGreeting = $greeting . $name; // This will output "Hello, World!"
echo $completeGreeting;

$greeting = "Hello, ";
$greeting .= "World!"; // This will also output "Hello, World!"
echo $greeting;

$name = "World";
echo "Hello, $name!"; // This will output "Hello, World!"
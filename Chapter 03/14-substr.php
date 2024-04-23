<?php
$greeting = "Hello, World!"; 

// cutting strings
$partial = substr($greeting, 0, 5); // "Hello"

$withoutExclamation = substr($greeting, 0, -1);  // Remove the last character
echo $withoutExclamation; //Prints "Hello, World"
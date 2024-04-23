<?php
$weather = "sunny";

//Using the ternary operator
echo $weather == "sunny" ? "Let's go to the beach!" : "Let's stay at home.";

//Assume that $weather may not be set
$weather = $weather ?? "unknown";

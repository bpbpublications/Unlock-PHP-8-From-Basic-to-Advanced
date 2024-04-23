<?php
$weather = "sunny";

//Using switch
switch($weather) {
    case "sunny":
        echo "Let's go to the beach!";
        break;
    case "rainy":
        echo "Let's stay home.";
        break;
    //if no previous condition meets
    default:
        echo "Let's see what the day brings.";
        break;
}
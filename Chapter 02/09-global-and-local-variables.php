<?php
$globalVar = "I'm global!";  // A global variable

function variableTest() {
    global $globalVar;
    $localVar = "I'm local!";  // A local variable

    echo $globalVar;
    echo $localVar;
}

variableTest();
//outputs:
//I'm global!
//I'm local!
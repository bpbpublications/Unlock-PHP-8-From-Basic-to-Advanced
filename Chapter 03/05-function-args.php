<?php
function myVariadicFunction(string ...$args): void{
    foreach ($args as $arg) {
        echo $arg . "\n";
    }
}

myVariadicFunction('Hello', 'world', '!');

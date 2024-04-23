<?php
function showMessage(string $name): string {
    return "Hello, {$name}!";
}

echo showMessage("Roni Sommerfeld"); //outputs: Hello, Roni Sommerfeld!
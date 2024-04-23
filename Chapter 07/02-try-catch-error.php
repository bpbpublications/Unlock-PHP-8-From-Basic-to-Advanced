<?php 

function calculateDivisor(float $a, float $b) : float {
    return $a / $b;
}

try {
    echo calculateDivisor(10, 0);
} catch (\DivisionByZeroError $e) {
    echo 'Error caught: ', $e->getMessage();
} finally {
    echo "\nOperation attempted.";
}
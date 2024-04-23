<?php
function calculateFactor($n) {
    if ($n <= 1) {
        return 1;
    } else {
        return $n * calculateFactor($n -1);
    }
}

//Measuring execution time without JIT
$startWithoutJIT = microtime(true);
$resultWithoutJIT = calculateFactor(30);
$endWithoutJIT = microtime(true);

//Enabling JIT
ini_set('opcache.jit', 'tracing');

//Measuring execution time with JIT
$startWithJIT = microtime(true);
$resultWithJIT = calculateFactor(30);
$endWithJIT = microtime(true);

// Function to format time in microseconds in a string with 10 decimal places
function formatTempo($tempo) {
    return number_format($tempo, 10, '.', '') . " segundos";
}

echo "Execution time with JIT: " . formatTempo($endWithJIT -$startWithJIT) . "\n";
echo "Execution time without JIT: " . formatTempo($endWithoutJIT -$startWithoutJIT) . "\n";

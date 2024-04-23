<?php
function calculateDivisor(float $a, float $b) : float{
    if ($b == 0) {
        throw new Exception('The divisor cannot be zero.');
    }
    return $a / $b;
}


try {
    calculateDivisor(10, 0);
} catch (\Exception $e) {
    echo 'Exception caught: ', $e->getMessage();
}

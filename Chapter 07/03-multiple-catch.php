<?php

function calculateDivisor(float $a, float $b) : float {
    if ($b == 0) {
        throw new DivisionByZeroError('The divisor cannot be zero.');
    }
    
    if ($a < 0 || $b < 0) {
        throw new InvalidArgumentException('Negative numbers are not allowed.');
    }
    
    return $a / $b;
}

try {
    echo calculateDivisor(-10, 2);
} catch (DivisionByZeroError $e) {
    echo 'Division error: ', $e->getMessage();
} catch (InvalidArgumentException $e) {
    echo 'Input error: ', $e->getMessage();
} finally {
    echo "\nOperation attempted.";
}


/////AFTER 7.1 SAME CATCH

try {
    echo calculateDivisor(-10, 2);
} catch (DivisionByZeroError | InvalidArgumentException $e) {
    echo 'Error: ', $e->getMessage();
} finally {
    echo "\nOperation attempted.";
}

try {
    throw new Exception("Error Processing Request", 1);

} catch (\Throwable $th) {
    //throw $th;
}
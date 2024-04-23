<?php
// [...]
try {    
    echo calculateDivisor(10, 0);
} catch (\Throwable $t) {
    echo 'Error or Exception caught: ', $t->getMessage();
}

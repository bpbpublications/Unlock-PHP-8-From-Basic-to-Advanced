<?php
declare(strict_types=1);

function add(int $a, int $b) : int {
    return $a + $b;
}

echo add("1", "2");  // Error! Strings cannot be converted to integers automatically in strict mode
<?php
function getSquare(?int $number): ?int {
    if ($number === null) {
        return null;
    } else {
        return $number ** 2;
    }
}

echo getSquare(4);    // 16
echo getSquare(null); // nothing is printed

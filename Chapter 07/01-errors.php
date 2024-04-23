<?php

function customErrorHandler(int $errno, string $errstr): void {
    echo "Error found: [$errno] $errstr";
}

set_error_handler(fn(int $errno, string $errstr) => customErrorHandler($errno, $errstr));

echo $undefinedVar;  // Now this will use our custom error handler

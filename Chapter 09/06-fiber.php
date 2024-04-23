<?php
$fiber = new Fiber(function (): void {
    echo "Running inside Fiber\n";
});

$fiber->start(); // Start fiber

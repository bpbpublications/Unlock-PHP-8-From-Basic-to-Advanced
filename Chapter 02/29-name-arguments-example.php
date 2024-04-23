<?php
function makeCoffee(string $type = "cappuccino", int $sugar = 0, bool $milk = true) {
    //TODO:
}

/** before PHP 8 */
makeCoffee("cappuccino", 0, false);

/** with PHP 8 */
makeCoffee(milk: false);
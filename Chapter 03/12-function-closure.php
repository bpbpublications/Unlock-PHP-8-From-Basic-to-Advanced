<?php
function counter(): Closure  {
    $count = 0;
    return function() use (&$count) {
        return ++$count;
    };
}

$counter = counter();

echo $counter();  // output 1
echo $counter();  // output 2

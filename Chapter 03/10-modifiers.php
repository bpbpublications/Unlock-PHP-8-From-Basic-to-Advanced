<?php
function foo(mixed $bar) : mixed {
// ...
}

function combine(int|string $val1, int|string $val2) : int|string {
    return $val1 . $val2;
}

echo combine('Hello, ', 'world!');  // output 'Hello, world!'
echo combine(1, 2);  // output '12'

<?php
function addOne(int $num): int
{
    $num = $num + 1;
    return $num;
}

$originalNum = 5;
$newNum = addOne($originalNum);
echo $originalNum; // output: 5
echo $newNum; // output: 6

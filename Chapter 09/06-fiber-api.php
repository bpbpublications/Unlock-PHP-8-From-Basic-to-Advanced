<?php
use Fiber;

$serviceA = new Fiber(function(): array {
    // Simulating a long-running API call
    sleep(2);
    return ["data" => "Service A data"];
});

$serviceB = new Fiber(function(): array {
    //Another time-consuming API call
    sleep(3);
    return ["data" => "Service B data"];
});

//Start both service calls
$serviceA->start();
$serviceB->start();

//Collect and process results as they arrive
$responseA = $serviceA->resume();
$responseB = $serviceB->resume();

header('Content-Type: application/json');
echo json_encode([
    'serviceA' => $responseA,
    'serviceB' => $responseB
]);

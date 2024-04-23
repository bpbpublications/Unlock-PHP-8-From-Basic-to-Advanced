<?php
use Fiber;

$productID = $_GET['product_id'];

// Function to search for product details
$productService = new Fiber(function($id): array {
    //Simulating an API call to fetch product details
    sleep(1);
    return ["name" => "Product $id", "description" => "Product $id description"];
});

//Function to search for recommendations
$recommendationService = new Fiber(function($id): array {
    //Simulating an API call to fetch related products
    sleep(2);
    return ["related_products" => ["Product $id + 1", "Product $id + 2"]];
});

//Function to search for reviews
$reviewService = new Fiber(function($id): array {
    //Simulating an API call to fetch product reviews
    sleep(1.5);
    return ["reviews" => ["Great product!", "Arrived on time!"]];
});

//Start all calls simultaneously
$productDetails = $productService->start($productID);
$relatedProducts = $recommendationService->start($productID);
$productReviews = $reviewService->start($productID);

//Add the results
$response = [
    'product' => $productDetails,
    'recommendations' => $relatedProducts,
    'reviews' => $productReviews
];

header('Content-Type: application/json');
echo json_encode($response);

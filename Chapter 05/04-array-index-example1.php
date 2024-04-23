<?php
// Create an indexed array of bestselling book titles
$bestSellers = [
    "PHP 8 Cookbook",
    "The shadow of the wind",
    "The Da Vinci Code",
    "Harry Potter and the Philosopher's Stone",
    "Blame it on the stars"
];

// Prints the first bestselling book
echo "The best selling book is: " . $bestSellers[0] . "\n";

// Adds a new book to the end of the list
$bestSellers[] = "1984";

// Prints the updated list of best sellers
for ($i = 0; $i < count($bestSellers); $i++) {
    $position = $i + 1;
    echo "{$position}º: {$bestSellers[$i]} \n";
}

foreach ($bestSellers as $index => $book) {
    $position = $index + 1;
    echo "{$position}º: {$book} \n";
}
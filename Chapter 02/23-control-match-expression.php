<?php
$weather = "sunny";

echo match ($weather) {
    "sunny" => "Let's go to the beach!",
    "rainy" => "Let's stay home.",
    default => "Let's see what the day brings.",
};

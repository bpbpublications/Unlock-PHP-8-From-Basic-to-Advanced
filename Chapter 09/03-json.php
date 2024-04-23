<?php

$data = [
    "tasks" => [
        ["id" => 1, "title" => "Learn PHP"],
        ["id" => 2, "title" => "Write a code"]
    ]
];

$json_output = json_encode($data);
echo $json_output;


$json_input = '{"tasks":[{"id":1,"title":"Learn PHP"},{"id":2,"title":"Write a code"}]}';

$data_array = json_decode($json_input, true);
// Outputs: Learn PHP
echo $data_array['tasks'][0]['title'];


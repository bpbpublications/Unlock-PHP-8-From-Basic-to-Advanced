<?php
// array associative
$contact = [
    'name' => 'Roni', 
    'email' => 'roni@phpiando.com.br', 
    'phone' => '123-456-7890'
];

//added new index
$contact['age'] = 34;

//modifier
$contact['phone'] = '999-999-999';

print_r($contact);
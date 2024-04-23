<?php
$data = array(
    'email' => $_POST['email'],
    'age' => $_POST['age']
);
$filters = array(
    'email' => FILTER_SANITIZE_EMAIL,
    'age' => FILTER_SANITIZE_NUMBER_INT
);

$cleaned_data = filter_var_array($data, $filters);
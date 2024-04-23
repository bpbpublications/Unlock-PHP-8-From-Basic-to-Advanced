<?php
setcookie("name", "Roni", [
    'expires' => time() + 3600,
    'path' => '/',
    'domain' => 'mydomain.com',
    'secure' => true,
    'httponly' => true,
    'samesite' => 'Strict'
]);

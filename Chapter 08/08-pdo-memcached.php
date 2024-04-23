<?php
$memcached = new Memcached();
$memcached->addServer('localhost', 11211);

$pdo = new PDO('mysql:host=localhost;dbname=php_book', 'root', '');

$key = md5("SELECT name, email FROM users");
$data = $memcached->get($key);

if (!$data) {
    $stmt = $pdo->query("SELECT name, email FROM users");
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // Store Cache for 1 hour
    $memcached->set($key, $data, 3600);
}

foreach ($data as $user) {
    echo "Name: {$user['name']}, Email: {$user['email']}<br>";
}

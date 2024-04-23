<?php 
// MySQL
$pdo = new PDO('mysql:host=localhost;dbname=php_book', $user, $pass);

// PostgreSQL
$pdo = new PDO('pgsql:host=localhost;dbname=php_book', $user, $pass);

// SQLite
$pdo = new PDO('sqlite:/path/to/database/file');

// Other databases...

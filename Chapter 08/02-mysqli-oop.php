<?php 
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'php_book';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed:" . $conn->connect_error);
}

// other operations...
$result = $conn->query("SELECT * FROM users");

while ($row = $result->fetch_assoc()) {
    echo $row["column_name"];
}

$count = $result->num_rows;
echo "Number of lines: $count";

if (!$result) {
    die("Query error: " . $conn->error);
}

$name = $conn->real_escape_string($_POST['name']);



$conn->close();
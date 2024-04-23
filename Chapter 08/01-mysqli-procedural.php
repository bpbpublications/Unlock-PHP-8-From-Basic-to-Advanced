<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'php_book';

$conn = mysqli_connect($host, $user, $password, $dbname);


if (!$conn) {
    die("Connection failed:" . mysqli_connect_error());
}

// Carry out operations at the database...
$result = mysqli_query($conn, "SELECT * FROM users");

while($row = mysqli_fetch_assoc($result)) {
    // Here "column_name" should be replaced by
    //actual name of the column you want to access.
    echo $row["column_name"];
}

$count = mysqli_num_rows($result);
echo "Number of lines: $count";

if (!$result) {
    die("Query error: " . mysqli_error($conn));
}


mysqli_close($conn);

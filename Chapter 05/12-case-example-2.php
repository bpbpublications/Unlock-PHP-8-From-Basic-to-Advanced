<?php

$stmt = $pdo->query('SELECT title, author, year of publication FROM books');
while ($row = $stmt->fetch()) {
    echo $row['title'] . ', ' . $row['author'] . ', ' . $row['yearPublication'] . "\n";
}

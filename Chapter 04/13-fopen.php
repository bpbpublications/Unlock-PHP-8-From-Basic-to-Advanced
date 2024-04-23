<?php
$file = fopen("file.txt", "r");
if ($file) {
    echo "File opened successfully";
} else {
    echo "Failed to open the file";
}

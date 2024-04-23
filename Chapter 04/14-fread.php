<?php
$file = fopen("file.txt", "r");
if ($file) {
    $content = fread($file, filesize("file.txt"));
    echo "File content: " . $content;
} else {
    echo "Failed to open the file";
}
<?php
$file = fopen("file.txt", "w");
if ($file) {
    fwrite($file, "Some content");
    echo "Content successfully written to file";
} else {
    echo "Failed to open the file";
}
<?php
$file = fopen("file.txt", "r");
if ($file) {
    //Do something with the file here...
    fclose($file);
    echo "Successfully closed file";
} else {
    echo "Failed to open the file";
}

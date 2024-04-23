<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   //Check if the file was uploaded
    if (isset($_FILES['fileToUpload']) && $_FILES['fileToUpload']['error'] == 0) {
        $uploadedFile = $_FILES['fileToUpload'];
        echo 'Original file name: ' . $uploadedFile['name'] . '<br>';
        echo 'File type: ' . $uploadedFile['type'] . '<br>';
        echo 'File size: ' . $uploadedFile['size'] . '<br>';
        echo 'Temporary file name on server: ' . $uploadedFile['tmp_name'] . '<br>';
    } else {
        echo 'No file was uploaded or an error occurred during upload.<br>';
    }
}
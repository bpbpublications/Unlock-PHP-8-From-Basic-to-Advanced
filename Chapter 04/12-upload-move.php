<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['fileToUpload']) && $_FILES['fileToUpload']['error'] == 0) {
        $uploadedFile = $_FILES['fileToUpload'];
        $destinationPath = '/path/to/your/directory_server/' . $uploadedFile['name'];

        // Move the file to the destination location
        if (move_uploaded_file($uploadedFile['tmp_name'], $destinationPath)) {
            echo 'File successfully moved to ' . $destinationPath;
        } else {
            echo 'Failed to move the file';
        }
    } else {
        echo 'No files were uploaded or an error occurred during upload.';
    }
}
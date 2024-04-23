<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    exit; //terminate execution if not POST
}

$file = $_FILES['fileToUpload'];
$fileType = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
if ($file['size'] > 500000) { // 500KB maximum file size
    echo "Sorry, your file is too large.";
    exit;
}

if ($fileType != "jpg" && $fileType != "png" && $fileType != "jpeg") {
    echo "Sorry, only JPG, JPEG, & PNG files are allowed.";
    exit;
}

$resultMove = move_uploaded_file($file['tmp_name'], 'uploads/' . $file['name']);

if (!$resultMove) {
    echo "Sorry, there was an error uploading your file.";
    exit;
}

//if resultMove success
echo "The file has been uploaded.";

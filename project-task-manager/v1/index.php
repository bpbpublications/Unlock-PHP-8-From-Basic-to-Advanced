<?php
include_once 'config_global.php';

if(!isset($_SESSION['userLogged'])){
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= TITLE ?></title>
</head>
<body>
    <h1>Connected</h1>
    <!-- contents -->
</body>
</html>

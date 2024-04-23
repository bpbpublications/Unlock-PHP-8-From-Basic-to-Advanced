<?php
include_once 'process_login.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= TITLE ?></title>
</head>
<body>
    <h1>Login</h1>

    <form action="login.php" method="POST">
        <input type="text" name="user" placeholder="User" required>
        <input type="password" name="pass" placeholder="*******" required>
        <button type="submit" name="login">login</button>
    </form>

    <?php if (!empty($error)): ?>
        <h2>Errors:</h2>
        <p><?= $error ?></p>
    <?php endif; ?>
</body>
</html>

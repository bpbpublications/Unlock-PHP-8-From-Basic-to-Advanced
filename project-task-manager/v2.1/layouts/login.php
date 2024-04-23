<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Login' ?></title>
</head>
<body>
    <h1>Login</h1>

    <form action="/login/submit" method="POST">
        <input type="text" name="user" placeholder="User" required>
        <input type="password" name="pass" placeholder="*******" required>
        <button type="submit" name="login">login</button>
    </form>

    <?php if (!empty($_GET['error'])): ?>
        <h2>Errors:</h2>
        <p><?= $_GET['error'] ?></p>
    <?php endif; ?>
</body>
</html>

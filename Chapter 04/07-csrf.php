<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Verify the CSRF token
    if (!hash_equals($_SESSION['token'], $_POST['token'])) {
        die('Invalid CSRF token');
    }
}

if (empty($_SESSION['token'])) {
    //Generate a new CSRF token
    $_SESSION['token'] = bin2hex(random_bytes(32));
}

$token = $_SESSION['token'];
?>


<form method="post" action="process.php">
    <input type="hidden" name="token" value="<?php echo $token; ?>">
    <!-- rest of your form -->
    <input type="submit" value="Submit">
</form>

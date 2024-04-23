<?php
// Generating the token and storing it in a cookie and in the form
$token = bin2hex(random_bytes(32));
setcookie("csrf_token", $token);
?>

<form action="process.php" method="post">
    <!-- other form fields -->
    <input type="hidden" name="csrf_token" value="<?php echo $token; ?>">
    <input type="submit" value="Send">
</form>

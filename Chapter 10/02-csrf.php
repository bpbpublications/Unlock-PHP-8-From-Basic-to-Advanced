<!-- HTML form with a name field and a hidden field for the CSRF token -->
<form action="process.php" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    
    <!--Hidden field for CSRF token -->
    <input type="hidden" name="token_csrf" value="<?php echo generateTokenCSRF(); ?>">
    
    <button type="submit">Submit</button>
</form>

<?php
session_start();

// Function to generate a CSRF token (may vary depending on implementation)
function generateTokenCSRF() {
    return bin2hex(random_bytes(32));
}

//Check if the CSRF token in the request matches the one stored in the session
if ($_POST['token_csrf'] === $_SESSION['token_csrf']) {
    //CSRF token is valid, continue with form processing
    $name = $_POST['name'];
    //...process the form...
} else {
//CSRF token does not match, request is rejected
    echo "CSRF Error: The request is not valid.";
}
?>

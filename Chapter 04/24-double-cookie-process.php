<?php
if (hash_equals($_POST['csrf_token'], $_COOKIE['csrf_token'])) {
    // Process form data
} else {
    //Possible CSRF attack detected!
}

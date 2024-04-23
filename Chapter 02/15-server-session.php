    <?php
    //Start the session
    session_start();

    //Define session variables
    $_SESSION["username"] = "RoniSommerfeld";
    $_SESSION["email"] = "roni@4tech.mobi";

    //Access session variables
    echo "Welcome " . $_SESSION["username"] . ". Your email is " . $_SESSION["email"] . ".";


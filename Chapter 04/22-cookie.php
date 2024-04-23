<?php
setcookie("name", "Roni", time() + 3600, "/");

$name = $_COOKIE["name"];

setcookie("name", "Roni", time() + 3600, "/", ".example.com", true, true);


if(isset($_COOKIE["name"])) {
    $name = $_COOKIE["name"];
} else {
    echo "Cookie 'name' is not set.";
}
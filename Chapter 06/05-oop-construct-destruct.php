<?php

class Person {
    public function __construct() {
        echo "Person object created.";
    }

    public function __destruct() {
        echo "Person object destroyed.";
    }
}

$person = new Person(); //Output: "Person object created."
unset($person); //Output: "Person object destroyed."
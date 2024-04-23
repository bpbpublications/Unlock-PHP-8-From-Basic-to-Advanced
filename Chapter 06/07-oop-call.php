<?php
class Person {
    private function talk() {
        echo "Hi!";
    }

    public function __call(string $nameMethod, mixed $arguments) {
        echo "You tried calling the '$nameMethod' method with the following arguments: ";
        print_r($arguments);
    }
}

$person = new Person();
$person->talk("Hi"); //Output: "You tried calling the 'talk' method with the following arguments: Array ( [0] => Hi )"
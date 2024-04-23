<?php

class Person{
    public string $name;
    public int $age;

    public function greeting() {
        return "Hello, my name is {$this->name} and I'm {$this->age} years old.";
    }
}


$person = new Person();
$person->name = "Roni";
$person->age = 34;
echo $person->greeting(); //Output: "Hello, my name is Roni and I'm 34 years old."
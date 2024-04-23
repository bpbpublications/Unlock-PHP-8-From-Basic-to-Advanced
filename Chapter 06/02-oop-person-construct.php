<?php

class Person{
    public string $name;
    public int $age;

    public function __construct(string $name, int $age){
        $this->name = $name;
        $this->age = $age;
    }

    public function greeting() {
        return "Hello, my name is {$this->name} and I'm {$this->age} years old.";
    }
}


$person = new Person('Roni', 34);
echo $person->greeting();
//Output: "Hello, my name is Roni and I'm 34 years old."
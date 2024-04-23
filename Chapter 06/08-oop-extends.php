<?php
class Animal {
    public function makeNoise() {
        echo "Making some noise...";
    }
}

class Dog extends Animal {
    public function makeNoise() {
        echo "Barking!";
    }
}

class Cat extends Animal {
    public function makeNoise() {
        echo "Meowing!";
    }
}

$dog = new Dog();
$dog->makeNoise(); //Output: "Barking!"

$cat = new Cat();
$cat->makeNoise(); //Output: "Meowing!"
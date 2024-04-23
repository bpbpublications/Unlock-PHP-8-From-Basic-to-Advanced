<?php
class Animal {
    public function makeNoise() {
        echo "Making some noise...\n";
    }
}

class Dog extends Animal {
    public function makeNoise() {
        parent::makeNoise();
        echo "Barking!";
    }
}

class Cat extends Animal {
    public function makeNoise() {
        parent::makeNoise();
        echo "Meowing!";
    }
}

$dog = new Dog();
$dog->makeNoise(); //Output: "Making some noise... Barking!"

$cat = new Cat();
$cat->makeNoise(); //Output: "Making some noise... Meowing!"
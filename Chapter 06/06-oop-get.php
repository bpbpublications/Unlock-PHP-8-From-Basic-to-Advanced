<?php
class Person {
    private int $age = 30;

    public function __get(string $propertyName) {
        return $this->{$propertyName};
    }

    public function __set(string $propertyName, mixed $value) {
        return $this->{$propertyName} = $value;
    }
}

$person = new Person();
$person->age = 45;
echo $person->age; //Output: 45
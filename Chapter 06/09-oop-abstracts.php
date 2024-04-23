<?php
abstract class Shape {
    abstract public function calculateArea(): float;
}

class Square extends Shape {
    private float $sideLength;

    public function __construct(float $sideLength) {
        $this->sideLength = $sideLength;
    }

    public function calculateArea(): float {
        return $this->sideLength * $this->sideLength;
    }
}

class Circle extends Shape {
    private float $radius;

    public function __construct(float $radius) {
        $this->radius = $radius;
    }

    public function calculateArea(): float {
        return M_PI * $this->radius * $this->radius;
    }
}

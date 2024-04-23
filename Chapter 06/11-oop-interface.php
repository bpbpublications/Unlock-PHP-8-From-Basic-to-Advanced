<?php 
interface Displayable {
    public function display(): string;
}

class Product implements Displayable {
   public function __construct(private string $name){}

    public function display(): string {
        return "Product Name: " . $this->name;
    }
}

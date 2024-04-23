<?php
trait Logger {
    public function log(string $message) : void{
        echo "Logging: $message";
    }
}

class ProductService {
    use Logger;

    public function createProduct(string $name) : void {
        // Code to create a product
        $this->log("Product created: $name");
    }
}

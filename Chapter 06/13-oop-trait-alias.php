<?php
trait TraitA {
    public function hello() : void {
        echo "Hello from TraitA";
    }
}

trait TraitB {
    public function hello() : void{
        echo "Hello from TraitB";
    }
}

class MyClass {
    use TraitA, TraitB {
        TraitA::hello as sayHelloFromA; // Alias ​​for TraitA method
        TraitB::hello as sayHelloFromB; // Alias ​​for TraitB method
    }
}

<?php
trait TraitA {
    public function hello() : void{
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
        TraitA::hello insteadof TraitB; //Priority for TraitA
    }
}

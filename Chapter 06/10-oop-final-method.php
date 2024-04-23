<?php
class BaseClass {
    final public function finalMethod() {
        //Final method content
    }
}

class SubClass extends BaseClass {
    //Trying to override a final method will generate an error
    public function finalMethod() {}
}
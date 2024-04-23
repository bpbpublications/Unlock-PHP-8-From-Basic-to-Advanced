<?php
// Custom autoload function
function my_autoload(mixed $class) : void {
    //Transform the class name into the file path
    $path = str_replace('\\', '/', $class) . '.php';
    
    //Check if the file exists and include it
    if (file_exists($path)) {
        include_once($path);
    }
}

//Register the autoload function
spl_autoload_register('my_autoload');

//Now you can create an instance of the MyClass class without the need to manually include the file
$obj = new MyClass();
$obj->greeting();

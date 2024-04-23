<?php use MyProject\MyClass;

$obj = new MyClass;

////using alias
use NamespaceA\MyClass as ClassA;
use NamespaceB\MyClass as ClassB;

$objA = new ClassA();
$objB = new ClassB();

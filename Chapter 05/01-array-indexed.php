<?php
//array empty
$being = array();

//or
$being = [];

//array function
$being = array("Harry Potter", "Lord of the Rings", "Matrix", "PHP 8 Cookbook");

//or
$being = ["Harry Potter", "Lord of the Rings", "Matrix", "PHP 8 Cookbook"];

/** initialize and push values */
$being = array();
array_push($being, "PHP 8 Cookbook", "Harry Potter");
$countItens = array_push($being, "Lord of the Rings", "Matrix");

echo $countItens; //output: 4 items

/** short push values */
$being = [];
$being[] = "PHP 8 Cookbook";
$being[] = "Harry Potter";
$being[] = "Lord of the Rings";
$being[] = "Matrix";
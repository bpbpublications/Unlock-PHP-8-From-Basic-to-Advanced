<?php

$xml_string = '<tasks><task><id>1</id><title>Learn PHP</title></task></tasks>';
$xml_object = simplexml_load_string($xml_string);

// Outputs: Learn PHP
echo $xml_object->task[0]->title;  

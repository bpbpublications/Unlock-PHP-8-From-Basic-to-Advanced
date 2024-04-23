<?php
$string = "こんにちは PHP";  // 'Hello PHP' in Japanese
echo mb_substr($string, 0, 5, 'UTF-8'); //returns 'こんにちは' which is 'Hello'


$string = "I ♥ PHP";
echo mb_strtoupper($string, 'UTF-8');  // Returns 'I ♥ PHP'
echo mb_strtolower($string, 'UTF-8');  // Returns 'i ♥ php'

$string = "I ♥ PHP";
echo mb_strpos($string, '♥', 0, 'UTF-8');  // output 2

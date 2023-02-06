<?php
echo "Hello world";

$a = 10;
$b = 20;
$c = $a + $b;
echo "\n";
echo $c;

/*echo  "a";
echo  "a";
echo  "a";*/
//echo  "a";
//echo  "a";
echo "\n";
echo "a";
echo "a";
echo "\n";

$name = 'desh';
echo "Bangla".$name;
echo "\n";
echo "Bangla $name";
echo "\n";
//constant to print constant value
define('PI',3.1416);
echo "Value of PI = ".PI;

echo "\n";
echo constant('PI');

$constant = 'constant';
echo "\n";
echo "value of PI = {$constant('PI')}";

echo "\n";
//var_dump
$name = "Biporshi Chakma";
var_dump($name);
echo "\n";

$id = 80;
var_dump($id);
echo "\n";

$boll = false;
var_dump($boll);
echo "\n";

$id1 = 8.44;
var_dump($id1);




?>
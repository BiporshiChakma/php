<?php

$l=11;

//$result = ($l%2==0) ? "A" : ($l == 11) ? "B" : "C";
$result = ($l%2==0) ? "A" : (($l == 11) ? "B" : "C");

printf("Hello World");
echo "\n";
echo "Hello";
echo "\n";
echo $result;


//mcq questions
for($x =0; $x<=2; print ++$x)
{
    print ++$x;
}
var_dump(123);
var_dump(0123);
$x = 5;
echo $x;
echo "<br />";
echo $x+++$x++;
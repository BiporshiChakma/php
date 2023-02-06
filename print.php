<?php
$name = "Earth";
//frist way
echo '01 We \'re living on the ' . $name;
echo "\n";

//second way
echo "02 We 're living on the {$name}";

//uppercase 
echo "\n";
$uname = strtoupper($name);
echo "03 We 're living on the {$uname}";

//printf 
printf("\n04 We 're living on the %s", $uname);

//as like as C

echo "\nMy
name 
is 
{$name}";

$name1 = "Shachin";
$name2 = "PHP";

echo "\nMy name is " . $name1 . " chakma " . $name2;
echo "\nMy name is {$name1} chakma {$name2}";
printf("\nMy name is %s chakma %s", $name1, $name2);

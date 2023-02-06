<?php
/* even odd
$n = 12;
if($n % 2 == 0)
{
    printf("%d is even number", $n);
}
else
{
    printf("%d is a odd number",$n);
}
*/

/* num vs num1
$num = 100;
$num1 = 200;

if ($num >= $num1)
{
    echo "num has same or more from num1";
}
elseif($num>$num1)
{
    echo "num has more than num1";
}
elseif($num<$num1)
{
    echo "num has less than num1";
}
else if($num == $num1)
{
    echo "num and num1 are same";
}
*/

/* check the weather teenager or not
$age = 13;
if($age >=13 && $age <= 19)
{
    echo "This persion is a teenager";
}
else
{
    echo "This peersion is not a teenager";
}
*/
/*
$food = "apple";

if("tuna" == $food || "salmon" == $food)
{
    echo "It has vitamin D";
}
else if("apple"==$food)
{
    echo "Apple doesn't contain vitamin D";
}
else 
{
    echo "We donot know if {$food} contian vitamin D";
}*/


/*
$food = "mango";
if("apple" == $food || "mango" == $food || "rice" == $food)
{
    echo "The food id {$food}";
}
else{
    echo "The food is not match";
}
*/

/*
//leap year
$year = 2018;
if($year % 4 == 0 && $year % 100 == 0 &&  $year % 400 ==  0)
{
    echo "{$year} is a leap year";
}
else
{
    echo "{$year} is not a leap year";
}

*/

//NESTED LOOP 

$condition1 = true;
$condition2 = true;
$condition3 = true;

if($condition1 && $condition2 && $condition3)
{
    echo "Hello";
}
elseif($condition1 && $condition2)
{
    echo "Hello 2";
}
else if($condition1 && $condition3)
{
    echo "Hello 3";
}
else
{
    echo "condition not match";
}


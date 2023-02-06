<?php
/*
$n = "apple";
$food = ("apple" == $n) ? "apple" : "other";
echo $food;
*/

/*
$num = 10;

$adult = (18 <= $num) ? "This persion is adult" : "This persion is not adult";
echo $adult;
*/

$num = 10;

$num1 = ($num % 2 == 0) ? "{$num} is even" : "{$num} is odd";
echo $num1;{}
?>



<?php
//live test
$mark = 1;

if($mark < 33)
{
echo "failed";
}
else if($mark >=33 && $mark<=44)
{
echo "Third Division";
}
else if($mark >=45 && $mark<=59)
{
echo "Second Division";
}
else if($mark > 60)
{
echo "First Dividsion";
}
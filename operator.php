<?php
$num = 12;

$add = $num + 12;
printf("12 + 12 = ");
echo $add;

$sub = $num - 10;
printf("\n12 - 10 = ");
echo $sub;

$num++;
printf("\nnum++= ");
echo $num;

$num--;
printf("\nnum--= ");
echo $num;

$x = $y = 10;
echo "\nx=",$x,"\ny=",$y;

//Diffrent betwin n++ and ++n
echo "\n";
$n = 7;
$m = $n++;
echo "\n", $m, "\n", $n;

/*
$m = $n++;
$m = $n;
$n = $n + 1;
*/
echo "\n";
$n = 7;
$m = ++$n;
echo "\n", $m, "\n", $n;
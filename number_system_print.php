<?php
$n = 123;
$o = 012;
$h = 0x1B;

printf("The number is %d and %d and %d",$n,$o,$h);

echo "\n";
printf("The binary equivalent of %d is %b\n",12,1212);
printf("The hexadecimal equivalent of %d is %X\n",12,12);
printf("The octal eqivalent of %d is %o\n",12,12);

printf("Octal %o = %d",12,12);

//print
$n = "sha";
$n1 = "chin";
echo "\n";
printf('%2$s %1$s',$n,$n1); 
//vs
echo "\n";
printf('%s %s',$n,$n1); 

echo "\n";

printf('The binary eqivalent of %1$d is %1$b',12);
echo "\n";

$n = 45.514753;

printf("%.2f",$n);
echo "\n";
printf("%08.2f",$n);

//sprintf

$name1 = "sha";
$name2 = "chin";
echo "\n";
$output = sprintf("using sprintf = %s %s",$name1,$name2);
echo $output;

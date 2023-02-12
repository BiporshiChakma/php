<?php
//1. Write a Reusable  PHP Function that can check Even & Odd Number And Return Decision
echo "(01) Write a Reusable PHP Function that can check Even & Odd Number And Return Decision\n\nOutput:";

function evenOdd($n){
    echo "The number is {$n}.And number";
    if($n%2==0){
        return 'even';
        //return true;
    }
    else{
        return 'odd';
        //retunr false;
    }

}
$x=10;
if((evenOdd($x)=='even')){
    echo " {$x} is a even number.\n";
}
else{
    echo " {$x} is a odd number.\n";
} 
//This code check 1 to 100 range even or odd number 
/*
for($x=1; $x<=100; $x++)
{
   if((evenOdd($x)==true)){
    echo "{$x} is a even number.\n";
}
else{
    echo "{$x} is a odd number.\n";
} 
}*/
?>


<?php
//1+2+3...…….100  Write a loop to calculate the summation of the series
echo "(02) 1+2+3...…….100  Write a loop to calculate the summation of the series\n\nOutput: \n";
$sum = 0;
for($i=1; $i<=100; $i++){
    $sum += $i;
    echo "{$i} ";
    if($i==100){//to avoid last + operator
        continue;
    }
    echo " + ";
   
}
echo "= {$sum}";
echo "\n\nThe sum of 1+2+3....100 = {$sum}";
?>
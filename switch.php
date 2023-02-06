<?php
/*
$n=11;
$r= $n%2;

switch ($r)
{
    case 0:
        echo "{$n} is even number";
        break;
    
    case 1:
        echo "{$n} is odd number";
        break;
}
*/


/* Result
$n=40;
$g = $n/10;

switch ($g)
{
    case 0: case 1: case 2: case 3: 
        echo "Faild";
        break;
    case 4:
        echo "Passed";
        break;
    case 5:
        echo "C";
        break;
    case 6:
        echo "B";
        break;
    case 7:
        echo "A-";
        break;
    case 8: case 9: case 10:
        echo "A+";
        break;
}
*/
$num = -99;
$check = abs($num) % 2;

/*
switch($check)
{
    case 0:
        switch($num)
        {
          case $num>0:
            echo "$num is a positive even number";
            break;

           case $num<0:
            echo "$num is a positive even number";
            break;
        }

    default :
    switch($num)
    {
      case $num>0:
        echo "$num is a negative odd number";
        break;

       case $num<0:
        echo "$num is a negative odd number";
        break;
    }

}
*/

switch(true)
{
    case($check == 0 && $num>0):
    { 
        echo "$num is a positive even number";
        break;
    }
    case($check == 1 && $num>0):
    { 
        echo "$num is a positive odd number";
        break;
    }
    case($check == 0 && $num<0):
        {
            echo "$num is a negative even number";
            break;
        }
    case($check == 1 && $num<0):
        //   case($check == 1 && $num<0): when donot use abs function
    {
        echo "$num is a negative odd number";
        break;
    }
}

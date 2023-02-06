<?php
$n=17;
if($n%2==0):
    echo "Even Number";
    echo PHP_EOL;
else:
    echo "Odd Number";
    echo PHP_EOL;
    echo "some text";
endif;
echo PHP_EOL;
?>
<?php
switch ($n%2==0):
    case 0:
        echo "Even Number";
        break;

    default :
    echo "Odd Number";
    endswitch;
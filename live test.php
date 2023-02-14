<?php

function sum($x,int...$n){
    for($i=0; $i<=6; $i++){
        for($l=1; $l<=6; $l++){
            //echo "{$n[$l]} ";
            if($n[$i]+$n[$l] == $x){
                if($n[$i]>=$n[$l]){
                if($n[$i]==$n[$l]){
                continue;
                }
                echo "true {$n[$i]} + {$n[$l]} = {$x}\n";
                }
            }
            else{
                //echo "false\n";
            }
        }
    }
}
sum(8,5,7,1,2,8,4,3);  
/*

$nums = [5,7,1,2,8,4,3];
$target = 8;
function twoSum( $nums, $target ) {
    for ( $i = 0; $i < count( $nums ); $i++ ) {
        for ( $j = $i + 1; $j < count( $nums ); $j++ ) {
            if ( $nums[$i] + $nums[$j] == $target ) {
                return [$i, $j];
            }
        }
    }
}
print_r( twoSum( $nums, $target ) );*/
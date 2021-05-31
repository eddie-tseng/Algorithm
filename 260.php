<?php


/**
 * @param Integer[] $nums
 * @return Integer[]
 */
function singleNumber($nums) {
    // Pass 1 :
    // Get the XOR of the two numbers we need to find
    $diff = 0;
    foreach ($nums as $num) {
        $diff ^= $num;
    }
//    echo $diff."\n";
//    // Get its last set bit
    $diff &= -$diff;
    echo $diff."\n";

    // Pass 2 :
    $rets = [0, 0]; // this array stores the two numbers we will return
    foreach ($nums as $num) {
        if (($num & $diff) == 0) {// the bit is not set
            echo $num."--0"."\n";
            $rets[0] ^= $num;
        } else {// the bit is set
            echo $num."--1"."\n";
            $rets[1] ^= $num;
        }
    }

    return $rets;
}
//$a = 110;
//$a &= -$a;
//echo $a;
print_r(singleNumber([3,7]));

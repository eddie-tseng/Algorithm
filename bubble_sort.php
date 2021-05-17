<?php

function bubble_sort($arr)
{
    for($i = 0; $i < count($arr)-1; $i++){
        for($j = 0; $j < count($arr)-1-$i; $j++){
            if($arr[$j]>$arr[$j+1]){
                $tmp = $arr[$j+1];
                $arr[$j+1] = $arr[$j];
                $arr[$j] = $tmp;
            }
        }
    }

    return $arr;
}

$arr = [1,3,4,2,7,5];

print_r(bubble_sort($arr));



<?php

//O(nlogn), 額外空間 O(n), call stack 平均情況 O(log n)
function quick_sort($arr)
{
    $small_arr = [];
    $large_arr = [];
    $pivot_arr = [];

    if(count($arr) <= 1)
    {
        return $arr;
    }

    $i = 0;
    while ($i < count($arr) -1)
    {
        if($arr[$i] < $arr[count($arr)-1]){
            array_push($small_arr, $arr[$i] );
        }
        else {
            array_push($large_arr, $arr[$i] );
        }

        $i++;
    }
    array_push($pivot_arr, $arr[count($arr)-1] );

    return array_merge(quick_sort($small_arr), $pivot_arr, quick_sort($large_arr));
}

$arr = [5,3,2,6,3,9];
print_r(quick_sort($arr));
<?php

//時間複雜度O(n) 空間複雜度O(n)
function merge_sort_v1($nums1, $nums2)
{
    $sorted_arr = [];
    $i = 0;
    $j = 0;

    while($i < count($nums1) && $j < count($nums2)) {
        if($nums1[$i] < $nums2[$j]) {
            array_push($sorted_arr, $nums1[$i]);
            $i++;
        }
        else {
            array_push($sorted_arr, $nums2[$j]);
            $j++;
        }
    }

    while($i < count($nums1)) {
        array_push($sorted_arr, $nums1[$i]);
        $i++;
    }

    while($j < count($nums2)) {
        array_push($sorted_arr, $nums2[$j]);
        $j++;
    }


    return $sorted_arr;
}

//分治法 //時間複雜度 divide:O(logn) merge:O(n*logn)
function merge_sort_v2($array)
{
    //divide
    if(count($array) <= 1)
    {
        return $array;
    }

    $mid = floor(count($array)/2);

    $left_array = array_slice($array, 0, $mid);
    $right_array = array_slice($array, $mid );

    $left_array = merge_sort_v2($left_array);
    $right_array = merge_sort_v2($right_array);
    return merge($left_array, $right_array);
}

function merge($nums1, $nums2)
{
    return merge_sort_v1($nums1, $nums2);
}

$nums1 = [1,3,6,9];
$nums2 = [2,6,7,8];

print_r(merge_sort_v2(array_merge($nums1, $nums2)));

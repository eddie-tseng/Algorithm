<?php


function top_k($nums, $k)
{

    $large_arr = [];
    $small_arr = [];

    $i = 0;
    while ($i < count($nums) -1)
    {
        if($nums[$i] < $nums[count($nums)-1]){
            array_push($small_arr, $nums[$i] );
        }
        else {
            array_push($large_arr, $nums[$i] );
        }

        $i++;
    }

    if(count($nums) - $i === $k)
    {
        return $nums[$i];
    }
    else if(count($nums) - $i < $k)
    {
        return top_k($small_arr, $k-(count($nums) - $i));
    }
    else
    {
        return top_k($large_arr, $k-1);
    }
}

$nums = [1,3,2,6];

print_r(top_k($nums, 2));
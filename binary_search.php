<?php

function binary_search($nums, $target)
{
    $left_bound = 0;
    $right_bound = count($nums)-1;

    while ($right_bound >= $left_bound)
    {
        $mid = floor($left_bound + ($right_bound-$left_bound)/2);

        if($target === $nums[$mid])
        {
            return $mid;
        }

        if($target > $nums[$mid])
        {
            $left_bound = $mid+1;
        }
        else
        {
            $right_bound = $mid-1;
        }
    }

    return -1;
}

$nums = [1,2,3,4,5];
$target = 2;
echo binary_search($nums, $target);
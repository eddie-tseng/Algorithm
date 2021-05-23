<?php

/**
 * https://leetcode.com/problems/find-the-duplicate-number/
 * 287. Find the Duplicate Number
 *
 * @param Integer[] $nums
 * @return Integer
 */
function findDuplicate($nums) {
    $s = $nums[0];
    $f = $nums[0];

    while(true) {
        $s = $nums[$s];
        $f = $nums[$nums[$f]];
        if($s == $f)
            break;
    }



    $s = $nums[0];
    while($f != $s){
        $f = $nums[$f];
        $s = $nums[$s];

    }

    return $f;
}
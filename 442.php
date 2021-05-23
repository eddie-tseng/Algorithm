<?php

/**
 * 442. Find All Duplicates in an Array
 * https://leetcode.com/problems/find-all-duplicates-in-an-array/
 *
 * @param Integer[] $nums
 * @return Integer[]
 */
function findDuplicates($nums) {
    $found_nums = [];
    $result = [];
    foreach($nums as $num){
        if(!isset($found_nums[$num])){
            $found_nums[$num] = 1;
            continue;
        }

        $result[] = $num;
    }
    return $result;
}
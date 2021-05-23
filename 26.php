<?php

/**
 * 26. Remove Duplicates from Sorted Array
 * https://leetcode.com/problems/remove-duplicates-from-sorted-array/
 *
 * @param Integer[] $nums
 * @return Integer
 */
function removeDuplicates(&$nums) {
    $length = count($nums);
    $count = 1;
    for ($i=0; $i < $length - 1; $i++) {
        if ($nums[$i] != $nums[$i + 1]) {
            $nums[$count++] = $nums[$i + 1];
        }
    }

    return $count;
}

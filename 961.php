<?php

/**
 * 961. N-Repeated Element in Size 2N Array
 * https://leetcode.com/problems/n-repeated-element-in-size-2n-array/
 *
 * @param String $s
 * @param String $t
 * @return Boolean
 */
function isAnagram($s, $t) {
    if(count_chars($s) == count_chars($t)){
        return TRUE;
    }

    return FALSE;
}

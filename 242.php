<?php

/**
 * 242. Valid Anagram
 *https://leetcode.com/problems/valid-anagram/
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

$s = "cat";
$t = "rat";

var_dump(isAnagram($s, $t));
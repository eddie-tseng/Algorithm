<?php

/**
 * 136. Single Number
 * https://leetcode.com/problems/single-number/
 *
 * @param Integer[] $nums
 * @return Integer
 */
function singleNumber($nums) {
    $res = [];
    foreach($nums as $num){
        if(array_key_exists($num, $res)){
            unset($res[$num]);
        }else{
            $res[$num] = null;
        }
    }
    return array_search(null,$res);
}
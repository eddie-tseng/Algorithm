<?php


/**
 * 15. 3Sum
 * https://leetcode.com/problems/3sum/
 *
 * @param Integer[] $nums
 * @return Integer[][]
 */
function threeSum($nums) {
    $res = [];
    if(count($nums)<3){
        return $res;
    }

    $map = [];
    sort($nums);
    for($i = 0; $i < count($nums); $i++){
        $target = 0;
        $buff = [];
        $target = $target - $nums[$i];
        for($j = $i+1; $j < count($nums); $j++){
            if(!array_key_exists($target - $nums[$j], $buff)){
                $buff[$nums[$j]] = $j;
            }else{
                $key =  implode([$nums[$i], $nums[$j], $nums[$buff[$target - $nums[$j]]]]);
                if(!array_key_exists($key, $map)){
                    $map[$key] = null;
                    $res[] = [$nums[$i], $nums[$j], $nums[$buff[$target - $nums[$j]]]];
                }
            }
        }
    }

    return $res;
}


$nums = [1,2,-2,-1];
print_r(threeSum($nums));
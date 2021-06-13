<?php


/**
 * 18. 4Sum
 * https://leetcode.com/problems/4sum/
 *
 * @param Integer[] $nums
 * @param Integer $target
 * @return Integer[][]
 */
function fourSum($nums, $target) {
    $res = [];
    if (count($nums) < 4) {
        return $res;
    }

    if (count($nums) == 4 && array_sum($nums) == $target) {
        $res[] = $nums;
        return $res;
    }

    $map = [];
    sort($nums);
    for($i = 0; $i < count($nums); $i++){
        for($j = $i+1; $j < count($nums); $j++){
            $low = $j+1;
            $high = count($nums)-1;
            if($low >= $high){
                break;
            }
            while ($low < $high){
                $sum = $nums[$i] + $nums[$j] + $nums[$low] + $nums[$high];
                if($target < $sum){
                    $high--;
                }elseif($target > $sum){
                    $low++;
                }else{
                    $arr = [$nums[$i], $nums[$j], $nums[$low++], $nums[$high--]];
                    $key =  implode($arr);
                    if(!array_key_exists($key, $map)){
                        $map[$key] = null;
                        $res[] = $arr;
                    }
                    break;
                }
            }
        }
    }
    return $res;
}

$nums = [-3,-2,-1,0,0,1,2,3];
$target = 0;
print_r(fourSum($nums, $target));
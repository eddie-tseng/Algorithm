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

    sort($nums);
    for($i = 0; $i < count($nums); $i++){
        //排除重複
        if($i != 0 && $nums[$i] == $nums[$i-1])
        {
            continue;
        }
        for($j = $i+1; $j < count($nums); $j++){
            //排除重複
            if($j != i+1 && $nums[$j] == $nums[$j-1])
            {
                continue;
            }
            $low = $j+1;
            $high = count($nums)-1;

            while ($low < $high){
                $sum = $nums[$i] + $nums[$j] + $nums[$low] + $nums[$high];
                if($target < $sum){
                    $high--;
                }elseif($target > $sum){
                    $low++;
                }else{
                    $arr = [$nums[$i], $nums[$j], $nums[$low++], $nums[$high--]];
                    $res[] = $arr;

                    //排除重複
                    while($low < $high && $nums[$low] == $nums[$low-1])
                    {
                        $low++;
                    }
                    //排除重複
                    while($low < $high && $nums[$high] == $nums[$high+1])
                    {
                        $high--;
                    }
                }
            }
        }
    }
    return $res;
}

$nums = [2,2,2,2,2];
$target = 8;
print_r(fourSum($nums, $target));
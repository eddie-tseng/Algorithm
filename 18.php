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
            if($j != $i+1 && $nums[$j] == $nums[$j-1])
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

# solution2 recursion
class Solution
{
    public $res = [];

    function fourSum_2($nums, $target)
    {

        if (count($nums) < 4)
        {
            return $this->res;
        }

        if (count($nums) == 4 && array_sum($nums) == $target)
        {
            $this->res[] = $nums;

            return $this->res;
        }

        sort($nums);
        $this->nSum($nums, 4, 0, $target, []);

        return $this->res;
    }

    function nSum($nums, $n, $start, $target, $sub_res)
    {
        if ($n == 2)
        {
            foreach ($this->TwoSum($nums, $start, $target) as $arr){
                $this->res[]  = array_merge($sub_res, $arr);
            }
        }
        else
        {
            for ($i = $start; $i < count($nums) - 1; $i++)
            {
                if ($i != $start && $nums[$i] == $nums[$i - 1])
                {
                    continue;
                }


                $sub_res[] = $nums[$i];
                $this->nSum($nums, $n - 1, $i + 1, $target - $nums[$i], $sub_res);
                echo $target - $nums[$i];
                print_r($sub_res);

                array_pop($sub_res);
            }
        }

    }

    function TwoSum($nums, $start, $target)
    {
        $l = $start;
        $r = count($nums) - 1;
        $sub_res = [];

        while ($l < $r)
        {
            if (($nums[$l] + $nums[$r]) < $target){
                $l++;
            } elseif (($nums[$l] + $nums[$r]) > $target){
                $r--;
            }
            else {
                $sub_res[] = [$nums[$l++], $nums[$r--]];

                while ($l < $r && $nums[$l] == $nums[$l - 1]) $l++;

                while ($l < $r && $nums[$r] == $nums[$r + 1]) $r--;
            }
        }

        return $sub_res;
    }
}

$nums = [1,0,-1,0,-2,2];
$target = 0;
$s = new Solution();
$s->fourSum_2($nums, $target);
print_r($s->res);
<?php


/**
 * @param Integer[] $nums
 * @param Integer $target
 * @return Integer[][]
 */
function fourSum($nums, $target) {
    $res = [];
//    sort($nums);
    for($i = 0; $i < count($nums); $i++){
        for($j = 1+$i; $j < count($nums); $j++){
            for($k = 2+($j-1); $k < count($nums); $k++){
                for($l= 3+($k-2); $l < count($nums); $l++){
                    if($nums[$i]+$nums[$j]+$nums[$k]+$nums[$l] == $target) {
                        $arr = [$nums[$i], $nums[$j], $nums[$k], $nums[$l]];
                        sort($arr);
                        if(array_search($arr, $res) === FALSE)
                        {
                            array_push($res, $arr);
                        }
                    }
                }
            }
        }
    }
    return $res;
}

$nums = [-500,-499,-496,-467,-467,-465,-461,-460,-456,-456,-447,-426,-425,-401,-377,-367,-344,-338,-332,-329,-328,-294,-281,-262,-256,-224,-196,-192,-171,-161,-151,-138,-130,-109,-109,-107,-104,-101,-97,-96,-90,-78,-76,-70,-28,-23,-4,30,39,46,60,80,97,120,172,183,194,197,206,238,242,243,252,303,338,341,349,362,366,367,372,393,400,403,406,411,416,454,457,460,497];
$target = -1963;
print_r(fourSum($nums, $target));
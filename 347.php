<?php


/**
 * @param Integer[] $nums
 * @param Integer $k
 * @return Integer[]
 */
function topKFrequent($nums, $k) {
    $map = [];
    $res = [];
    $arr  = [];
    foreach ($nums as $num) {
        if(!array_key_exists($num, $map)){
            $map[$num] = 1;
            continue;
        }
        $map[$num]++;
    }

    foreach ($map as $n => $f){
        $arr[$f][] = $n;
    }
    print_r($arr);
    for ($i = count($nums)+1; $i > 0; $i--){
        if($k == 0 ){
            return $res;
        }
        if(isset($arr[$i])){
            $res = array_merge($res, $arr[$i]);
            $k -= count($arr[$i]);
        }
    }

    return $res;
}

$nums = [-1,-1];
$k = 1;
print_r(topKFrequent($nums, $k));
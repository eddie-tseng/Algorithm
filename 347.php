<?php


/**
 * @param Integer[] $nums
 * @param Integer $k
 * @return Integer[]
 */
function topKFrequent($nums, $k) {
    $map = [];
    $res = [];
    foreach ($nums as $num) {
        if(!array_key_exists($num, $map)){
            $map[$num] = 1;
            continue;
        }
        $map[$num]++;
    }

    arsort($map);
    for ($i=0; $i < $k; $i++){
        $key = key($map);
        $res[] = $key;
        unset($map[$key]);
    }

    return $res;
}

$nums = [1,1,2,2,2,3];
$k = 2;
print_r(topKFrequent($nums, $k));
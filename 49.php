<?php

/**
 * @param String[] $strs
 * @return String[][]
 */
function groupAnagrams($strs) {
    $res     = [];
    $map     = [];
    $map_len = 1;
    foreach ($strs as $str){
        $chars = str_split($str);
        sort($chars);
        $sorted = implode($chars);

        if (!array_key_exists($sorted, $map)){
            $map[$sorted] = $map_len;
            $res[$map[$sorted]][] = $str;
            $map_len++;
            continue;
        }

        $res[$map[$sorted]][] = $str;
    }

    return $res;
}


$strs = ["eat","tea","tan","ate","nat","bat"];

print_r(groupAnagrams($strs));
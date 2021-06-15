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
        $arr  = array_fill(0, 26, 0);
        $key = '';

        foreach ($chars as $char){
            $arr[ord($char)-97]++;
        }

        foreach ($arr as $value){
            $key .= chr($value);
        }

        if (!array_key_exists($key, $map)){
            $map[$key] = $map_len;
            $res[$map[$key]][] = $str;
            $map_len++;
            continue;
        }

        $res[$map[$key]][] = $str;
    }

    return $res;
}


$strs = ["bdddddddddd","bbbbbbbbbbc"];

print_r(groupAnagrams($strs));
<?php


/**
 * @param Integer[] $nums
 * @return Integer
 */
function removeDuplicates(&$nums) {
    $i = 0;
    $len = count($nums);
    while($i < $len-2){
        if($nums[$i] == $nums[$i+2]){
            unset($nums[$i]);
            $i++;
        }else{
            $i++;
        }
    }

}

$input = [0,0,1,1,1,1,2,3,3];
removeDuplicates($input);
print_r($input);
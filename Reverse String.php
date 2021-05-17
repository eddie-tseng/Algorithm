<?php
function reverseString(&$s) {

    $i = 0;
    $j = count($s)-1;
    while($j > $i) {
        $tmp = $s[$i];
        $s[$i] = $s[$j];
        $s[$j] = $tmp;
        $i++;
        $j--;
    }

    return $s;
}

$s = ["A"," ","m","a","n",","," ","a"," ","p","l","a","n",","," ","a"," ","c","a","n","a","l",":"," ","P","a","n","a","m","a"];

print_r(reverseString($s));
<?php

/**
 * 1160. Find Words That Can Be Formed by Characters
 * https://leetcode.com/problems/find-words-that-can-be-formed-by-characters/
 *
 * @param String[] $words
 * @param String $chars
 * @return Integer
 */
function countCharacters($words, $chars) {
    $i = 0;
    $len = 0;
    $available_chars = array_fill(0, 26, 0);
    while($i < strlen($chars)){
        $available_chars[(ord($chars[$i])-97)]++;
        $i++;
    }

    foreach($words as $word){
        $i = 0;
        $verification_chars = $available_chars;
        $word_len = strlen($word);
        $good = TRUE;
        while($i < $word_len){

            if($verification_chars[(ord($word[$i])-97)]-- <= 0){
                $good = FALSE;
                break;
            }
            $i++;
        }

        $len += $good ? $word_len : 0;
    }

    return $len;
}

echo countCharacters(["cat","bt","hat","tree"], "atach");
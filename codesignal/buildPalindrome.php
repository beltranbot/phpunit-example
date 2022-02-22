<?php

function solution($str)
{
    $rev = strrev($str);
    $min = $str . $rev;
    do {
        $revarr = str_split($rev);
        array_shift($revarr);
        $rev = implode("", $revarr);
        if (isPalindrome($str . $rev)) {
            $min = $str . $rev;
        }
    } while(strlen($rev) > 0);
    return $min;
}

function isPalindrome($str)
{
    return $str === strrev($str);
}

$str = "euotmn";

$res = solution($str);
print_r($res);

echo "\n";



/*
abcdccdcba
abcdc ba

asdikl

abaxaxaba
*/
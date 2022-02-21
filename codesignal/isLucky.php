<?php

/*
Ticket numbers usually consist of an even number of digits. A ticket number is considered lucky if the sum of the first
half of the digits is equal to the sum of the second half.

Given a ticket number n, determine if it's lucky or not.
*/

function solution($n)
{
    $arr = str_split(strval($n));
    $half = count($arr) / 2;
    $first = 0;
    $second = 0;
    for ($i = 0; $i < $half; $i++) {
        $first += intval($arr[$i]);
        $second += intval($arr[$half + $i]);
    }
    return $first === $second;
}

// print_r(solution(1230));
// echo "\n";
// print_r(solution(239017));

print_r(solution(239017));
echo "\n";

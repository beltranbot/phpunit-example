<?php

function solution($n, $firstNumber)
{
    $half = $n / 2;
    if ($firstNumber < $half) {
        return $half + $firstNumber;
    }
    return $firstNumber - $half;
}

$res = solution(10, 2);

print_r($res);

/*
0 1 2 3 4 5 6 7 8 9
5 6 7 8 9 0 1 2 3 4

0 1 2 3 4  5  6 7 8 9 10 11
6 7 8 9 10 11 0 1 2 3 4  5

$half = $n / 2;
if ($firstNumber < $half) {
    return $half + $n;
}
return $n - half;
5 - 0 // half - $n
6 - 1 // $n - half;
7 - 2 // $n - half;
 */
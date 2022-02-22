<?php

function solution($votes, $k)
{
    $max = max($votes);
    if ($k === 0) {
        return count(array_filter($votes, function ($n) use ($max) {
            return $n === $max;
        })) > 1 ? 0 : 1;
    }
    $result = array_filter($votes, function ($n) use ($max, $k) {
        return ($n + $k) > $max;
    });
    return count($result);
}

// $votes = [2, 3, 5, 2];
$votes = [5, 1, 3, 4, 1];
// $k = 3;
$k = 0;

$res = solution($votes, $k);

print_r("res:" . $res);
echo "\n";

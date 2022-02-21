<?php

function solution($arr)
{
    $total = 0;
    for ($i = 0; $i < count($arr) - 1; $i++) {
        if ($arr[$i] < $arr[$i + 1]) {
            continue;
        }
        $increment = abs($arr[$i+ 1] - $arr[$i]) + 1;
        $arr[$i + 1] += $increment;
        $total += $increment;
    }
    return $total;
}

$total = solution([-1000, 0, -2, 0]);

print_r("total: " . $total);

echo "\n";

/*
-1000 0
0 -2 -> +3 = 1
1 0 -> +2 = 4

*/
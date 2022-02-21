<?php

function solution($value1, $weight1, $value2, $weight2, $maxW)
{
    if ($weight1 + $weight2 <= $maxW) {
        return $value1 + $value2;
    }
    if ($weight1 > $maxW && $weight2 <= $maxW) {
        return $value2;
    }
    if ($weight2 > $maxW && $weight1 <= $maxW) {
        return $value1;
    }
    if ($weight2 > $maxW && $weight1 > $maxW) {
        return 0;
    }
    return maxValue($value1, $value2);
}

function maxValue($value1, $value2)
{
    if ($value1 > $value2) {
        return $value1;
    }
    return $value2;
}


$res = solution(10, 5, 6, 4, 8);
print_r("res:" . $res);

echo "\n";

$res = solution(10, 5, 6, 4, 9);
print_r("res:" . $res);

echo "\n";

$res = solution(5, 3, 7, 4, 6);
print_r("res:" . $res);

echo "\n";

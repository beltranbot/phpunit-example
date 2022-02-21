<?php

function solution($upSpeed, $downSpeed, $desiredHeight)
{
    $days = 0;
    $size = 0;
    while ($size < $desiredHeight) {
        $days++;
        $size += $upSpeed;
        if ($size >= $desiredHeight) {
            break;
        }
        $size -= $downSpeed;
    }
    return $days;
}


$res = solution(100, 10, 910);
print_r("res: " . $res);
echo "\n";

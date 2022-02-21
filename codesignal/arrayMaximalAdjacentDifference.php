<?php

function solution($arr)
{
    $max = abs($arr[1] - $arr[0]);
    for ($i = 0; $i < count($arr) - 1; $i++) {
        $abs = abs($arr[$i] - $arr[$i + 1]);
        $max = $max > $abs ? $max : $abs;
    }
    return $max;
}

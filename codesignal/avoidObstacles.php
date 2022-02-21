<?php

function solution($input)
{
    $i = 0;
    $max = max($input);
    do {
        $i++;
    } while (!tryStep($input, $i, $max));
    return $i;
}

function tryStep($input, $n, $max)
{
    for ($i = $n; $i <= $max; $i += $n) {
        if (in_array($i, $input)) {
            return false;
        }
    }
    return true;
}

$arr = [5, 3, 6, 7, 9];
// $arr = [2, 3];

$res = solution($arr);
print_r($res);

echo "\n";
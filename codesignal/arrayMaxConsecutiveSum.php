<?php

function solution($input, $k)
{
    $res = 0;
    for ($i = 0; $i < $k; $i++) {
        $res += $input[$i];
    }
    $curr = $res;
    for ($i = $k; $i < count($input); $i++) {
        $curr += $input[$i] - $input[$i - $k];
        $res = max([$res, $curr]);
    }
    return $res;
}


$arr = [2, 3, 5, 1, 6];
$k = 2;

$res = solution($arr, $k);

print_r("res: " . $res);
echo "\n";

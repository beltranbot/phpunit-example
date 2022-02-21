<?php

function solution($n)
{
    $degree = 0;
    while (strlen($n) > 1) {
        $degree++;
        $n = array_sum(
            array_map(function ($num) {
                return intval($num);
            }, str_split($n))
        );
    }
    return $degree;
}

$n = 5;
$res = solution($n);

echo "res: " . $res;
echo "\n";

$n = 5;
$res = solution($n);

echo "res: " . $res;
echo "\n";

$n = 100;
$res = solution($n);

echo "res: " . $res;
echo "\n";
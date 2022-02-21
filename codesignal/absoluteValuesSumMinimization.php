<?php

function solution($a)
{
    $minIndex = 0;
    $minValue = null;
    for ($i = 0; $i < count($a); $i++) {
        $total = 0;
        for ($j=0; $j < count($a); $j++) { 
            $total += abs($a[$j] - $a[$i]);
        }
        if (is_null($minValue)) {
            $minValue = $total;
            $minIndex = $i;
            continue;
        }
        if ($total < $minValue) {
            $minValue = $total;
            $minIndex = $i;
        }
    }
    return $a[$minIndex];
}

$arr = [2, 4 , 7];
$res = solution($arr);

print_r($res);

echo "\n";

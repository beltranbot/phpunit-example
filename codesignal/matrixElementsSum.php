<?php

function solution($matrix)
{
    $multipliers  = array_fill(0, count($matrix[0]), 1);
    $total = 0;
    for ($row = 0; $row < count($matrix); $row++) {
        for ($col = 0; $col < count($matrix[$row]); $col++) {
            $total += $matrix[$row][$col] * $multipliers[$col];
            if ($matrix[$row][$col] === 0) {
                $multipliers[$col] = 0;
            }
        }
    }
    return $total;
}

$matrix = [
    [0,1,1,2], 
    [0,5,0,0], 
    [2,0,3,3]
];

$res = solution($matrix);

print_r("res: " . $res);
echo "\n";

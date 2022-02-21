<?php

function solution($inputArray, $k)
{
    $output = [];
    for ($i = 0; $i < count($inputArray); $i++) { 
        if ((($i + 1) % $k) === 0) {
            continue;
        }
        $output[] = $inputArray[$i];
    }
    return $output;
}

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$k = 3;
$output = solution($arr, $k);

print_r($output);


<?php

function solution($input)
{
    $arr = count_chars($input);
    $singleOdd = 0;
    foreach ($arr as $key => $value) {
        if ($value % 2 === 1) {
            $singleOdd++;
            if ($singleOdd > 1) {
                return false;
            }
        }
    }
    return true;
}

$input = "aaz";
$res = solution($input);

print_r($res);

echo "\n";

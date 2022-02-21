<?php

function solution($s1, $s2)
{
    $arr1 = count_chars($s1, 1);
    $arr2 = count_chars($s2, 1);

    $total = 0;
    foreach (array_keys($arr1) as $key) {
        if (array_key_exists($key, $arr2)) {
            $total += $arr1[$key] < $arr2[$key] ? $arr1[$key] : $arr2[$key];
        }
    }
    return $total;
}

$s1 = "aadca";
$s2 = "abcca";

$count = solution($s1, $s2);

print_r($count);

echo "\n";

<?php

function solution($strings)
{
    $max = -1;
    foreach ($strings as $string) {
        $max = strlen($string) > $max ? strlen($string) : $max;
    }
    $response = [];
    foreach ($strings as $string) {
        if (strlen($string) === $max) {
            $response[] = $string;
        }
    }
    return $response;
}
echo "\n";

$input = ["aba", "aa", "ad", "vcd", "aba"];
$res = solution($input);

print_r($res);

echo "\n";




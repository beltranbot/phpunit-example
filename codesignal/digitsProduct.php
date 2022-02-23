<?php

function solution($product)
{
    for ($i = 1; $i < 6000; $i++) {
        $arr = str_split(strval($i));
        $prod = array_reduce($arr, function ($a, $c) {
            return $a * intval($c);
        }, 1);
        if ($prod === $product) {
            return $i;
        }
    }
    return -1;
}

$product = 12;

$res = solution($product);

print_r("res: " . $res);
echo "\n";

$product = 19;

$res = solution($product);

print_r("res: " . $res);
echo "\n";
/*
450 / 2
225 / 25
9 / 3
3 / 3




*/
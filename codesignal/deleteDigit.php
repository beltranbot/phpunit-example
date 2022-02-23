<?php

function solution($n)
{
    $max = -1;
    for ($i = 0; $i < strlen(strval($n)); $i++) {
        $num = (floor($n / pow(10, $i + 1)) * pow(10, $i)) + ($n % pow(10, $i));
        $max = $max > $num ? $max : $num;
    }
    return $max;
}

// $n = 10000000001;
$n = 10561;

$res = solution($n);

print_r("res:" . $res);

echo "\n";
/*
10561
1056 -> 10561 / 10 -> 1056 -> 10561 mod 10 = 1
1051 -> 10561 /10 -> 105 * 10 + 10561 mod 10 = 1051
1061 -> 10561 / 1000 ->  10 *100 + 10561 mod 100
1561 -> 10561 / 10000 -> 10000 *  mod 1000
0561

floor($n / pow(10, $i + 1)) * pow(10, $i + 1) + $n % 


*/

<?php

function solution($input)
{
    $arr = preg_split("/[^\d]/", $input);
    $total = 0;
    foreach ($arr as $item) {
        if (strlen(trim($item)) === 0) {
            continue;
        }
        $total += intval($item);
    }
    return $total;
}

$input = "2 apples, 12 oranges";
$res = solution($input);
print_r($res);

echo "\n";
<?php

function solution($str)
{
    preg_match_all('/(.)\1*/', $str, $matches);
    $output = "";
    foreach ($matches[0] as $match) {
        if (strlen($match) === 1) {
            $output .= $match;
            continue;
        }
        $output .= strlen($match) . $match[0];
    }
    return $output;

}

$str = "aabbbc";
$res = solution($str);

print_r($res);

echo "\n";
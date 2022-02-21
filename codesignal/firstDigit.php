<?php

function solution($input)
{
    preg_match("/\d{1}/", $input, $matches);
    return $matches[0];
}

$input = "var_1_Int";
$output = solution($input);

print_r("firstDigit: " . $output);
echo "\n";

<?php

function solution($input)
{
    $hexa = "([0-9A-F]{2})";
    $matches = preg_match("/^{$hexa}-{$hexa}-{$hexa}-{$hexa}-{$hexa}-{$hexa}$/", $input);
    return $matches === 1;
}

// $input = "00-1B-63-84-45-E6";
$input = "Z1-1B-63-84-45-E6";
$res = solution($input);

print_r("res: " . $res);

echo "\n";

<?php

function solution($input) {
    preg_match("/(\d)*/", $input, $matches);
    $longest = "";
    foreach ($matches as $match) {
        $longest = strlen($longest) > strlen($match) ? $longest : $match;
    }
    return $longest;
}

$input = "123aa1";
$res = solution($input);

var_dump($res);
echo "\n";

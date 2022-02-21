<?php

function solution($input)
{
    $arr = str_split($input);
    $output = [];
    foreach ($arr as $letter) {
        $nletter = ord($letter);
        $nletter++;
        if ($nletter > 122) {
            $nletter = 97;
        }
        $output[] = chr($nletter);
    }
    return implode('', $output);
}


$word = "crazy";
$res = solution($word);

print_r("word: " . $res);

echo "\n";

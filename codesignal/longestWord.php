<?php

function solution($text)
{
    preg_match_all("/([a-zA-Z])*/", $text, $matches);
    print_r($matches);
    $longest = trim($matches[0][0]);
    foreach ($matches[0] as $match) {
        $longest = strlen(trim($match)) > strlen($longest) ? $match : $longest;
    }
    return $longest;
}

// $text = "Ready, steady, go!";
$text = "Ready[[[, steady, go!";

$res = solution($text);
print_r($res);
echo "\n";

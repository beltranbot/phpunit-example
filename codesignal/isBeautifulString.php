<?php

function solution($input)
{
    if (strpos($input, "a") === false) {
        return false;
    }
    $arr = count_chars($input, 1);
    $prevLetter = array_keys($arr)[0];
    $prevValue = $arr[$prevLetter];
    foreach ($arr as $letter => $value) {
        if ($letter === $prevLetter) {
            continue;
        }
        if (($prevLetter + 1 !== $letter) || ($prevValue < $value)) {
            return false;
        }
        $prevLetter = $letter;
        $prevValue = $value;
    }
    return true;
}

// $res = solution("bbbaacdafe");
$res = solution("bbc");

print_r("solution:" . $res);

echo "\n";

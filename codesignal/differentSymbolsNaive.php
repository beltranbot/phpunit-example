<?php

function solution($s)
{
    $arr = count_chars($s, 1);
    return count(array_keys($arr));
}

$solution = solution("abc");

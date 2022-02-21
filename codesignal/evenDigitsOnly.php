<?php

function solution($n)
{
    $strn = strval($n);
    $arr = str_split($strn);
    foreach ($arr as $number) {
        if ($number % 2 === 1) {
            return false;
        }
    }
    return true;
}
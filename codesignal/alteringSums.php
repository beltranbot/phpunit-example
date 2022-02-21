<?php

function solution($arr)
{
    $sol = [0, 0];
    for ($i = 0; $i < count($arr); $i++) {
        $sol[$i % 2] = $arr[$i];
    }
    return $sol;
}

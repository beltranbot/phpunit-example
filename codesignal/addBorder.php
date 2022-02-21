<?php

function solution($picture)
{
    $borderLength = strlen($picture[0]) + 2;
    for ($i = 0; $i < count($picture); $i++) {
        $picture[$i] = "*" . $picture[$i] . "*";
    }
    $border = str_repeat('*', $borderLength);
    array_unshift($picture, $border);
    $picture[] = $border;
    return $picture;
}

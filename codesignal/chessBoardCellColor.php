<?php

/*
w - b - w -b
b - w - b - w
*/

function solution($cell1, $cell2)
{
    $arr1 = getRowAndColumn($cell1);
    $arr2 = getRowAndColumn($cell2);

    $color1 = getColor($arr1);
    $color2 = getColor($arr2);

    return $color1 === $color2;
}

function getRowAndColumn($cell)
{
    $cell = str_split($cell);
    $arr = [];
    $arr["row"] = 8 - intval($cell[1]);
    $arr["col"] = strpos("ABCDEFGH", $cell[0]);
    return $arr;
}

function getColor($cell)
{
    return ($cell["row"] % 2 === $cell["col"] % 2) ? "white" : "black";
}

$cell1 = "A1";
$cell2 = "C4";
$res = solution($cell1, $cell2);

print_r($res ? "true" : "false");

echo "\n";

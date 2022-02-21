<?php

function solution($arra, $arrb)
{
    if (!needsOnlyOneSwap($arra, $arrb)) {
        return false;
    }
    $mapa = valuesMap($arra);
    $mapb = valuesMap($arrb);
    return compareKeyValues($mapa, $mapb);
}

function needsOnlyOneSwap($arra, $arrb)
{
    $swaps = 0;
    for ($i=0; $i < count($arra); $i++) { 
        if ($arra[$i] !== $arrb[$i]) {
            $swaps++;
            if ($swaps > 2) {
                return false;
            }
        }
    }
    return true;
}

function valuesMap($arr)
{
    $map = [];
    foreach ($arr as $key) {
        if (array_key_exists($key, $map)) {
            $map[$key]++;
        } else {
            $map[$key] = 1;
        }
    }
    return $map;
}

function compareKeyValues($mapa, $mapb)
{
    foreach ($mapa as $key => $value) {
        if (!array_key_exists($key, $mapb)) {
            return false;
        }
        $diff = $mapa[$key] - $mapb[$key];
        if ($diff !== 0) {
            return false;
        }
    }
    return true;
}

/*
a = [1, 2, 2] and b = [2, 1, 1]

1 2 2
2 1 1
 */
<?php

function solution($arr)
{
    $trees = extractTrees($arr);
    $withoutTrees = array_filter($arr, function ($item) {
        return $item !== -1;
    });
    sort($withoutTrees);
    $count = count($withoutTrees) + count($trees);
    $result = [];
    for ($i = 0; $i < $count; $i++) {
        if (array_key_exists($i, $trees)) {
            $result[] = -1;
            continue;
        }
        $result[] = array_shift($withoutTrees);
    }
    return $result;
}

function extractTrees($arr)
{
    $trees = [];
    foreach ($arr as $key => $value) {
        if ($value === -1) {
            $trees[$key] = -1;
        }
    }
    return $trees;
}

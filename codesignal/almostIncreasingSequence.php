<?php

function solution($sequence)
{
    $i = checkForSequence($sequence);
    if ($i === -1) {
        return true;
    }
    $tempA = $sequence;
    array_splice($tempA, $i, 1);
    $tempB = $sequence;
    array_splice($tempB, $i + 1, 1);
    return checkForSequence($tempA) === -1 || checkForSequence($tempB) === -1;
}

function checkForSequence($sequence)
{
    for ($i = 0; $i < count($sequence) - 1; $i++) { 
        if ($sequence[$i] >= $sequence[$i + 1]) {
            return $i;
        }
    }
    return -1;
}

// $sol = solution([3, 6, 5, 8, 10, 20, 15]);
$sol = solution([1, 2, 1, 2]);
print_r($sol ? "true" : "false");

echo "\n";

/*
1 1 2
2 1 1

 */
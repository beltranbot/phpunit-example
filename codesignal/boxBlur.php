<?php

function solution($matrix)
{
    // dimension reduces in 2, minimum 3 maxtrix rows and columsn
    $blurred = [];
    for ($row = 1; $row <= count($matrix) - 2; $row++) { 
        $tempRow = [];
        for ($col = 1; $col <= count($matrix[$row]) - 2; $col++) {
            $tempRow[] = calculateAverage($matrix, $row, $col);
        }
        $blurred[] = $tempRow;
    }
    return $blurred;
}

function calculateAverage($matrix, $row, $col)
{
    $avg = (
        $matrix[$row - 1][$col - 1] +
        $matrix[$row - 1][$col] +
        $matrix[$row - 1][$col + 1] +
        $matrix[$row][$col - 1] +
        $matrix[$row][$col] +
        $matrix[$row][$col + 1] +
        $matrix[$row + 1][$col - 1] +
        $matrix[$row + 1][$col] +
        $matrix[$row + 1][$col + 1]
    ) / 9;
    return floor($avg);
}

$matrix = [
    [1, 2, 3, 4, 5, 6],
    [1, 2, 3, 4, 5, 6],
    [1, 2, 3, 4, 5, 6],
    [1, 2, 3, 4, 5, 6],
    [1, 2, 3, 4, 5, 6],
    [1, 2, 3, 4, 5, 6],
];

[
    [1, 2, 3, 4],
    [1, 2, 3, 4],
    [1, 2, 3, 4],
    [1, 2, 3, 4],
]
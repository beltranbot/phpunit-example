<?php

function solution($matrix)
{
    $uniqueSquares = [];
    for ($row = 0; $row < count($matrix); $row++) {
        for ($col = 0; $col < count($matrix[$row]); $col++) {
            if (isValidSquare($matrix, $row, $col)) {
                $square = intval(
                    strval($matrix[$row][$col])
                        . strval($matrix[$row][$col + 1])
                        . strval($matrix[$row + 1][$col])
                        . strval($matrix[$row + 1][$col + 1])
                );
                if (!in_array($square, $uniqueSquares)) {
                    $uniqueSquares[] = $square;
                }
            }
        }
    }
    return count($uniqueSquares);
}

function isValidSquare($matrix, $row, $col)
{
    $rows = count($matrix) - 1;
    $cols = count($matrix[0]) - 1;
    return ($row + 1 <= $rows
        && $col + 1 <= $cols
    );
}

$matrix = [
    [1, 2, 1],
    [2, 2, 2],
    [2, 2, 2],
    [1, 2, 3],
    [2, 2, 1]
];
$res = solution($matrix);

print_r("res: " . $res);
echo "\n";

$matrix = [[3]];
$res = solution($matrix);

print_r("res: " . $res);
echo "\n";

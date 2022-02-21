<?php

function solution($bishop, $pawn)
{
    $bishop = getPieceCoordinates($bishop);
    $pawn = getPieceCoordinates($pawn);
    // return doTheyIntersect($bishop, $pawn);
    // alternatively
    return abs($bishop["row"] - $pawn["row"]) === abs($bishop["col"] - $pawn["col"]);
}

function getPieceCoordinates($piece)
{
    $piece = strtolower($piece);
    $coordinates = str_split($piece);
    $row = 8 - intval($coordinates[1]);
    $col = strpos("abcdefgh", $coordinates[0]);
    return [
        "row" => $row,
        "col" => $col
    ];
}

function doTheyIntersect($bishop, $pawn)
{
    $dirs = [
        ["row" => -1, "col" => -1],
        ["row" => -1, "col" => 1],
        ["row" => 1, "col" => -1],
        ["row" => 1, "col" => 1]
    ];
    foreach ($dirs as $dir) {
        $copy = $bishop;
        while (
            ($copy["row"] + $dir["row"] >= 0)
            && ($copy["row"] + $dir["row"] < 8)
            && ($copy["col"] + $dir["col"] >= 0)
            && ($copy["col"] + $dir["col"] < 8)
        ) {
            $copy["row"] += $dir["row"];
            $copy["col"] += $dir["col"];
            if ($copy["row"] === $pawn["row"] && $copy["col"] === $pawn["col"]) {
                return true;
            }
        }
    }
    return false;
}

$bishop = "a1";
$pawn = "c4";

// 0 1
// 2 2
// 0 - 2 0 -2
$res = solution($bishop, $pawn);
print_r($res ? "true" : "false");
echo "\n";

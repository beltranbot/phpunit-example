<?php

function solution($cell)
{
    $knight = new Knight($cell);
    return $knight->getValidMoves();
}

class Knight
{
    private $moves;
    private $validMoves;

    public function __construct($cell)
    {
        $this->cell = $this->processCell($cell);
        $this->setMoves();
        $this->calculateValidMoves();
    }

    private function setMoves()
    {
        $this->moves = [
            [-1, -2],
            [-2, -1],
            [-2, 1],
            [-1, 2],
            [2, 1],
            [1, 2],
            [2, -1],
            [1, -2]
        ];
    }

    private function processCell($cell)
    {
        $arr = str_split(strtolower($cell));
        $row = 8 - intval($arr[1]);
        $col = strpos("abcdefgh", $arr[0]);
        return ["row" => $row, "col" => $col];
    }

    private function calculateValidMoves()
    {
        $this->validMoves = 0;
        foreach ($this->moves as $move) {
            $row = $this->cell["row"] + $move[0];
            $validRow = $row >= 0 && $row <= 7;
            $col = $this->cell["col"] + $move[1];
            $validCol = $col >= 0 && $col <= 7;
            if ($validRow && $validCol) {
                $this->validMoves++;
            }
        }
    }

    public function getValidMoves()
    {
        return $this->validMoves;
    }
}


$cell = "c2";

$res = solution($cell);

print_r($res);
echo "\n";
<?php



function solution($matrix)
{
    $minesweeper = new MineSweeper($matrix);
    return $minesweeper->getBoard();
}

class MineSweeper
{
    private $board;
    private $matrix;
    private $points;

    function __construct($matrix)
    {
        $this->board = [];
        $this->matrix = $matrix;
        $this->point = null;
        $this->setPoints();
        $this->processBoard();
    }

    public function getBoard()
    {
        return $this->board;
    }

    private function processBoard()
    {
        for ($row = 0; $row < count($this->matrix); $row++) {
            $line = [];
            for ($col = 0; $col < count($this->matrix[$row]); $col++) {
                $line[] = $this->countMines($row, $col);
            }
            $this->board[] = $line;
        }
        return $this->board;
    }

    private function countMines($row, $col)
    {
        $mines = [];
        foreach ($this->points as $point) {
            $mines[] = $this->isMine($row + $point[0], $col + $point[1]);
        }
        return array_sum($mines);
    }

    private function setPoints()
    {
        $this->points = [
            [-1, -1],
            [-1,  0],
            [-1, 1],
            [0, -1],
            // [0, 0],
            [0, 1],
            [1, -1],
            [1, 0],
            [1, 1],
        ];
    }

    private function isMine($row, $col)
    {
        if ($row < 0 || $row >= count($this->matrix)) {
            return 0;
        }
        if ($col < 0 || $col >= count($this->matrix[$row])) {
            return 0;
        }
        return $this->matrix[$row][$col] ? 1 : 0;
    }
}


// $matrix = [
//     [true, false, false],
//     [false, true, false],
//     [false, false, false]
// ]

$matrix = [
    [true,false,false,true], 
    [false,false,true,false], 
    [true,true,false,true]
];
$board = solution($matrix);

var_dump($board);

echo "\n";

// [
//     [2,2,1],
//     [2,2,1],
//     [1,1,1],
// ]

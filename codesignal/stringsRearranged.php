<?php

function solution($inputArray)
{
    $goal = count($inputArray);
    for ($i=0; $i < $goal; $i++) { 
        $value = array_shift($inputArray);
        $parent = new Node(0, $value, $inputArray);
        if ($parent->getMaxLevel() === $goal) {
            return true;
        }
        $inputArray[] = $value;
    }
    return false;
}

class Node
{
    private $value;
    private $arr;
    private $children;
    private $level;

    public function __construct($parentLevel = 0, $value, $arr)
    {
        $this->level = $parentLevel + 1;
        $this->value = $value;
        $this->arr = $arr;
        $this->children = [];
        $this->makeChildren();
    }

    public function getMaxLevel()
    {
        // prints levels
        $tabs = str_repeat("\t", $this->level - 1);
        print_r($tabs . "level: " . $this->level);
        echo "\n";
        print_r($tabs . "value: " . $this->value);
        echo "\n";
        $maxLevel = $this->level;
        foreach ($this->children as $children) {
            $level = $children->getMaxLevel();
            $maxLevel = $maxLevel > $level ? $maxLevel : $level;
        }
        return $maxLevel;
    }

    private function makeChildren()
    {
        for ($i = 0; $i < count($this->arr); $i++) {
            if ($this->validChildren($this->arr[$i])) {
                $copy = $this->arr;
                array_splice($copy, $i, 1);
                $this->children[] = new Node(
                    $this->level,
                    $this->arr[$i],
                    $copy
                );
            }
        }
    }

    private function validChildren($item)
    {
        $diff = 0;
        for ($i = 0; $i < strlen($this->value); $i++) {
            if ($this->value[$i] !== $item[$i]) {
                $diff++;
                if ($diff > 1) {
                    return false;
                }
            }
        }
        return $diff === 1;
    }
}
$arr = ["aaaa", "aaab", "aabb", "abbb", "abab", "baab"];
// $arr = [
//     "ab", 
//     "bb", 
//     "aa"
// ];
// $arr = [
//     "abc",
//     "abx",
//     "axx",
//     "abc"
// ]; // false
/*
abc - [abx axx abc] 1
    abx - [axx - abc] 2
        axx - [abc]   3
        abc - [axx]   3


 */
// $arr = [
//     "abc", 
//     "abx", 
//     "axx", 
//     "abx", 
//     "abc"
// ];
// $arr = ["a", "b", "c"];
// $arr = ["aba", "bbb", "bab"];
// $arr = [
//     "ff", 
//     "gf", 
//     "af", 
//     "ar", 
//     "hf"
// ];
$res = solution($arr);
print_r($res ? "true" : "false");
echo "\n";
/*
[
    // "abc", 
    "bef", 
    // "bcc", 
    // "bec", 
    // "bbc", 
    // "bdc"
]

abc
    bbc
        bcc
        bdc
        bec
            bef
---

// "ff", 
// "gf", 
"af", 
"ar", 
// "hf"

// make a three
ff - [gf af ar hf]    1
    gf - [af ar hf]   2
        af - [ar hf]  3
            ar - [hf] 4
            hf - [ar] 4
        hf - [af ar]
            af - [ar] 4
                ar    5
    af - [gf ar hf]   2
        gf - [ar hf]  3
            hf - [ar] 4
        hf - [gf ar]
            gf - [ar] 4
    hf - [gf af ar]   2
        gf - [af ar]  3
            af - [ar] 4
                ar    5
        af - [gf ar]  3
            gf - [ar] 4
            ar - [gf] 4


ab - [aa bb]
    aa - bb
    bb - aa




*/
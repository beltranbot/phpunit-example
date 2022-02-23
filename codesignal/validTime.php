<?php

function solution($time)
{
    return preg_match("/([0-1][0-9]|[2][0-3]):[0-5][0-9]/", $time) ? true : false;
}

$time = "13:58";

print_r(solution($time));

echo "\n";

$time = "25:51";

print_r(solution($time));

echo "\n";

$time = "02:76";

print_r(solution($time));

echo "\n";

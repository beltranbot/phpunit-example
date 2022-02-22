<?php

function solution($address)
{
    preg_match("/^.*@(.*)$/", $address, $match);
    return $match[1];
}
print_r("res: " .  $res);
echo "\n";

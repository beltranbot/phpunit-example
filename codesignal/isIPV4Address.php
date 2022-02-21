<?php

function solution($inputString) {
    $octec = "([0-9]|[1-9][0-9]|[1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])";
    $validIp = preg_match("/^{$octec}\.{$octec}\.{$octec}\.{$octec}$/", $inputString);
    return $validIp ? true : false;
}

$res = solution('172.316.254.1');
print_r($res ? 'valid' : 'no valid');
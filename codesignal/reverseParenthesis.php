<?php

/*



Use backreferences (i.e. brackets) to keep only the parts of the expression that you want to remember. You can recall
the contents in the replacement string by using $1, $2, etc.:

preg_replace('/(text1)text2(text3)/is','$1$2',$html);


 */

function solution($str)
{
    while (strpos($str, "(") !== false) {
        $str = reverse($str);
    }
    return $str;
}

function reverse($str)
{
    preg_match('/\(([a-z]*)\)/', $str, $re);
    $toReplace = '/(\(' . $re[1] . '\))/';
    return preg_replace($toReplace, strrev($re[1]), $str);
}

$sol = solution("(foo(bar)bar)(zar)");
print_r($sol);

echo "\n";
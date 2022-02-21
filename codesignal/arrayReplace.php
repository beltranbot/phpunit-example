<?php

function solution($inputArray, $elemToReplace, $substitutionElem) {
    $outputArray = [];
    foreach ($inputArray as $item) {
        if ($elemToReplace === $item) {
            $outputArray[] = $substitutionElem;
            continue;
        }
        $outputArray[] = $item;
    }
    return $outputArray;
}

<?php

function isContinuousSequence (array $arr): bool
{
    $x = 1;
    if (count($arr) <= 1) {
        return false;
    } else {
        foreach ($arr as $index => $value) {
            print_r($x . "\n");
            $next_index = $index + 1;
            if ($x === count($arr)) {
                return true;
            } elseif ($arr[$next_index] !== $value + 1) {
                return false;
            } else {
                $x++;
            }
        }
    }
    return true;
}



var_dump(isContinuousSequence([10, 11, 12, 13]));     // true
var_dump(isContinuousSequence([10, 11, 12, 14, 15])); // false
var_dump(isContinuousSequence([1, 2, 2, 3]));         // false
var_dump(isContinuousSequence([]));                   // false
var_dump(isContinuousSequence([4]));                  // false

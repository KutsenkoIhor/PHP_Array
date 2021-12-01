<?php

function checkIfBalanced(string $arr): bool
{
    $stack = [];
    for ($i = 0, $len = strlen($arr); $i < $len; $i++) {
        if ($arr[$i] === "(") {
            array_push($stack, $arr[$i]);
        } elseif ($arr[$i] === ")") {
            $temp = array_pop($stack);
            if (($temp . $arr[$i]) !== '()') {
                return false;
            }
        }
    }
    return count($stack) === 0;
}

var_dump(checkIfBalanced('(5 + 6) * (7 + 8)/(4 +3)')); // true
var_dump(checkIfBalanced('(4 + 3))')); // false
var_dump(checkIfBalanced('())(')); // false
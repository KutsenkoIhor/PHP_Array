<?php

function bubbleSort($coll)
{
    $size = count($coll);
    do {
        $swapped = false;
        for ($i = 0; $i < $size -1; $i++) {
            if ($coll[$i] > $coll[$i + 1]) {
                $temp = $coll[$i];
                $coll[$i] = $coll[$i + 1];
                $coll[$i + 1] = $temp;
                $swapped = true;
            }
        }
        $size--;
    } while ($swapped);
    return $coll;
}

print_r(bubbleSort([3, 2, 10, -2, 0]));
// => Array
// => (
// =>     [0] => -2
// =>     [1] => 0
// =>     [2] => 2
// =>     [3] => 3
// =>     [4] => 10
// => )
<?php

function getSameCount(array $arrOne, array $arrTwo):int
{
    $input = array_unique($arrOne);

    $count = 0;
    foreach ($input as $one) {
        in_array($one, $arrTwo) ? $count++ : $count += 0;
    }
    echo "\n";
    return $count;
}

print_r(getSameCount([], [])); // 0
print_r(getSameCount([4, 4], [4, 4])); // 1
print_r(getSameCount([1, 10, 3], [10, 100, 35, 1])); // 2
print_r(getSameCount([1, 3, 2, 2], [3, 1, 1, 2])); // 3
print_r(getSameCount([5, 3, 3], ['one', 'two'])); // 0
print_r(getSameCount([1, 2], [])); // 0

//ПОЧЕМУ?
print_r(getSameCount([0], ['one', 'two'])); // 0



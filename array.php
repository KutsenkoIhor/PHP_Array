<?php

$cities = ['moscow', 'london', 'berlin', 'porto'];

function apply(array $arr, string $operation, int $index = null, $value = null):array
{
    if ($operation === 'reset') {
        $arr = [];
    }
    elseif ($operation === 'remove') {
        unset($arr[$index]);
    }
    elseif ($operation === 'change') {
        $arr[$index] = $value;
    }
    return $arr;
}

print_r(apply($cities, 'reset')); // []

print_r(apply($cities, 'remove', 1)); // ['moscow', 'berlin', 'porto']

print_r(apply($cities, 'change', 0, 'miami')); // ['miami', 'london', 'berlin', 'porto']

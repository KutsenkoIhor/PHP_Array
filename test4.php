<?php
//
//$russianCities = ['moscow', 'kazan'];
//$cities = ['milan', 'rome', ...$russianCities];
//print_r($cities);

function flatten(array $arr): array
{
    $newArr = [];
    foreach ($arr as $value) {
        if (is_array($value)) {
            $newArr = [...$newArr, ...$value];
        } else {
            $newArr[] = $value;
        }
    }
    return $newArr;
}

// Для пустого массива возвращается []
//print_r(flatten([])); // []
print_r(flatten([1, [3, 2], 9])); // [1, 3, 2, 9]
//print_r(flatten([1, [[2], [3]], [9]])); // [1, [2], [3], 9]

<?php

function getIntersectionOfSortedArray(array $arr1, array $arr2): array
{
    $resArr = [];
    foreach ($arr1 as $value1) {
        foreach ($arr2 as $value2) {
            if ($value1 === $value2) {
                $resArr[] = $value2;
            }
        }
    }
    return $resArr;
}

function getIntersectionOfSortedArrayy(array $arr1, array $arr2): array
{
    $resArr = [];
    $index1 = 0;
    $index2 = 0;
    while (($index1 < count($arr1)) && ($index2 < count($arr2))) {
        if ($arr1[$index1] === $arr2[$index2]) {
            $resArr[] = $arr2[$index2];
            $index1++;
            $index2++;
        } elseif ($arr1[$index1] > $arr2[$index2]) {
            $index2++;
        } elseif ($arr1[$index1] < $arr2[$index2]) {
            $index1++;
        }
    }
    return $resArr;
}


//print_r(getIntersectionOfSortedArray([10, 11, 24], [10, 13, 14, 18, 24, 30])); // [10, 24]
//print_r(getIntersectionOfSortedArray([10, 11, 24], [-2, 3, 4])); // []
//print_r(getIntersectionOfSortedArray([], [2])); // []

print_r(getIntersectionOfSortedArrayy([10, 11, 24], [10, 13, 14, 18, 24, 30])); // [10, 24]
print_r(getIntersectionOfSortedArrayy([10, 11, 24], [-2, 3, 4])); // []
print_r(getIntersectionOfSortedArrayy([], [2])); // []
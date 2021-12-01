<?php

function getTheNearestLocation(array $location, array $point)
{
    $temp = null;
    $long = 1000;
    foreach ($location as $adress) {
        [, $kordinatiMista] = $adress;
        [$xM, $yM] = $kordinatiMista;
        [$xP, $yP] = $point;
        $l = sqrt(($xM - $xP) ** 2 + ($yM - $yP) ** 2);
        if ($l < $long) {
            $long = $l;
            $temp = $adress;
        }
    }
    return $temp;
}


$locations = [
    ['Park', [10, 5]],
    ['Sea', [1, 3]],
    ['Museum', [8, 4]],
];
$currentPoint = [5, 5];


print_r(getTheNearestLocation([], $currentPoint)); // null
print_r(getTheNearestLocation($locations, $currentPoint)); // ['Museum', [8, 4]]

<?php

$people = [
    'Ivan' => ['age' => 21, 'weight' => 53],
    'Ihor' => ['age' => 22, 'weight' => 73],
    'Sasha' => ['age' => 18, 'weight' => 63],
];

$arr = ['time' => '23:17'];

print_r($people['Ihor']['age']);
echo "\n";
print_r("Сейчас у нас $arr[time] времени.");
echo "\n";
print_r("Я в свои {$people['Ihor']['age']} года имел вес {$people['Ihor']['weight']} в кг.");
echo "\n";
//слияние масивов
$arr1 = [12, 56];
$arr2 = [56 => 67, 87];
$arr3 = $arr1 + $arr2;
print_r($arr3 );
echo "\n";
$arr4 = array_merge($arr1, $arr2);
print_r($arr4);
echo "\n";

//isset() проверка
//is_array()
//in_array()
//array_key_exists()
//unset
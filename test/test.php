<?php

require_once __DIR__ . '/../vendor/autoload.php';

use OL\Arr\Arr;

/**
 * Create a object
 */
echo "\nCreate a object\n";
$array = new Arr([1,2,3]);
print_r($array);

/**
 * Immutable object
 */
echo "\nImmutable check\n";
$array->map(function ($value) {
  return $value + 1;
});
print_r($array);

/**
 * New object returned
 */
echo "\nMap test\n";
$array2 = $array->map(function ($value) {
  return $value + 1;
});
print_r($array2);

/**
 * Control test
 */
echo "\nExecuting the array_map function for control\n";
print_r(array_map(function($value) {
  return $value + 1;
}, [1,2,3]));

/**
 * Reduce test
 */
echo "\nReduce test\n";
$reduce = $array->reduce(function($carry, $item){
  $carry += $item;
  return $carry;
});

var_dump($reduce);

/**
 * Immutable check
 */
 echo "\nImmutable check\n";
 print_r($array);
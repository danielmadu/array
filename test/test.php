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
 * Map test
 */
echo "\nMap test\n";
$map = $array->map(function ($value) {
  return $value + 1;
});
print_r($map);

/**
 * Immutable object
 */
echo "\nImmutable check\n";
print_r($array);


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
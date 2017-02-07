<?php
require_once __DIR__ . '/../vendor/autoload.php';

use OL\Arr\Arr;

/**
 * Create a object
 */
$array = new Arr([1,2,3]);
print_r($array);


/**
 * Immutable object
 */
$array->map(function ($value) {
  return $value + 1;
});
print_r($array);

/**
 * New object returned
 */
$array2 = $array->map(function ($value) {
  return $value + 1;
});
print_r($array2);

print_r(array_map(function($value) {
  return $value + 1;
}, [1,2,3]));

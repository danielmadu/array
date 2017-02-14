<?php

namespace OL\Arr\Contracts;

interface Arr extends \ArrayAccess
{
    public function __construct(array $array);

    /**
     * Map a array and execute a function on each item from array an return a new array.
     *
     * @param callback $callback Function type callback to execute each element on array
     *
     * @return Array
     */
    public function map(callable $callback);


    /**
     * Reduce a array and execute a function on each item from array an return a value.
     *
     * @param callback $callback Function type callback to execute each element on array
     *
     * @return Mixed
     */
    public function reduce(callable $callback, $initial = NULL);

    /**
     * Filters elements of an array using a callback function
     *
     * @param callback $callback The callback function to use
     *
     * @return Arr
     */
    public function filter(callable $callback, $flag);
}

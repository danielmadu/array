<?php

namespace OL\Arr\Contracts;

interface Arr extends \ArrayAccess
{
    public function __construct(array $array);

    /**
     * Replaces one or more parts of the string with a given value.
     *
     * @param callback $callback Function type callback to execute each element on array
     *
     * @return Array
     */
    public function map(callable $callback);
}

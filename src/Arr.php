<?php

namespace OL\Arr;

use OL\Arr\Contracts\Arr as ArrContract;
use OL\Arr\Control as Control;

class Arr extends Control implements ArrContract
{
    /**
     * @var array Contents.
     */
    protected $contents = array();

    /**
     * Str constructor.
     *
     * @param array The array to build from.
     */
    public function __construct(array $array)
    {
        $this->contents = $array;
    }

    /**
     * Execute a function on each array element
     *
     * @param callable $callback
     * @return Arr
     */
    public function map(callable $callback)
    {
        return new Arr(array_map($callback, $this->contents));
    }

    /**
     * Reduce a array and return a value
     *
     * @param callable $callback
     * @param (optional) mixed $initial
     * @return Mixed
     */
    public function reduce(callable $callback, $initial = NULL)
    {
        return array_reduce($this->contents, $callback);
    }

}

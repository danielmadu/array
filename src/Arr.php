<?php

namespace OL\Arr;

use OL\Arr\Contracts\Arr as ArrContract;

class Arr implements ArrContract
{
    /**
     * @var array Contents.
     */
    protected $contents;

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
     * @return Array
     */
    public function map(callable $callback)
    {
        return new Arr(array_map($callback, $this->contents));
    }
}

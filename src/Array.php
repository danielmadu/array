<?php

namespace OL\Array;

use OL\Array\Contracts\Array as ArrayContract;

class Array
{
    /**
     * @var string Contents.
     */
    protected $contents;

    /**
     * Str constructor.
     *
     * @param string $string The string to build from.
     */
    public function __construct(array $array)
    {
        $this->contents = $array;
    }

    /**
     * Execute a function on each array element
     *
     * @return array
     */
    public function map($callback)
    {
        return new Array(array_map($callback, $this))
    }
}
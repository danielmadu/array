<?php

namespace OL\Arr;

class Control implements \Iterator {
    /**
    * Implements from ArrayAccess interface
    */
    public function offsetSet($offset, $value) {
        if (is_null($offset)) {
            $this->contents[] = $value;
        } else {
            $this->contents[$offset] = $value;
        }
    }

    public function offsetExists($offset) {
        return isset($this->contents[$offset]);
    }

    public function offsetUnset($offset) {
        unset($this->contents[$offset]);
    }

    public function offsetGet($offset) {
        return isset($this->contents[$offset]) ? $this->contents[$offset] : null;
    }

    /**
     * Implements from Iterator interface
     */

    function rewind() {
        $this->position = 0;
    }

    function current() {
        return $this->array[$this->position];
    }

    function key() {
        return $this->position;
    }

    function next() {
        ++$this->position;
    }

    function valid() {
        return isset($this->array[$this->position]);
    }

    /**
     * Magic method to debug the value of the object 
     */

    public function __debugInfo()
    {
        return (array) $this->contents;
    }
}
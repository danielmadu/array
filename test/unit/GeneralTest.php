<?php

use OL\Arr\Arr;

/**
 *
 */
class Generaltest extends PHPUnit_Framework_TestCase
{

  public function testMapImmutable()
  {
    $arrayA = new Arr([1,2,3]);
    $arrayB = $arrayA;
    $arrayB->map(function($value) {
        return $value + 1;
    });
    $this->assertEquals(
        $arrayA,
        $arrayB
    );
  }
}

<?php

use Nxu\TypedCollection\Collections\FloatCollection;
use PHPUnit\Framework\TestCase;

class FloatCollectionTest extends TestCase
{
    public function testIfFloatCanBeAdded()
    {
        $collection = new FloatCollection();
        $collection->push(3.9764);
        $this->assertEquals(1, $collection->count());
    }

    /**
     * @expectedException \Nxu\TypedCollection\Exceptions\InvalidTypeException
     */
    public function testIfOnlyFloatCanBeAdded()
    {
        $collection = new FloatCollection();
        $collection->push('te beütöd, én majd játszom vele');
    }
}

<?php

use Nxu\TypedCollection\Collections\FloatCollection;
use Nxu\TypedCollection\Exceptions\InvalidTypeException;
use PHPUnit\Framework\TestCase;

class FloatCollectionTest extends TestCase
{
    public function testIfFloatCanBeAdded()
    {
        $collection = new FloatCollection();
        $collection->push(3.9764);
        $this->assertEquals(1, $collection->count());
    }

    public function testIfOnlyFloatCanBeAdded()
    {
        $this->expectException(InvalidTypeException::class);
        $collection = new FloatCollection();
        $collection->push('te beütöd, én majd játszom vele');
    }
}

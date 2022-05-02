<?php

use Nxu\TypedCollection\Collections\IntegerCollection;
use Nxu\TypedCollection\Exceptions\InvalidTypeException;
use PHPUnit\Framework\TestCase;

class IntegerCollectionTest extends TestCase
{
    public function testIfIntegerCanBeAdded()
    {
        $collection = new IntegerCollection();
        $collection->push(1996);
        $this->assertEquals(1, $collection->count());
    }

    public function testIfOnlyIntegerCanBeAdded()
    {
        $this->expectException(InvalidTypeException::class);
        $collection = new IntegerCollection();
        $collection->push('this ain\'t no integer');
    }
}

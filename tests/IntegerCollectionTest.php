<?php

use Nxu\TypedCollection\Collections\IntegerCollection;
use PHPUnit\Framework\TestCase;

class IntegerCollectionTest extends TestCase
{
    public function testIfIntegerCanBeAdded()
    {
        $collection = new IntegerCollection();
        $collection->push(1996);
        $this->assertEquals(1, $collection->count());
    }

    /**
     * @expectedException \Nxu\TypedCollection\Exceptions\InvalidTypeException
     */
    public function testIfOnlyIntegerCanBeAdded()
    {
        $collection = new IntegerCollection();
        $collection->push('this ain\'t no integer');
    }
}

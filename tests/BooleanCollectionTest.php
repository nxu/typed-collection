<?php

use Nxu\TypedCollection\Collections\BooleanCollection;
use PHPUnit\Framework\TestCase;

class BooleanCollectionTest extends TestCase
{
    public function testIfBooleanCanBeAdded()
    {
        $collection = new BooleanCollection();
        $collection->push(true);
        $collection->push(false);
        $this->assertEquals(2, $collection->count());
    }

    /**
     * @expectedException \Nxu\TypedCollection\Exceptions\InvalidTypeException
     */
    public function testIfOnlyBooleanCanBeAdded()
    {
        $collection = new BooleanCollection();
        $collection->push('this ain\'t no boolean');
    }
}

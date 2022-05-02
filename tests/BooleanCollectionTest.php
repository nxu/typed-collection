<?php

use Nxu\TypedCollection\Collections\BooleanCollection;
use Nxu\TypedCollection\Exceptions\InvalidTypeException;
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

    public function testIfOnlyBooleanCanBeAdded()
    {
        $this->expectException(InvalidTypeException::class);
        $collection = new BooleanCollection();
        $collection->push('this ain\'t no boolean');
    }
}

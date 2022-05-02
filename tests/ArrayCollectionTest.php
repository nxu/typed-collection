<?php

use Nxu\TypedCollection\Collections\ArrayCollection;
use Nxu\TypedCollection\Exceptions\InvalidTypeException;
use PHPUnit\Framework\TestCase;

class ArrayCollectionTest extends TestCase
{
    public function testIfArrayCanBeAdded()
    {
        $collection = new ArrayCollection();
        $collection->push(['this', 'is', 'an', 'array']);
        $this->assertEquals(1, $collection->count());
    }

    public function testIfOnlyArrayCanBeAdded()
    {
        $this->expectException(InvalidTypeException::class);
        $collection = new ArrayCollection();
        $collection->push('this ain\'t no array');
    }
}

<?php

use Nxu\TypedCollection\Collections\ArrayCollection;
use PHPUnit\Framework\TestCase;

class ArrayCollectionTest extends TestCase
{
    public function testIfArrayCanBeAdded()
    {
        $collection = new ArrayCollection();
        $collection->push(['this', 'is', 'an', 'array']);
        $this->assertEquals(1, $collection->count());
    }

    /**
     * @expectedException \Nxu\TypedCollection\Exceptions\InvalidTypeException
     */
    public function testIfOnlyArrayCanBeAdded()
    {
        $collection = new ArrayCollection();
        $collection->push('this ain\'t no array');
    }
}

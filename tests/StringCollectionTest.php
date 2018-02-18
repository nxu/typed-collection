<?php

use Nxu\TypedCollection\Collections\StringCollection;
use PHPUnit\Framework\TestCase;

class StringCollectionTest extends TestCase
{
    public function testIfStringCanBeAdded()
    {
        $collection = new StringCollection();
        $collection->push('well hello there');
        $this->assertEquals(1, $collection->count());
    }

    /**
     * @expectedException \Nxu\TypedCollection\Exceptions\InvalidTypeException
     */
    public function testIfOnlyStringCanBeAdded()
    {
        $collection = new StringCollection();
        $collection->push(1234);
    }
}

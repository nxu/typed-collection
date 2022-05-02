<?php

use Nxu\TypedCollection\Collections\StringCollection;
use Nxu\TypedCollection\Exceptions\InvalidTypeException;
use PHPUnit\Framework\TestCase;

class StringCollectionTest extends TestCase
{
    public function testIfStringCanBeAdded()
    {
        $collection = new StringCollection();
        $collection->push('well hello there');
        $this->assertEquals(1, $collection->count());
    }

    public function testIfOnlyStringCanBeAdded()
    {
        $this->expectException(InvalidTypeException::class);
        $collection = new StringCollection();
        $collection->push(1234);
    }
}

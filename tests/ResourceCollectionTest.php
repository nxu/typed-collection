<?php

use Nxu\TypedCollection\Collections\ResourceCollection;
use Nxu\TypedCollection\Exceptions\InvalidTypeException;
use PHPUnit\Framework\TestCase;

class ResourceCollectionTest extends TestCase
{
    public function testIfResourceCanBeAdded()
    {
        $collection = new ResourceCollection();
        $collection->push(tmpfile());
        $this->assertEquals(1, $collection->count());
    }

    public function testIfOnlyResourceCanBeAdded()
    {
        $this->expectException(InvalidTypeException::class);
        $collection = new ResourceCollection();
        $collection->push('this ain\'t no resource');
    }
}

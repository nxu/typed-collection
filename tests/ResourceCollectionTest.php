<?php

use Nxu\TypedCollection\Collections\ResourceCollection;
use PHPUnit\Framework\TestCase;

class ResourceCollectionTest extends TestCase
{
    public function testIfResourceCanBeAdded()
    {
        $collection = new ResourceCollection();
        $collection->push(tmpfile());
        $this->assertEquals(1, $collection->count());
    }

    /**
     * @expectedException \Nxu\TypedCollection\Exceptions\InvalidTypeException
     */
    public function testIfOnlyResourceCanBeAdded()
    {
        $collection = new ResourceCollection();
        $collection->push('this ain\'t no resource');
    }
}

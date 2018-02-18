<?php

use Nxu\TypedCollection\Collections\CallableCollection;
use PHPUnit\Framework\TestCase;

class CallableCollectionTest extends TestCase
{
    public function testIfCallableCanBeAdded()
    {
        $collection = new CallableCollection();
        $collection->push(function () {});
        $this->assertEquals(1, $collection->count());
    }

    /**
     * @expectedException \Nxu\TypedCollection\Exceptions\InvalidTypeException
     */
    public function testIfOnlyCallableCanBeAdded()
    {
        $collection = new CallableCollection();
        $collection->push('this ain\'t no callable');
    }
}

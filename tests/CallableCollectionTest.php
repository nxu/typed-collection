<?php

use Nxu\TypedCollection\Collections\CallableCollection;
use Nxu\TypedCollection\Exceptions\InvalidTypeException;
use PHPUnit\Framework\TestCase;

class CallableCollectionTest extends TestCase
{
    public function testIfCallableCanBeAdded()
    {
        $collection = new CallableCollection();
        $collection->push(function () {
        });
        $this->assertEquals(1, $collection->count());
    }

    public function testIfOnlyCallableCanBeAdded()
    {
        $this->expectException(InvalidTypeException::class);
        $collection = new CallableCollection();
        $collection->push('this ain\'t no callable');
    }
}

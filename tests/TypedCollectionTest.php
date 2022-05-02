<?php

use Nxu\TypedCollection\Collections\DateTimeInterfaceCollection;
use Nxu\TypedCollection\Exceptions\InvalidTypeException;
use PHPUnit\Framework\TestCase;

class TestTypedCollection extends TestCase
{
    public function testIfCollectionCanBeInitializedWithRightTypes()
    {
        $fromArray = new DateTimeInterfaceCollection([new DateTime(), new DateTime()]);
        $fromCollection = new DateTimeInterfaceCollection(collect([new DateTime(), new DateTime()]));

        $this->assertInstanceOf(DateTimeInterfaceCollection::class, $fromArray);
        $this->assertInstanceOf(DateTimeInterfaceCollection::class, $fromCollection);
    }

    public function testIfCollectionInitializationFailsWithWrongType()
    {
        $this->expectException(InvalidTypeException::class);
        new DateTimeInterfaceCollection(['hello', 'world']);
    }

    public function testIfPushWorksWithRightType()
    {
        $collection = new DateTimeInterfaceCollection();
        $collection->push(new DateTime());

        $this->assertEquals(1, $collection->count());
    }

    public function testIfPushFailsWithWrongType()
    {
        $this->expectException(InvalidTypeException::class);
        $collection = new DateTimeInterfaceCollection();
        $collection->push(['omae wa mou shindeiru']);
    }

    public function testIfPutWorksWithRightType()
    {
        $collection = new DateTimeInterfaceCollection();
        $collection->put(1, new DateTime());

        $this->assertEquals(1, $collection->count());
    }

    public function testIfPutFailsWithWrongType()
    {
        $this->expectException(InvalidTypeException::class);
        $collection = new DateTimeInterfaceCollection();
        $collection->put(1, ['omae wa mou shindeiru']);
    }

    public function testIfOffsetSetWorksWithRightType()
    {
        $collection = new DateTimeInterfaceCollection();
        $collection->offsetSet(1, new DateTime());

        $this->assertEquals(1, $collection->count());
    }

    public function testIfOffsetSetFailsWithWrongType()
    {
        $this->expectException(InvalidTypeException::class);
        $collection = new DateTimeInterfaceCollection();
        $collection->offsetSet(1, ['omae wa mou shindeiru']);
    }
}

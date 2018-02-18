<?php

use Nxu\TypedCollection\Collections\DateTimeCollection;
use PHPUnit\Framework\TestCase;

class TestTypedCollection extends TestCase
{
    public function testIfCollectionCanBeInitializedWithRightTypes()
    {
        $fromArray = new DateTimeCollection([new DateTime(), new DateTime()]);
        $fromCollection = new DateTimeCollection(collect([new DateTime(), new DateTime()]));

        $this->assertInstanceOf(DateTimeCollection::class, $fromArray);
        $this->assertInstanceOf(DateTimeCollection::class, $fromCollection);
    }

    /**
     * @expectedException  Nxu\TypedCollection\Exceptions\InvalidTypeException
     */
    public function testIfCollectionInitializationFailsWithWrongType()
    {
        new DateTimeCollection(['hello', 'world']);
    }

    public function testIfPushWorksWithRightType()
    {
        $collection = new DateTimeCollection();
        $collection->push(new DateTime());

        $this->assertEquals(1, $collection->count());
    }

    /**
     * @expectedException \Nxu\TypedCollection\Exceptions\InvalidTypeException
     */
    public function testIfPushFailsWithWrongType()
    {
        $collection = new DateTimeCollection();
        $collection->push(['omae wa mou shindeiru']);
    }

    public function testIfPutWorksWithRightType()
    {
        $collection = new DateTimeCollection();
        $collection->put(1, new DateTime());

        $this->assertEquals(1, $collection->count());
    }

    /**
     * @expectedException \Nxu\TypedCollection\Exceptions\InvalidTypeException
     */
    public function testIfPutFailsWithWrongType()
    {
        $collection = new DateTimeCollection();
        $collection->put(1, ['omae wa mou shindeiru']);
    }

    public function testIfOffsetSetWorksWithRightType()
    {
        $collection = new DateTimeCollection();
        $collection->offsetSet(1, new DateTime());

        $this->assertEquals(1, $collection->count());
    }

    /**
     * @expectedException \Nxu\TypedCollection\Exceptions\InvalidTypeException
     */
    public function testIfOffsetSetFailsWithWrongType()
    {
        $collection = new DateTimeCollection();
        $collection->offsetSet(1, ['omae wa mou shindeiru']);
    }
}

<?php

use Jokes\Support\Collection;
use PHPUnit\Framework\TestCase;

class CollectionTest extends TestCase
{
    /** @test */
    public function empty_initiated_collection_return_empty_value()
    {
        $collection = new Collection;

        $this->assertEmpty($collection->get());
    }

    /** @test */
    public function input_items_count_is_correct()
    {
        $collection = new Collection(['one', 'two', 'three']);

        $this->assertCount(3, $collection->get());
        $this->assertEquals(3, $collection->count());
    }

    /** @test */
    public function items_passed_must_equal_what_is_returned()
    {
        $collection = new Collection(['one', 'two', 'three']);

        $this->assertEquals(3, $collection->count());
        $this->assertEquals($collection->get()[0], 'one');
        $this->assertEquals($collection->get()[2], 'three');
    }

    /** @test */
    public function collection_is_an_instance_of_iterator_aggrate()
    {
        $collection = new Collection;

        $this->assertInstanceOf(IteratorAggregate::class, $collection);
    }

    /** @test */
    public function collection_can_be_iterated_on()
    {
        $collection = new Collection(['one', 'two', 'three']);

        $items = [];

        foreach ($collection as $item) {
            $items[] = $item;
        }

        $this->assertCount(3, $items);
    }
}

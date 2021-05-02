<?php

use App\Support\Collection;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertCount;
use function PHPUnit\Framework\assertEmpty;
use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertInstanceOf;
use function PHPUnit\Framework\assertIsString;

class CollectionTest extends TestCase
{
    /** @test */
    public function empty_instantiated_collection_returns_no_items()
    {
        $collection = new Collection;
        assertEmpty($collection->get());
    }

    /** @test */
    public function count_is_correct_for_items_passed_in()
    {
        $collection = new Collection([
            "one", "two", "three"
        ]);
        assertEquals(3, $collection->count());
    }

    /** @test */
    public function items_returned_match_items_passed_id()
    {
        $collection = new Collection([
            "one", "two", "three"
        ]);
        assertCount(3, $collection->get());
        assertEquals($collection->get()[0], "one");
        assertEquals($collection->get()[1], "two");
        assertEquals($collection->get()[2], "three");
    }

    /** @test */
    public function collection_is_instance_of_iterator_aggregate()
    {
        $collection = new Collection();
        $this->assertInstanceOf(IteratorAggregate::class, $collection);
    }

    /** @test */
    public function collection_can_be_iterated()
    {
        $collection = new Collection([
            "one", "two", "three"
        ]);
        $items = [];
        foreach ($collection as $item) {
            $items[] = $item;
        }
        assertCount(3, $items);
        assertInstanceOf(ArrayIterator::class, $collection->getIterator());
    }

    /** @test */
    public function collection_can_be_merge_with_another_collection()
    {
        $collection1 = new Collection(["one", "two"]);
        $collection2 = new Collection(["three", "four", "five"]);
        $collection1->merge($collection2);
        $this->assertCount(5, $collection1->get());
        $this->assertEquals(5, $collection1->count());
    }

    /** @test */
    public function can_add_to_existing_collection()
    {
        $collection = new Collection(["one", "two"]);
        $collection->add(["three"]);
        $this->assertCount(3, $collection->get());
        $this->assertEquals(3, $collection->count());
    }

    /** @test */
    public function return_json_encoded_items()
    {
        $collection = new Collection([
            ["username" => "alex"],
            ["username" => "billy"],
        ]);
        assertIsString($collection->toJson());
        $this->assertEquals('[{"username":"alex"},{"username":"billy"}]', $collection->toJson());
    }

    /** @test */
    public function json_encoding_a_collection_object_returns_json()
    {
        $collection = new Collection([
            ["username" => "alex"],
            ["username" => "billy"],
        ]);
        $encoded = json_encode($collection);
        assertIsString($encoded);
        $this->assertEquals('[{"username":"alex"},{"username":"billy"}]', $encoded);
    }
}

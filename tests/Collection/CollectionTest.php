<?php

namespace Tests\Collection;

use PHPUnit\Framework\TestCase;
use PHPCollection\Collection;
use PHPCollection\Interfaces\CollectionInterface;
use PHPCollection\ImmutableCollection;
use Tests\Collection\Entity\Product;


class CollectionTest extends TestCase
{

    private $product1;

    private $product2;

    private $product3;

    protected function setUp()
    {
        $this->product1 = new Product();
        $this->product1->setId(1);
        $this->product1->setName('Product 1');

        $this->product2 = new Product();
        $this->product2->setId(2);
        $this->product2->setName('Product 2');

        $this->product3 = new Product();
        $this->product3->setId(3);
        $this->product3->setName('Product 3');
    }

    public function testShouldCreateOneCollection()
    {
        $collection = Collection::create();

        $this->assertInstanceOf(CollectionInterface::class, $collection);

        return $collection;
    }

    /**
     * @depends testShouldCreateOneCollection
     */
    public function testShouldAddItemsToCollection(CollectionInterface $collection)
    {
        $collection->add($this->product1);
        $collection->add($this->product2);
        $collection->add($this->product3);

        $this->assertNotEmpty($collection->getIterator());

        return $collection;
    }

    /**
     * @depends testShouldAddItemsToCollection
     */
    public function testShouldRemoveOneItemOfTheCollection(CollectionInterface $collection)
    {
        $collection->remove($this->product3);

        $atual = count($collection->getIterator());
        $expected = 2;

        $this->assertEquals($expected, $atual);

        return $collection;
    }

    /**
     * @depends testShouldRemoveOneItemOfTheCollection
     */
    public function testShouldCleanTheCollection(CollectionInterface $collection)
    {
        $collection->clear();

        $this->assertEmpty($collection->getIterator());

        return $collection;
    }

    /**
     * 
     * @depends testShouldCleanTheCollection
     */
    public function testToGetImmutableCollection(Collection $collection)
    {
        $this->assertInstanceOf(ImmutableCollection::class, $collection->immutable());
    }

}

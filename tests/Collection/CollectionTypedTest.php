<?php

namespace Tests\Collection;

use PHPUnit\Framework\TestCase;
use PHPCollection\Collection;
use Tests\Collection\Entity\Product;


class CollectionTypedTest extends TestCase
{

    /**
     * @expectedException \PHPCollection\Exceptions\TypeException
     */
    public function testShouldCheckCollectionTypeWhenAddItem()
    {
        $collection = Collection::create([], Product::class);
        $collection->add('Product 1');
    }

}

<?php

declare (strict_types = 1);

namespace PHPCollection;

use PHPCollection\Interfaces\ImmutableCollectionInterface;
use PHPCollection\Interfaces\CollectionInterface;


final class ImmutableCollection implements ImmutableCollectionInterface
{

    /**
     *
     * @var CollectionInterface
     */
    private $collection;

    public function __construct(CollectionInterface $collection)
    {
        $this->collection = $collection;
    }

    public function getIterator()
    {
        return $this->collection->getIterator();
    }

}

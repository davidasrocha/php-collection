<?php

namespace PHPCollection;

use PHPCollection\Interfaces\ImmutableCollectionInterface;
use IteratorAggregate;


final class ImmutableCollection implements ImmutableCollectionInterface
{

    private $iterator;

    public function __construct(IteratorAggregate $items)
    {
        $this->iterator = $items;
    }

    public function getIterator()
    {
        return $this->iterator->getIterator();
    }

}
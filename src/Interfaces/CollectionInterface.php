<?php

namespace PHPCollection\Interfaces;

use IteratorAggregate;
use PHPCollection\Exceptions\TypeException;
use PHPCollection\Interfaces\ImmutableCollectionInterface;


interface CollectionInterface extends IteratorAggregate
{

    /**
     * 
     * @param mixed $item
     * @throws TypeException
     */
    public function add($item);

    /**
     * 
     * @param mixed $item
     */
    public function remove($item);

    /**
     * 
     * @return ImmutableCollectionInterface
     */
    public function getImmutableCollection();

}
<?php

namespace PHPCollection\Interfaces;

use IteratorAggregate;


interface CollectionInterface extends IteratorAggregate
{

    public function add($item);

    public function remove($item);

    public function getImmutableCollection();

}
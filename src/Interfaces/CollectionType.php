<?php

namespace Collection\Interfaces;

use IteratorAggregate;

interface CollectionType extends IteratorAggregate {

    public function add($item);

    public function remove($item);

    public function clear();
}
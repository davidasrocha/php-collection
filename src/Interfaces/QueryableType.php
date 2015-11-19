<?php

namespace Collection\Interfaces;

use IteratorAggregate;

interface QueryableType extends IteratorAggregate {

    public function filter($params);

    public function byKey($key);

    public function byProperty($property);
}
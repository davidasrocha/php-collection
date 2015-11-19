<?php

namespace Collection\Interfaces;

use IteratorAggregate;

interface ListType extends IteratorAggregate {

    public function first();

    public function last();

    public function skip($step);

    public function take($length);
}
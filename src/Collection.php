<?php

namespace Collection;

use Collection\Interfaces\CollectionType;
use ArrayIterator;
use Exception;

class Collection implements CollectionType {

    private $iterator;
    private $typed;

    public function __construct($iterator = [], $typed = null) {
    	$this->iterator = new ArrayIterator($iterator);
    	$this->typed = $typed;
    }

    public function add($item) {
        if (!is_null($this->typed)) {
            if (!($item instanceOf $this->typed)) {
                throw new Exception("Type isn't permited");
            }
        }

        $this->iterator[] = $item;
    }

    public function remove($item) {
    	if (!in_array($item, $this->iterator)) {
            // ...
    	}

        $key = array_search($item, $this->iterator);
	    unset($this->iterator[$key]);
    }

    public function clear() {
        $this->iterator = new ArrayIterator();
    }

    public function getIterator() {
        return $this->iterator;
    }

}
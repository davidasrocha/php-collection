<?php

namespace Collection;

use Collection\Interfaces;
use Exception;

class Collection implements Interfaces\Collection 
{

    private $iterator;
    private $typed;

    public function __construct(array $iterator = [], $typed = null) 
    {
    	$this->iterator = new \ArrayIterator($iterator);
    	$this->typed = $typed;
    }

    public function add($item) 
    {
        if (!is_null($this->typed)) {
            if (!($item instanceOf $this->typed)) {
                throw new Exception("Type isn't permited");
            }
        }

        $this->iterator->append($item);
    }

    public function remove($item) 
    {
        foreach ($this->iterator as $k => $iterator) {
            if ($item === $iterator) {
                $this->iterator->offsetUnset($k);
            }
        }
    }

    public function clear() 
    {
        $this->iterator = new \ArrayIterator();
    }

    public function getIterator() 
    {
        return $this->iterator;
    }

}
<?php

namespace PHPCollection;

use ArrayIterator;
use PHPCollection\Exceptions\TypeException;
use PHPCollection\ImmutableCollection;
use PHPCollection\Interfaces\CollectionInterface;
use PHPCollection\Interfaces\ImmutableCollectionInterface;


final class Collection implements CollectionInterface
{

    private $items;

    private $typed;

    private function __construct(array $items, $typed)
    {
        $this->items = new ArrayIterator($items);
        $this->typed = $typed;
    }

    private function __clone()
    {
        
    }

    /**
     * 
     * @param array $iterator
     * @param string $typed
     * @return Collection
     */
    public static function create(array $iterator = [], $typed = null)
    {
        if (!empty($typed)) {
            $typed = trim($typed);
        }
        return new static($iterator, $typed);
    }

    public function add($item)
    {
        if (!empty($this->typed) && !($item instanceOf $this->typed)) {
            throw new TypeException("Type isn't permited");
        }

        $this->items->append($item);
    }

    public function remove($item)
    {
        foreach ($this->items as $k => $iterator) {
            if ($item == $iterator) {
                $this->items->offsetUnset($k);
                break;
            }
        }
    }

    public function clear()
    {
        $this->items = [];
    }

    public function getIterator()
    {
        return $this->items;
    }

    /**
     * 
     * @return ImmutableCollectionInterface
     */
    public function getImmutableCollection()
    {
        return new ImmutableCollection($this);
    }

}
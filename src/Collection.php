<?php

namespace PHPCollection;

use Exception;
use ArrayIterator;
use PHPCollection\Interfaces\CollectionInterface;
use PHPCollection\ImmutableCollection;
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
        return new Collection($iterator, $typed);
    }

    public function add($item)
    {
        if (!is_null($this->typed)) {
            if (!($item instanceOf $this->typed)) {
                throw new Exception("Type isn't permited");
            }
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
        $this->items = new ArrayIterator();
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

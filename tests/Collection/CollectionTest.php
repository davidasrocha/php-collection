<?php

namespace Tests\Collection;

use Collection\Collection;

class CollectionTest extends \PHPUnit_Framework_TestCase {

    private $collection;

	protected function setUp() {
        $this->collection = new Collection();
	}

    public function testParaCriacaoDeUmaColecao() {
        $this->assertInstanceOf('Collection\Collection', $this->collection);

        return $this->collection;
    }

    /**
     * @depends testParaCriacaoDeUmaColecao
     */
    public function testParaAdicionarItemParaColecao() {
        $this->collection->add('Item 1');

        $collection = [];
        foreach ($this->collection as $item) {
            $collection[] = $item;
        }

        $this->assertNotEmpty($collection);
    }

    /**
     * @depends testParaAdicionarItemParaColecao
     */
    public function testParaDeLimpezaDeColecao() {
        $this->collection->clear();

        $collection = [];
        foreach ($this->collection as $item) {
            $collection[] = $item;
        }

        $this->assertEmpty($collection);
    }

}
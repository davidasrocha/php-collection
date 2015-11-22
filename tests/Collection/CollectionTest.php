<?php

namespace Tests\Collection;

use Collection\Collection;

class CollectionTest extends \PHPUnit_Framework_TestCase 
{

    private $collection;

	protected function setUp() 
    {
        $this->collection = new Collection();
	}

    public function testParaCriacaoDeUmaColecao() {
        $this->assertInstanceOf(Collection::class, $this->collection);

        return $this->collection;
    }

    /**
     * @depends testParaCriacaoDeUmaColecao
     */
    public function testParaAdicionarItensParaColecao() 
    {
        $this->collection->add('Item 1');
        $this->collection->add('Item 2');
        $this->collection->add('Item 3');

        $this->assertNotEmpty($this->collection->getIterator());

        return $this->collection;
    }

    /**
     * @depends testParaAdicionarItensParaColecao
     */
    public function testParaRemoverItemDaColecao(Collection $collection) 
    {
        $collection->remove('Item 3');

        $atual = count($collection->getIterator());
        $expected = 2;

        $this->assertEquals($expected, $atual);

        return $this->collection;
    }

    /**
     * @depends testParaRemoverItemDaColecao
     */
    public function testParaDeLimpezaDeColecao(Collection $collection) 
    {
        $collection->clear();

        $this->assertEmpty($this->collection->getIterator());
    }

}
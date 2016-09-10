<?php

namespace Tests\Collection;

use PHPCollection\Collection;
use Tests\Collection\Entity\Product;


class CollectionTypedTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @expectedException \PHPCollection\Exceptions\TypeException
     */
    public function testParaVerificacaoDeColecaoTipada()
    {
        $collection = Collection::create([], Product::class);
        $collection->add('Product 1');
    }

}
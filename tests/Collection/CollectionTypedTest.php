<?php

namespace Tests\Collection;

use Exception;
use PHPCollection\Collection;
use Tests\Collection\Entity\Product;


class CollectionTypedTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @expectedException Exception
     */
    public function testParaVerificacaoDeColecaoTipada()
    {
        $collection = Collection::create([], Product::class);
        $collection->add('Product 1');
    }

}
<?php

namespace Tests\Collection;

use Collection\Collection;

class CollectionTypedTest extends \PHPUnit_Framework_TestCase {

    /**
     * @expectedException \Exception
	 */
    public function testParaVerificacaoDeColecaoTipada() {
        $collection = new Collection([], Tests\Collection\Entity\Produto::class);
        $collection->add('Produto 1');
    }

}
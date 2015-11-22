<?php

require_once __DIR__ . '/vendor/autoload.php';

use Collection\Collection;
use Collection\Listable;

$collection = new Collection();

$collection->add('Item 1');
$collection->add('Item 2');
$collection->add('Item 3');


foreach ($collection as $k => $item) {
    echo $item . "\n";
}
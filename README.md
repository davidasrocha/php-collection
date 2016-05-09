[![Build Status](https://travis-ci.org/davidasrocha/php-collection.png?branch=master)](https://travis-ci.org/davidasrocha/php-collection)

PHP Collection


<b>How to use</b>


Without typing
```
use PHPCollection\Collection;


$collection = Collection::create();

$collection->add('Item 1');
$collection->add('Item 2');
$collection->add('Item 3');
$collection->add('Item 4');
$collection->add('Item 5');
```


With typing
```
use PHPCollection\Collection;
use Entity\Product;


$collection = Collection::create([], Product:class);

$collection->add(new Product(1001, 'Product 1'));
$collection->add(new Product(2001, 'Product 2'));
$collection->add(new Product(3001, 'Product 3'));
$collection->add(new Product(4001, 'Product 4'));
$collection->add(new Product(5001, 'Product 5'));
```
PHP Collection


<b>How to use</b>


Without typing
```
use Collection\Collection;


$collection = new Collection();

$collection->add('Item 1');
$collection->add('Item 2');
$collection->add('Item 3');
$collection->add('Item 4');
$collection->add('Item 5');
```


With typing
```
use Collection\Collection;
use Entity\Product;


$collection = new Collection([], Product:class);

$collection->add(new Product(1001, 'Product 1'));
$collection->add(new Product(2001, 'Product 2'));
$collection->add(new Product(3001, 'Product 3'));
$collection->add(new Product(4001, 'Product 4'));
$collection->add(new Product(5001, 'Product 5'));
```
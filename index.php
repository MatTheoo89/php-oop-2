<?php

    require __DIR__ . '/models/Product.php';
    require __DIR__ . '/models/Category.php';
    require __DIR__ . '/models/Food.php';
    require __DIR__ . '/models/Toy.php';
    require __DIR__ . '/models/Accessory.php';

    // TEST Inserimento PRODOTTO CIBO

    $Collare = new Accessory(1, 'Collare', 'Wolfone', new category('dog'), 15, 'https://m.media-amazon.com/images/I/61GvWH-TV4L._AC_SL1500_.jpg', 'Cuoio', 'Middle');

    $products = [
        new Food(1, 'Osso', 'Mio brand', new category('dog'), 10, 'https://animalmania.it/vendita/3456-large_default/chew-it-small-osso-curativo-cane.jpg', 80, ['ingr1', 'ingr2', 'ingr3'],'gusto osso'),
        new Toy(1, 'Ciambella', 'TINGERIA', new category('cat'), 12, 'https://m.media-amazon.com/images/I/71PXlW+ZGKL._AC_SL1200_.jpg', 50, 'small'),
        new Accessory(1, 'Collare', 'Wolfone', new category('dog'), 15, 'https://m.media-amazon.com/images/I/61GvWH-TV4L._AC_SL1500_.jpg', 'Cuoio', 'Middle'),
        new Food(2, 'Osso', 'Mio brand', new category('dog'), 10, 'https://animalmania.it/vendita/3456-large_default/chew-it-small-osso-curativo-cane.jpg', 80, ['ingr1', 'ingr2', 'ingr3'],'gusto osso'),
        new Toy(3, 'Ciambella', 'TINGERIA', new category('cat'), 12, 'https://m.media-amazon.com/images/I/71PXlW+ZGKL._AC_SL1200_.jpg', 50, 'small'),
        new Accessory(3, 'Collare', 'Wolfone', new category('dog'), 15, 'https://m.media-amazon.com/images/I/61GvWH-TV4L._AC_SL1500_.jpg', 'Cuoio', 'Middle')
    ];


    //var_dump($Food);
    // var_dump($toy);
    // var_dump($Collare);
    // foreach($products as $product);
    // var_dump($products[0]->ingredients);
    // var_dump(get_class($product) );


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.css' integrity='sha512-bR79Bg78Wmn33N5nvkEyg66hNg+xF/Q8NA8YABbj+4sBngYhv9P8eum19hdjYcY7vXk/vRkhM3v/ZndtgEXRWw==' crossorigin='anonymous'/>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css' integrity='sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==' crossorigin='anonymous'/>
    <title>Animals Store</title>
    <style>
        body{
            background-color: #333;
            color: #fcfcfc;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="row">
            <?php foreach($products as $product) : ?>
            <div class="col-4 mb-5">
                <div class="card bg-dark">
                    <img src="<?php echo $product->image ?>" class="card-img-top" alt="<?php echo $product->name ?>">
                    <div class="card-body">
                        <h3 class="card-title fw-bold"><?php echo $product->name ?></h3>
                        <h5 class="card-title">Marca: <?php echo $product->brand ?></h5>
                        <?php if(property_exists($product, 'ingredients')) : ?>
                            <h5 class="card-title mb-4">ingredienti:</h5>
                            <ul class="d-flex">
                            <?php foreach($product->ingredients as $ingredient ) :?>
                                <li class="me-4"><?php echo $ingredient ?></li>
                        <?php endforeach;?>
                        </ul>
                        <?php endif;?>
                        <h6 class="card-title">Categoria: <?php echo $product->category->GetCategoryIcon() ?></h6>
                        <h6 class="card-title">Tipo: <?php echo get_class($product)?></h6>
                        <span class="card-title">ID: <?php echo get_class($product)?><?php echo $product->id?></span>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
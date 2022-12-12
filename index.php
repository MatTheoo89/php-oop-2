<?php

    require __DIR__ . '/models/Product.php';
    require __DIR__ . '/models/Category.php';
    require __DIR__ . '/models/Food.php';
    require __DIR__ . '/models/Toy.php';
    require __DIR__ . '/models/Accessory.php';

    // TEST Inserimento PRODOTTO CIBO

    $Food = new Food(1, 'Osso', 'Mio brand', new category('cane', 'cat'), 10, 'https://animalmania.it/vendita/3456-large_default/chew-it-small-osso-curativo-cane.jpg', 80, ['ingr1', 'ingr2', 'ingr3'],'gusto osso');

    // TEST Inserimento PRODOTTO GIOCO

    $toy = new Toy(1, 'Ciambella', 'TINGERIA', new category('cane', 'cat'), 12, 'https://m.media-amazon.com/images/I/71PXlW+ZGKL._AC_SL1200_.jpg', 50, 'small');

    var_dump($Food);
    var_dump($toy);

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
            color: #fff;
        }
    </style>
</head>
<body>
    
</body>
</html>
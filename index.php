<?php
require __DIR__ . '/models/products.php';
require __DIR__ . '/models/Animale.php';
require __DIR__ . '/models/Cucce.php';
require __DIR__ . '/models/laser.php';
require __DIR__ . '/models/Ossa.php';


$Animali = [
    new Animale("Cane"),
    new Animale("Gatto"),
];



$products = [
    new Cucce("cuccia3000", "cuccia potentissima", 560.00, [new Animale("Cane")], "./img/71-tsDiw8iL._AC_SY355_.jpg", "Cuccia", "tessuto-spesso"),
    new Laser("BFG", "Big-gun", 900.00, [new Animale("Gatto")], "./img/download.jpg", "12v", "Rosso"),
    new Ossa("ossobuco", "Osso del ritorno", 5.99, [new Animale("Cane")], "./img/brekz-osso-di-manzo-xxl-per-cane.jpg", "Osso di bue", 20),
    new Ossa("ossobrutto", "Osso del ricettacolo", 6.99, [new Animale("Cane")], "./img/brekz-osso-di-manzo-xxl-per-cane.jpg", "Osso di Alce", 20)
];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Prodotti Animali</title>

</head>

<body>
    <div class="container d-flex">
        <div class="row d-flex">
            <?php
            foreach ($products as $product) { ?>
                <div class="col d-flex">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $product->imgurl ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo $product->name ?>
                            </h5>
                            <p class="card-text">
                                <?php echo $product->description ?>
                            </p>
                            <p class="card-text">
                                <?php echo $product->price ?>
                                €
                            </p>
                            <p class="card-text">
                                <?php if (isset($product->tipo_prodotto)) {
                                    echo $product->tipo_prodotto;
                                } elseif (isset($product->Volt)) {
                                    echo $product->Volt;
                                } elseif (isset($product->Materiale)) {
                                    echo $product->Materiale;
                                } ?>
                            </p>
                            <p class="card-text">
                                <?php if (isset($product->Size)) {
                                    echo $product->Size;
                                } elseif (isset($product->imbottitura_cuccia)) {
                                    echo $product->imbottitura_cuccia;
                                } elseif (isset($product->colore)) {
                                    echo $product->colore;
                                } ?>
                            </p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>

                <?php }
            ?>


            </div>
        </div>
    </div>
</body>

</html>
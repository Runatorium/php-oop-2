<?php
require __DIR__ . '/models/products.php';
require __DIR__ . '/models/type.php';

$tipo = new Type("Cibo");

$ciotola = new Product('Crocchette', 'Crocchette di manzo', 9.99, $tipo);
var_dump($ciotola);

$prova = new type("cane");
var_dump($prova)

    ?>
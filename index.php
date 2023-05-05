<?php
require __DIR__ . '/models/products.php';
require __DIR__ . '/models/type.php';

$tipi = [
    new Type("Cibo"),
    new Type("Attrezzo")
];

var_dump($tipi);

$ciotola = new Products('Crocchette', 'Crocchette di manzo', 9.99, $tipi);
var_dump($ciotola);

?>
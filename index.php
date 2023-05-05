<?php
require __DIR__ . '/models/products.php';

$ciotola = new Product('Crocchette', 'Crocchette di manzo', 9.99);
var_dump($ciotola);

?>
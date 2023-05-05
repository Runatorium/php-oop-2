<?php
require_once __DIR__ . '/products.php';
require_once __DIR__ . '/Animale.php';

class Cucce extends Products
{
    public $tipo_prodotto;
    public $imbottitura_cuccia;

    public function __construct($name, $description, $price, $Animale, $tipo_prodotto, $imbottitura_cuccia)
    {
        parent::__construct(
            $name,
            $description,
            $price,
            $Animale
        );
        $this->tipo_prodotto = $tipo_prodotto;
        $this->imbottitura_cuccia = $imbottitura_cuccia;
    }
}


?>
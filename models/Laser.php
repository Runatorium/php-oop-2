<?php
require_once __DIR__ . '/products.php';
require_once __DIR__ . '/Animale.php';

class Laser extends Products
{
    public string $Volt;
    public string $colore;


    public function __construct($name, $description, $price, $Animale, $imgurl, $_volt, $_colore)
    {
        parent::__construct(
            $name,
            $description,
            $price,
            $Animale,
            $imgurl
        );
        $this->Volt = $_volt;
        $this->colore = $_colore;
    }
}

?>
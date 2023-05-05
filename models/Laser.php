<?php
require_once __DIR__ . '/products.php';
require_once __DIR__ . '/Animale.php';

class Laser extends Products
{
    public int $Volt;
    public string $colore;


    public function __construct($name, $description, $price, $Animale, $_volt, $_colore)
    {
        parent::__construct(
            $name,
            $description,
            $price,
            $Animale
        );
        $this->Volt = $_volt;
        $this->colore = $_colore;
    }
}

?>
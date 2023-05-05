<?php
require_once __DIR__ . '/products.php';
require_once __DIR__ . '/Animale.php';

class Ossa extends Products
{
    public string $Materiale;
    public int $Size;

    public function __construct($name, $description, $price, $Animale, $_Materiale, $_Grandezza)
    {
        parent::__construct(
            $name,
            $description,
            $price,
            $Animale
        );
        $this->Materiale = $_Materiale;
        $this->Size = $_Grandezza;
    }
}


?>
<?php

require __DIR__ . '/products.php';

class Type
{
    public string $tipo_prodotto;

    public function __construct(
        string $_tipo,
    ) {
        $this->tipo_prodotto = $_tipo;
    }
}


?>
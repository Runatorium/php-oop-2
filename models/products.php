<?php

class Products
{

    public string $name;
    public string $description;
    public float $price;
    public $type;


    function __construct(
        string $_name,
        string $_description,
        float $_price,
        array $_tipi,
    ) {
        $this->name = $_name;
        $this->description = $_description;
        $this->price = $_price;
        $this->type = $_tipi;

        foreach ($_tipi as $tipo) {
            if (!$tipo instanceof Type) {
                "Il tipo del Prodotto deve essere un'istanza di 'Type'";
                die();
            }
        }
    }

    public function getType()
    {
        $tipi = [];
        foreach ($this->tipi as $tipo)
            $tipi[] = $tipo->tipo_prodotto;
    }
}

?>
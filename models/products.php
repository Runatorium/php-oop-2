<?php

class Products
{

    public string $name;
    public string $description;
    public float $price;
    public $Animale;
    public string $imgurl;

    function __construct(
        string $_name,
        string $_description,
        float $_price,
        array $_Animali,
        string $_imgurl
    ) {
        $this->name = $_name;
        $this->description = $_description;
        $this->price = $_price;
        $this->Animale = $_Animali;
        $this->imgurl = $_imgurl;

        foreach ($_Animali as $Animale) {
            if (!$Animale instanceof Animale) {
                "Il tipo del Prodotto deve essere un'istanza di 'Type'";
                die();
            }
        }
    }
}

?>
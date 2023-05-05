<?php

class Product
{

    public string $name;
    public string $description;
    public int $price;
    public $type;


    function __construct(
        string $_name,
        string $_description,
        int $_price,
        type $_tipo,
    ) {
        $this->name = $_name;
        $this->description = $_description;
        $this->price = $_price;
        $this->type = $_tipo;
    }
}

?>
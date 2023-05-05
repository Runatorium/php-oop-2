<?php

class Product
{

    public string $name;
    public string $description;
    public int $price;
    protected string $type;


    function __construct(
        $name,
        $description,
        $price,
    ) {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }
}

?>
<?php
class Products
{
    use CycleEach;
    public string $name;
    public string $description;
    public $Animale;
    public string $imgurl;

    function __construct(
        string $_name,
        string $_description,
        float $_price,
        $_Animali,
        string $_imgurl
    ) {
        $this->name = $_name;
        $this->description = $_description;
        $this->price = $_price;
        $this->Animale = $_Animali;
        $this->imgurl = $_imgurl;

    }

}

?>
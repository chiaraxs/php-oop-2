<!-- CLASSE FIGLIA DI PRODUCTS 
ACCESSORI: CUCCE, GUINZAGLI, COLLARI -->


<?php

require_once __DIR__ . "/product.php";


class Accessoires extends Product
{

    // variables
    protected string $brand;
    protected string $materialAccessoires;
    protected string $color;
    protected float $price;
    // / variables

    // construct
    public function __construct(string $_productName, int $_productCode, string $_productType, string $_brand, string $_materialAccessoires, string $_color, float $_price)
    {
        parent::__construct($_productName, $_productCode, $_productType);

        $this->brand = $_brand;
        $this->materialAccessoires = $_materialAccessoires;
        $this->color = $_color;
        $this->price = $_price;
    }
    // / construct 

    // funzione che richiama print nel padre (product) e aggiunge variabili
    public function print()
    {
        return $this->brand . "<br>" . "Categoria:" . parent::print() . "<br>" . "Materiale:" . $this->materialAccessoires . "<br>" . "Colore:" . $this->color . " <br>" . "Prezzo:" . $this->price . "Є";

    }
    // / funzione che richiama print nel padre (product) e aggiunge variabili

    // getter & setter
    /**
     * Get the value of brand
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set the value of brand
     *
     * @return  self
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get the value of materialAccessoires
     */
    public function getMaterialAccessoires()
    {
        return $this->materialAccessoires;
    }

    /**
     * Set the value of materialAccessoires
     *
     * @return  self
     */
    public function setMaterialAccessoires($materialAccessoires)
    {
        $this->materialAccessoires = $materialAccessoires;

        return $this;
    }

    /**
     * Get the value of color
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }
    // / getter & setter

}

// instances are in data.php



?>
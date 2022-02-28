<!-- CLASSE FIGLIA DI PRODUCTS:  
GIOCHI X ANIMALI -->

<?php

require_once __DIR__ . "/products.php";


class Toys extends Products {

    // variables
    protected string $brand;
    protected string $material;
    protected string $color;
    protected float $price;
    // / variables

    // methods
    public function __construct(string $_productName, int $_productCode, string $_productType, string $_brand, string $_material, string $_color, float $_price)
    {
        parent::__construct($_productName,$_productCode,$_productType);

        $this->brand = $_brand;
        $this->material = $_material;
        $this->color = $_color;
        $this->price = $_price;
    }
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
     * Get the value of material
     */ 
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * Set the value of material
     *
     * @return  self
     */ 
    public function setMaterial($material)
    {
        $this->material = $material;

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
    // /methods
}


?>
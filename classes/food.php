<!-- CLASSE FIGLIA DI PRODUCTS:
DETTAGLI CIBO PER ANIMALI -->

<?php

require_once __DIR__ . "/products.php";



class Food extends Products {

    // variables
    protected string $brand;
    protected string $expirationDate;
    protected int $weight;
    protected float $price;
    // / variables

    // methods
    public function __construct(string $_productName, int $_productCode, string $_productType, string $_brand, string $_expirationDate, int $_weight, float $_price){
        parent :: __construct($_productName, $_productCode, $_productType);

        $this->brand = $_brand;
        $this->expirationDate = $_expirationDate;
        $this->weight = $_weight;
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
     * Get the value of expirationDate
     */ 
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * Set the value of expirationDate
     *
     * @return  self
     */ 
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;

        return $this;
    }

    /**
     * Get the value of weight
     */ 
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set the value of weight
     *
     * @return  self
     */ 
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    // / methods

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
}


?>
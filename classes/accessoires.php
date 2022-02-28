<!-- CLASSE FIGLIA DI PRODUCTS 
QUI METTO ACCESSORI: CUCCE, GUINZAGLI, ANTIPULCI -->


<?php

require_once __DIR__ . "/products.php";


class Accessoires extends Products {

    // variables
    protected string $brand;
    protected string $materialAccessoires;
    protected int $color;
    // / variables

    // methods
    
    // / methods 

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
}



?>
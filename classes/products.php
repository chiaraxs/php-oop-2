<!-- CLASSE GENERICA (PADRE) -> FIGLI ->
1 FOOD
2 TOYS
3 ACCESSOIRES
 -->

<?php

class Products {

    // variables
    protected string $productName;
    protected int $productCode;
    protected string $productType;
    // / variables

    // construct
    function __construct(string $_productName, int $_productCode, string $_productType)   
    {
        $this->productName = $_productName;
        $this->productCode = $_productCode;
        $this->productType = $_productType;
    }
    // / construct

    
    // getter & setter
    /**
     * Get the value of productName
     */ 
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * Get the value of productCode
     */ 
    public function getProductCode()
    {
        return $this->productCode;
    }

    /**
     * Get the value of productType
     */ 
    public function getProductType()
    {
        return $this->productType;
    }
    // / getter & setter
    
    
};

// instances are in data.php

?>
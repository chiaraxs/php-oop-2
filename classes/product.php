<!-- CLASSE GENERICA (PADRE) -> FIGLI ->
1 FOOD
2 TOYS
3 ACCESSOIRES
 -->

<?php

class Product
{

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

    // funzione print -> verrà richiamata dai figli con rispettivi dettagli x categoria
    public function print()
    {
        return $this->productType . "<br>" . "Codice prodotto:" . $this->productCode;
    }
    // /funzione print -> verrà richiamata dai figli con rispettivi dettagli x categoria

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
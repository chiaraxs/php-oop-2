<!-- CLASSE FIGLIA DI USER:
 DETTAGLI CARTA DI CREDITO -->

<?php 

class creditCard extends User{

    // variables
    private string $nameOwner;
    private string $surnameOwner;
    private string $numberCard;
    private int $cvv;
    private string $expiryDate;
    // / variables

    // construct
    function __construct(string $_nameOwner, string $_surnameOwner, string $_numberCard, int $_cvv, string $_expiryDate )
    {
        $this->nameOwner = $_nameOwner;
        $this->surnameOwner = $_surnameOwner;
        $this->numberCard = $_numberCard;
        $this->cvv = $_cvv;
        $this->expiryDate = $_expiryDate;
    }
    // / construct

    // getter & setter
    /**
     * Get the value of nameOwner
     */ 
    public function getNameOwner()
    {
        return $this->nameOwner;
    }

    /**
     * Set the value of nameOwner
     *
     * @return  self
     */ 
    public function setNameOwner($nameOwner)
    {
        $this->nameOwner = $nameOwner;

        return $this;
    }

    /**
     * Get the value of surnameOwner
     */ 
    public function getSurnameOwner()
    {
        return $this->surnameOwner;
    }

    /**
     * Set the value of surnameOwner
     *
     * @return  self
     */ 
    public function setSurnameOwner($surnameOwner)
    {
        $this->surnameOwner = $surnameOwner;

        return $this;
    }

    /**
     * Get the value of numberCard
     */ 
    public function getNumberCard()
    {
        return $this->numberCard;
    }

    /**
     * Set the value of numberCard
     *
     * @return  self
     */ 
    public function setNumberCard($numberCard)
    {
        $this->numberCard = $numberCard;

        return $this;
    }

    /**
     * Get the value of cvv
     */ 
    public function getCvv()
    {
        return $this->cvv;
    }

    /**
     * Set the value of cvv
     *
     * @return  self
     */ 
    public function setCvv($cvv)
    {
        $this->cvv = $cvv;

        return $this;
    }

    /**
     * Get the value of expiryDate
     */ 
    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    /**
     * Set the value of expiryDate
     *
     * @return  self
     */ 
    public function setExpiryDate($expiryDate)
    {
        $this->expiryDate = $expiryDate;

        return $this;
    }
    // / getter & setter

}


?>
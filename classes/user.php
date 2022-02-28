<!-- CLASSE GENERICA (PADRE):
DETTAGLI UTENTE -->

<?php


class User {

    // variables
    protected string $firstName;
    protected string $lastName;
    protected string $email;
    protected int $phoneNumber;
    private bool $registered = false;
    private int $creditCard;
    // / variables

    // construct
    function __construct(string $_firstName, string $_lastName, string $_email, int $_phoneNumber, bool $_registered, int $_creditCard)
    
    {
        $this -> name = $_firstName;
        $this -> surname = $_lastName;
        $this -> email = $_email;
        $this -> phoneNumber = $_phoneNumber;
        $this -> registered = $_registered;
        $this-> creditCard = $_creditCard;
    }
    // / construct

    // methods
    public function getUserDetails()
    {
        return $this-> name . " " . $this-> surname . " " . $this-> email . " " . $this->phoneNumber . " " . $this->registered . " " . $this->creditCard;
    }

    function getDiscount()
    {
        if ($this->registered) 
        {
            return 20;
        }

        else {
            return 0;
        }

    }
    // / methods 

    // instances are in data.php
}


?>

